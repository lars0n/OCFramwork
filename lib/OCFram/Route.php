<?php

namespace OCFram;

class Route
{

    protected $action;

    protected $module;

    protected $url;

    protected $varsNames = [];

    protected $vars = [];

    function __construct(string $url, string $module, string $action, array $varsNames)
    {

    }

    public function hasVars(): bool
    {
        return !empty($this->varsNames);
    }

    public function match(string $url): bool
    {
        if (preg_match('`^'.$this->url.'$`', $url, $matches))
        {
            return $matches;
        }
        else
        {
            return false;
        }
    }

    public function setAction(string $action)
    {
        $this->action = $action;
    }

    /**
    * Set the value of Module
    *
    * @param string module
    *
    * @return self
    */
    public function setModule(string $module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Set the value of Url
     *
     * @param string url
     *
     * @return self
     */
    public function setUrl(string $url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Set the value of Vars Names
     *
     * @param array varsNames
     *
     * @return self
     */
    public function setVarsNames(array $varsNames)
    {
        $this->varsNames = $varsNames;

        return $this;
    }

    /**
     * Set the value of Vars
     *
     * @param array vars
     *
     * @return self
     */
    public function setVars(array $vars)
    {
        $this->vars = $vars;

        return $this;
    }

    /**
     * Get the value of Action
     *
     * @return mixed
     */
    public function action()
    {
        return $this->action;
    }

    /**
     * Get the value of Module
     *
     * @return mixed
     */
    public function module()
    {
        return $this->module;
    }


    /**
     * Get the value of Url
     *
     * @return mixed
     */
    public function url()
    {
        return $this->url;
    }

    /**
     * Get the value of Vars Names
     *
     * @return mixed
     */
    public function varsNames()
    {
        return $this->varsNames;
    }


    /**
     * Get the value of Vars
     *
     * @return mixed
     */
    public function vars()
    {
        return $this->vars;
    }

}
