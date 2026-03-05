<?php

namespace App\Exceptions;

use Exception;

class GeocodingLimitExceededException extends Exception
{
    /**
     * GeocodingLimitExceededException constructor.
     *
     * @param string $message
     */
    public function __construct($message = 'Geocoding daily limit exceeded. Please try again tomorrow.')
    {
        parent::__construct($message);
    }
}
