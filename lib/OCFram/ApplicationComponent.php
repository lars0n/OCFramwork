<?php

namespace OCFram;

abstract class AppliactionComponent
{

    /**
     *
     * @var Application
     */
    protected $app;

    function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function app()
    {
        return $this->app;
    }
}
