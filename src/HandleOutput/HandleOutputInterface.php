<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ByJG\RestServer\HandleOutput;

use ByJG\RestServer\HttpResponse;
use Whoops\Handler\Handler;

/**
 *
 * @author jg
 */
interface HandleOutputInterface
{

    /**
     * @return void
     */
    public function writeHeader();

    /**
     * @param \ByJG\RestServer\HttpResponse $class
     * @return string
     */
    public function processResponse(HttpResponse $class);

    /**
     * @return Handler
     */
    public function getErrorHandler();

    /**
     * @return \ByJG\Serializer\Formatter\FormatterInterface
     */
    public function getFormatter();

    /**
     * @param $data
     * @return mixed
     */
    public function writeData($data);
}
