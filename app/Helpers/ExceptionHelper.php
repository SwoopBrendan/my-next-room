<?php namespace App\Helpers;

use Exception;

/**
 * Class ExceptionHelper
 * @package App\Helpers
 */
class ExceptionHelper
{
    /**
     * Log all aspects of an Exception.
     *
     * @param Exception $e The Exception
     * @param string $message An optional message giving context
     */
    public static function log($e, $message)
    {
        $log = self::getErrorString($e, $message);
        app('log')->error($log);
    }

    /**
     * Output all aspects of an Exception via echo.
     *
     * @param Exception $e The Exception
     * @param string $message An optional message giving context
     */
    public static function output($e, $message)
    {
        $log = self::getErrorString($e, $message);
        echo "<pre>$log</pre>";
    }

    /**
     * Output and log all aspects of an Exception via echo.
     *
     * @param Exception $e The Exception
     * @param string $message An optional message giving context
     */
    public static function outputAndLog($e, $message)
    {
        self::log($e, $message);
        self::output($e, $message);
    }

    /**
     * Return all aspects of an Exception as a String.
     *
     * @param Exception $e The Exception
     * @param string $message An optional message giving context
     * @return string The Exception details formatted as a String
     */
    private static function getErrorString($e, $message)
    {
        $log = "{$message}\nException Type ";
        $log .= get_class($e);
        $log .= "\n";
        $log .= $e->getMessage();
        $log .= "\n";
        $log .= $e->getTraceAsString();

        return $log;
    }
}