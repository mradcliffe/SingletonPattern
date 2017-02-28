<?php

namespace ColumbusPHP\Tests\SingletonPattern\Unit;

use ColumbusPHP\SingletonPattern\App;
use PHPUnit\Framework\TestCase;

/**
 * App Test.
 *
 * @group singletonpattern
 */
class AppTest extends TestCase
{
    /**
     * Asserts that a new object is created.
     */
    public function testGetInstanceFromNull()
    {
        $app = App::getInstance();

        $this->assertInstanceOf('\ColumbusPHP\SingletonPattern\App', $app);
    }

    /**
     * Demonstrates the pattern of a Singleton.
     */
    public function testGetInstanceAlreadyCreated()
    {
        $app = App::getInstance();
        $anotherApp = App::getInstance();

        $this->assertEquals($app, $anotherApp);
    }

    /**
     * Demonstrates the anti-pattern of a Singleton.
     */
    public function testGetThingState()
    {
        // Get the singleton and set a thing value.
        $app = App::getInstance();
        $app->setThing('first');

        // Get the singleton and set a thing value to something else.
        $anotherApp = App::getInstance();
        $anotherApp->setThing('second');

        // Confirm that the first singleton's thing value is the same as the second value.
        $this->assertEquals('second', $app->getThing());
    }
}
