<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Tests\Extension\Core\Type;

use Symfony\Component\Form\FormError;

class DateTimeTypeTest extends BaseTypeTest
{
    const TESTED_TYPE = 'datetime';

    protected function setUp()
    {
        \Locale::setDefault('en');

        parent::setUp();
    }

    public function testSubmitDateTime()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'date_widget' => 'choice',
            'years' => array(2010),
            'time_widget' => 'choice',
            'input' => 'datetime',
        ));

        $form->submit(array(
            'date' => array(
                'day' => '2',
                'month' => '6',
                'year' => '2010',
            ),
            'time' => array(
                'hour' => '3',
                'minute' => '4',
            ),
        ));

        $dateTime = new \DateTime('2010-06-02 03:04:00 UTC');

        $this->assertEquals($dateTime, $form->getData());
    }

    public function testSubmitString()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'input' => 'string',
            'date_widget' => 'choice',
            'years' => array(2010),
            'time_widget' => 'choice',
        ));

        $form->submit(array(
            'date' => array(
                'day' => '2',
                'month' => '6',
                'year' => '2010',
            ),
            'time' => array(
                'hour' => '3',
                'minute' => '4',
            ),
        ));

        $this->assertEquals('2010-06-02 03:04:00', $form->getData());
    }

    public function testSubmitTimestamp()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'input' => 'timestamp',
            'date_widget' => 'choice',
            'years' => array(2010),
            'time_widget' => 'choice',
        ));

        $form->submit(array(
            'date' => array(
                'day' => '2',
                'month' => '6',
                'year' => '2010',
            ),
            'time' => array(
                'hour' => '3',
                'minute' => '4',
            ),
        ));

        $dateTime = new \DateTime('2010-06-02 03:04:00 UTC');

        $this->assertEquals($dateTime->format('U'), $form->getData());
    }

    public function testSubmitWithoutMinutes()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'date_widget' => 'choice',
            'years' => array(2010),
            'time_widget' => 'choice',
            'input' => 'datetime',
            'with_minutes' => false,
        ));

        $form->setData(new \DateTime());

        $input = array(
            'date' => array(
                'day' => '2',
                'month' => '6',
                'year' => '2010',
            ),
            'time' => array(
                'hour' => '3',
            ),
        );

        $form->submit($input);

        $this->assertEquals(new \DateTime('2010-06-02 03:00:00 UTC'), $form->getData());
    }

    public function testSubmitWithSeconds()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'date_widget' => 'choice',
            'years' => array(2010),
            'time_widget' => 'choice',
            'input' => 'datetime',
            'with_seconds' => true,
        ));

        $form->setData(new \DateTime());

        $input = array(
            'date' => array(
                'day' => '2',
                'month' => '6',
                'year' => '2010',
            ),
            'time' => array(
                'hour' => '3',
                'minute' => '4',
                'second' => '5',
            ),
        );

        $form->submit($input);

        $this->assertEquals(new \DateTime('2010-06-02 03:04:05 UTC'), $form->getData());
    }

    public function testSubmitDifferentTimezones()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'model_timezone' => 'America/New_York',
            'view_timezone' => 'Pacific/Tahiti',
            'date_widget' => 'choice',
            'years' => array(2010),
            'time_widget' => 'choice',
            'input' => 'string',
            'with_seconds' => true,
        ));

        $dateTime = new \DateTime('2010-06-02 03:04:05 Pacific/Tahiti');

        $form->submit(array(
            'date' => array(
                'day' => (int) $dateTime->format('d'),
                'month' => (int) $dateTime->format('m'),
                'year' => (int) $dateTime->format('Y'),
            ),
            'time' => array(
                'hour' => (int) $dateTime->format('H'),
                'minute' => (int) $dateTime->format('i'),
                'second' => (int) $dateTime->format('s'),
            ),
        ));

        $dateTime->setTimezone(new \DateTimeZone('America/New_York'));

        $this->assertEquals($dateTime->format('Y-m-d H:i:s'), $form->getData());
    }

    public function testSubmitDifferentTimezonesDateTime()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'model_timezone' => 'America/New_York',
            'view_timezone' => 'Pacific/Tahiti',
            'widget' => 'single_text',
            'input' => 'datetime',
        ));

        $outputTime = new \DateTime('2010-06-02 03:04:00 Pacific/Tahiti');

        $form->submit('2010-06-02T03:04:00-10:00');

        $outputTime->setTimezone(new \DateTimeZone('America/New_York'));

        $this->assertEquals($outputTime, $form->getData());
        $this->assertEquals('2010-06-02T03:04:00-10:00', $form->getViewData());
    }

    public function testSubmitStringSingleText()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'input' => 'string',
            'widget' => 'single_text',
        ));

        $form->submit('2010-06-02T03:04:00Z');

        $this->assertEquals('2010-06-02 03:04:00', $form->getData());
        $this->assertEquals('2010-06-02T03:04:00Z', $form->getViewData());
    }

    public function testSubmitStringSingleTextWithSeconds()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'model_timezone' => 'UTC',
            'view_timezone' => 'UTC',
            'input' => 'string',
            'widget' => 'single_text',
            'with_seconds' => true,
        ));

        $form->submit('2010-06-02T03:04:05Z');

        $this->assertEquals('2010-06-02 03:04:05', $form->getData());
        $this->assertEquals('2010-06-02T03:04:05Z', $form->getViewData());
    }

    public function testSubmitDifferentPattern()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'date_format' => 'MM*yyyy*dd',
            'date_widget' => 'single_text',
            'time_widget' => 'single_text',
            'input' => 'datetime',
        ));

        $dateTime = new \DateTime('2010-06-02 03:04');

        $form->submit(array(
            'date' => '06*2010*02',
            'time' => '03:04',
        ));

        $this->assertEquals($dateTime, $form->getData());
    }

    public function testInitializeWithDateTime()
    {
        // Throws an exception if "data_class" option is not explicitly set
        // to null in the type
        $this->assertInstanceOf('Symfony\Component\Form\FormInterface', $this->factory->create(static::TESTED_TYPE, new \DateTime()));
    }

    public function testSingleTextWidgetShouldUseTheRightInputType()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'widget' => 'single_text',
        ))
            ->createView();

        $this->assertEquals('datetime-local', $view->vars['type']);
    }

    public function testPassDefaultPlaceholderToViewIfNotRequired()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'required' => false,
            'with_seconds' => true,
        ))
            ->createView();

        $this->assertSame('', $view['date']['year']->vars['placeholder']);
        $this->assertSame('', $view['date']['month']->vars['placeholder']);
        $this->assertSame('', $view['date']['day']->vars['placeholder']);
        $this->assertSame('', $view['time']['hour']->vars['placeholder']);
        $this->assertSame('', $view['time']['minute']->vars['placeholder']);
        $this->assertSame('', $view['time']['second']->vars['placeholder']);
    }

    public function testPassNoPlaceholderToViewIfRequired()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'required' => true,
            'with_seconds' => true,
        ))
            ->createView();

        $this->assertNull($view['date']['year']->vars['placeholder']);
        $this->assertNull($view['date']['month']->vars['placeholder']);
        $this->assertNull($view['date']['day']->vars['placeholder']);
        $this->assertNull($view['time']['hour']->vars['placeholder']);
        $this->assertNull($view['time']['minute']->vars['placeholder']);
        $this->assertNull($view['time']['second']->vars['placeholder']);
    }

    public function testPassPlaceholderAsString()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'placeholder' => 'Empty',
            'with_seconds' => true,
        ))
            ->createView();

        $this->assertSame('Empty', $view['date']['year']->vars['placeholder']);
        $this->assertSame('Empty', $view['date']['month']->vars['placeholder']);
        $this->assertSame('Empty', $view['date']['day']->vars['placeholder']);
        $this->assertSame('Empty', $view['time']['hour']->vars['placeholder']);
        $this->assertSame('Empty', $view['time']['minute']->vars['placeholder']);
        $this->assertSame('Empty', $view['time']['second']->vars['placeholder']);
    }

    /**
     * @group legacy
     */
    public function testPassEmptyValueBC()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'empty_value' => 'Empty',
            'with_seconds' => true,
        ))
            ->createView();

        $this->assertSame('Empty', $view['date']['year']->vars['placeholder']);
        $this->assertSame('Empty', $view['date']['month']->vars['placeholder']);
        $this->assertSame('Empty', $view['date']['day']->vars['placeholder']);
        $this->assertSame('Empty', $view['time']['hour']->vars['placeholder']);
        $this->assertSame('Empty', $view['time']['minute']->vars['placeholder']);
        $this->assertSame('Empty', $view['time']['second']->vars['placeholder']);
        $this->assertSame('Empty', $view['date']['year']->vars['empty_value']);
        $this->assertSame('Empty', $view['date']['month']->vars['empty_value']);
        $this->assertSame('Empty', $view['date']['day']->vars['empty_value']);
        $this->assertSame('Empty', $view['time']['hour']->vars['empty_value']);
        $this->assertSame('Empty', $view['time']['minute']->vars['empty_value']);
        $this->assertSame('Empty', $view['time']['second']->vars['empty_value']);
    }

    public function testPassPlaceholderAsArray()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'placeholder' => array(
                'year' => 'Empty year',
                'month' => 'Empty month',
                'day' => 'Empty day',
                'hour' => 'Empty hour',
                'minute' => 'Empty minute',
                'second' => 'Empty second',
            ),
            'with_seconds' => true,
        ))
            ->createView();

        $this->assertSame('Empty year', $view['date']['year']->vars['placeholder']);
        $this->assertSame('Empty month', $view['date']['month']->vars['placeholder']);
        $this->assertSame('Empty day', $view['date']['day']->vars['placeholder']);
        $this->assertSame('Empty hour', $view['time']['hour']->vars['placeholder']);
        $this->assertSame('Empty minute', $view['time']['minute']->vars['placeholder']);
        $this->assertSame('Empty second', $view['time']['second']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddEmptyIfNotRequired()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'required' => false,
            'placeholder' => array(
                'year' => 'Empty year',
                'day' => 'Empty day',
                'hour' => 'Empty hour',
                'second' => 'Empty second',
            ),
            'with_seconds' => true,
        ))
            ->createView();

        $this->assertSame('Empty year', $view['date']['year']->vars['placeholder']);
        $this->assertSame('', $view['date']['month']->vars['placeholder']);
        $this->assertSame('Empty day', $view['date']['day']->vars['placeholder']);
        $this->assertSame('Empty hour', $view['time']['hour']->vars['placeholder']);
        $this->assertSame('', $view['time']['minute']->vars['placeholder']);
        $this->assertSame('Empty second', $view['time']['second']->vars['placeholder']);
    }

    public function testPassPlaceholderAsPartialArrayAddNullIfRequired()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'required' => true,
            'placeholder' => array(
                'year' => 'Empty year',
                'day' => 'Empty day',
                'hour' => 'Empty hour',
                'second' => 'Empty second',
            ),
            'with_seconds' => true,
        ))
            ->createView();

        $this->assertSame('Empty year', $view['date']['year']->vars['placeholder']);
        $this->assertNull($view['date']['month']->vars['placeholder']);
        $this->assertSame('Empty day', $view['date']['day']->vars['placeholder']);
        $this->assertSame('Empty hour', $view['time']['hour']->vars['placeholder']);
        $this->assertNull($view['time']['minute']->vars['placeholder']);
        $this->assertSame('Empty second', $view['time']['second']->vars['placeholder']);
    }

    public function testPassHtml5TypeIfSingleTextAndHtml5Format()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'widget' => 'single_text',
        ))
            ->createView();

        $this->assertSame('datetime-local', $view->vars['type']);
    }

    public function testDontPassHtml5TypeIfHtml5NotAllowed()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'widget' => 'single_text',
            'html5' => false,
        ))
            ->createView();

        $this->assertArrayNotHasKey('type', $view->vars);
    }

    public function testDontPassHtml5TypeIfNotHtml5Format()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd HH:mm',
        ))
            ->createView();

        $this->assertArrayNotHasKey('type', $view->vars);
    }

    public function testDontPassHtml5TypeIfNotSingleText()
    {
        $view = $this->factory->create(static::TESTED_TYPE, null, array(
            'widget' => 'text',
        ))
            ->createView();

        $this->assertArrayNotHasKey('type', $view->vars);
    }

    public function testDateTypeChoiceErrorsBubbleUp()
    {
        $error = new FormError('Invalid!');
        $form = $this->factory->create(static::TESTED_TYPE, null);

        $form['date']->addError($error);

        $this->assertSame(array(), iterator_to_array($form['date']->getErrors()));
        $this->assertSame(array($error), iterator_to_array($form->getErrors()));
    }

    public function testDateTypeSingleTextErrorsBubbleUp()
    {
        $error = new FormError('Invalid!');
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'date_widget' => 'single_text',
        ));

        $form['date']->addError($error);

        $this->assertSame(array(), iterator_to_array($form['date']->getErrors()));
        $this->assertSame(array($error), iterator_to_array($form->getErrors()));
    }

    public function testTimeTypeChoiceErrorsBubbleUp()
    {
        $error = new FormError('Invalid!');
        $form = $this->factory->create(static::TESTED_TYPE, null);

        $form['time']->addError($error);

        $this->assertSame(array(), iterator_to_array($form['time']->getErrors()));
        $this->assertSame(array($error), iterator_to_array($form->getErrors()));
    }

    public function testTimeTypeSingleTextErrorsBubbleUp()
    {
        $error = new FormError('Invalid!');
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'time_widget' => 'single_text',
        ));

        $form['time']->addError($error);

        $this->assertSame(array(), iterator_to_array($form['time']->getErrors()));
        $this->assertSame(array($error), iterator_to_array($form->getErrors()));
    }

    public function testSubmitNull($expected = null, $norm = null, $view = null)
    {
        parent::testSubmitNull($expected, $norm, array(
            // View data is an array of choice values array
            'date' => array('year' => '', 'month' => '', 'day' => ''),
            'time' => array('hour' => '', 'minute' => ''),
        ));
    }

    public function testSubmitNullWithText()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'widget' => 'text',
        ));
        $form->submit(null);

        $this->assertNull($form->getData());
        $this->assertNull($form->getNormData());
        $this->assertSame(array(
            // View data is an array of choice values array
            'date' => array('year' => '', 'month' => '', 'day' => ''),
            'time' => array('hour' => '', 'minute' => ''),
        ), $form->getViewData());
    }

    public function testSubmitNullWithSingleText()
    {
        $form = $this->factory->create(static::TESTED_TYPE, null, array(
            'widget' => 'single_text',
        ));
        $form->submit(null);

        $this->assertNull($form->getData());
        $this->assertNull($form->getNormData());
        $this->assertSame('', $form->getViewData());
    }
}
