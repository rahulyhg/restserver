<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ByJG\RestServer\HandleOutput;

use ByJG\RestServer\ServiceAbstract;
use Whoops\Handler\Handler;

/**
 *
 * @author jg
 */
interface HandleOutputInterface
{

    /**
     * @param $option
     * @param $value
     * @return $this
     */
    public function option($option, $value);

    /**
     * @return void
     */
    public function writeHeader();

    /**
     * @param \ByJG\RestServer\ServiceAbstract $class
     * @return string
     */
    public function writeOutput(ServiceAbstract $class);

    /**
     * @return Handler
     */
    public function getErrorHandler();

    /**
     * @return \ByJG\Serializer\Formatter\FormatterInterface
     */
    public function getFormatter();
}
