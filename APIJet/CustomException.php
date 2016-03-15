<?php

namespace APIJet;

/**
 * @package  APIJet
 * @author   Pavel Tashev
 * @since    1.0.0
 */
class CustomException extends \Exception
{
    private $error_body;
    private $http_code;

    public function __construct($http_code, $error_body, $message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->error_body = $error_body;
        $this->http_code = $http_code;
    }

    public function getErrorBody() {
        return $this->error_body;
    }

    public function getHttpCode() {
        return $this->http_code;
    }
}
