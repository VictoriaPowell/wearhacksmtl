<?php

namespace App\ParseClasses;

use Parse\ParseObject;
use LaraParse\Traits\CastsParseProperties;

/**
 * Class Profile
 *
 * @package LaraParse
 */
class Profile extends ParseObject
{
    use CastsParseProperties;

    public static $parseClassName = 'Profile';
}