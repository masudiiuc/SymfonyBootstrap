<?php

namespace SimplySend\Bundle\CoreBundle\Utility;

class Security
{
    public static function hash($string, $salt)
    {
        return sha1($string . $salt);
    }
}