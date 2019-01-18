<?php

namespace App\ParseClasses;

use Parse\ParseObject;
use LaraParse\Traits\CastsParseProperties;

/**
 * Class Event
 *
 * @package LaraParse
 */
class Event extends ParseObject
{
    use CastsParseProperties;

    public static $parseClassName = 'Event';
}