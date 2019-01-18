<?php

namespace App\ParseClasses;

use Parse\ParseObject;
use LaraParse\Traits\CastsParseProperties;

/**
 * Class Connection
 *
 * @package LaraParse
 */
class Connection extends ParseObject
{
    use CastsParseProperties;

    public static $parseClassName = 'Connection';
}