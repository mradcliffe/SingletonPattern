<?php

namespace ColumbusPHP\SingletonPattern;

/**
 * App singleton.
 */
class App
{
    /**
     * The application object.
     *
     * @property \ColumbusPHP\SingletonPattern\App
     */
    protected static $app;

    /**
     * A variable on the object.
     *
     * @property string
     */
    protected $thing;

    /**
     * Initialize method is protected.
     */
    protected function __construct()
    {
    }

    /**
     * Get the application instance.
     *
     * @return \ColumbusPHP\SingletonPattern\App
     *   The application instance.
     */
    public static function getInstance()
    {
        if (null === self::$app) {
            self::$app = new static();
        }
        return self::$app;
    }

    /**
     * Set the thing value.
     *
     * @param string $value
     */
    public function setThing($value = '')
    {
        $this->thing = $value;
    }

    /**
     * Get the app's thing.
     *
     * @return string
     *   Return the app's thing.
     */
    public function getThing()
    {
        return $this->thing;
    }
}
