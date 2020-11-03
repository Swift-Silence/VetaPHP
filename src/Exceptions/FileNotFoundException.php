<?php

/**
 * FileNotFoundException Exception.
 *
 * This exception handles errors around a file not found error in the backend.
 *
 * @author Tyler Smith
 */

namespace Exceptions;

use \Exceptions\VetaException;

class FileNotFoundException extends VetaException
{
    public function __construct($message, $code = 404, \Exception $previous = null)
    {
        $this->name = __CLASS__;
        parent::__construct($message, $code, $previous);
    }
}

?>
