<?php

namespace veerenjp\RestAPI\Exceptions;

class UnauthorizedException extends ApiException
{
    protected $statusCode = 403;

    protected $code = ErrorCodes::UNAUTHORIZED_EXCEPTION;

    protected $message = "Not authorized to perform this request";
}