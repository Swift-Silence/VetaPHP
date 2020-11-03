<?php

/**
 * VetaException Exception
 *
 * This is an abstract class requiring implementation of certain methods.
 */

namespace Exceptions;

class VetaException extends \Exception
{

    protected $name;

    public function __construct($message, $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public final function __toString()
    {
        $html = "<pre>";

        $html = $this->name . ": [{$this->code}]: {$this->message} [{$this->file}:{$this->line}]\n";

        $html .= "</pre>";

        return $html;
    }

}

?>
