<?php

namespace HEGO\Domains\Auth\Exceptions;

class InvalidCredentials extends \Exception
{
    protected $message = "The data entered is not valid";
}