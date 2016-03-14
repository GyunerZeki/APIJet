<?php

namespace Api;

/**
 * Api
 * @package  APIJet
 * @author   Pavel Tashev
 * @since    1.0.0
 *
 */
class ApiException extends \Exception
{
    private $_error_body;
    private $_http_code;

    public function __construct($http_code, $error_body, $message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->_error_body = $error_body;
        $this->_http_code = $http_code;
    }

    public function getErrorBody() {
        return $this->_error_body;
    }

    public function getHttpCode() {
        return $this->_http_code;
    }
}
