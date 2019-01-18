<?php

namespace App\ParseClasses;

use Parse\ParseObject;
use LaraParse\Traits\CastsParseProperties;

/**
 * Class Attendee
 *
 * @package LaraParse
 */
class Attendee extends ParseObject
{
    use CastsParseProperties;

    public static $parseClassName = 'Attendee';
}