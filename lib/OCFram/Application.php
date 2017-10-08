<?php

namespace OCFram;


abstract class Application
{

    /**
     *
     * @var HTTPRequest
     */
    protected $httpRequest;

    /**
     *
     * @var HTTPResponse
     */
    protected $httpResponse;

    /**
     *
     * @var string
     */
    protected $name;

    public function __construct()
    {
        $this->httpRequest = new \OCFram\HTTPRequest($this);
        $this->httpResponse = new \OCFram\HTTPResponse($this);
        $this->name = '';
    }

    abstract public function run();

    public function httpRequest()
    {
        return $this->httpRequest;
    }

    public function httpResponse()
    {
        return $this->httpResponse;
    }
}
