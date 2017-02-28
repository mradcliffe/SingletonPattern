<?php

/**
 * @file
 * Singleton pattern example.
 */

require __DIR__ . '/vendor/autoload.php';

use ColumbusPHP\SingletonPattern\App;

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);

// Get an instance of the application and set foo.
$app = App::getInstance();
$app->setThing('foo');
assert($app->getThing() === 'foo');
// bool(true)

// Assert that foo is set on the second instance.
$anotherApp = App::getInstance();
assert($anotherApp->getThing() === 'foo');
// bool(true)

// Assert that bar changes in the first instance when changed from the second instance.
$anotherApp->setThing('bar');
assert($app->getThing() === 'bar');
// bool(true)

