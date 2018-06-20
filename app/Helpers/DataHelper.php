<?php namespace App\Helpers;

/**
 * Class DataHelper
 * @package App\Helpers
 */
class DataHelper
{
    /**
     * createUid.
     *
     * Pattern defines the number of characters in each part of the uuid.  We loop through the
     * pattern and replace the number with the proper amount of random hex chars.
     *
     * @version 1.0.0
     * @author Andy Beak
     * @since 1.0.0
     * @access public
     *
     * @param array $pattern
     * @return string
     */
    public static function createUid(array $pattern = [8, 4, 4, 4, 12])
    {
        foreach ($pattern as $key => $length) {
            $bytes = openssl_random_pseudo_bytes($length / 2, $cStrong);

            if (false === $cStrong) {
                app('log')->info(__METHOD__ . ' : Host has insecure crypto method - try updating');
            }

            $pattern[$key] = bin2hex($bytes);
        }

        return implode('-', $pattern);
    }
}