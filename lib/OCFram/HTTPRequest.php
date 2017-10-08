<?php

namespace OCFram;


class HTTPRequest extends AppliactionComponent
{

    public function cookieData(string $key): string
    {
        if($this->cookieExists($key))
        {
            return $_COOKIE[$key];
        }
    }

    public function cookieExists(string $key): bool
    {
        return isset($_COOKIE[$key]);
    }

    public function getData(string $key): string
    {
        if($this->getExists($key))
        {
            return $_GET[$key];
        }
    }

    public function getExists(string $key): bool
    {
        return isset($_GET[$key]);
    }

    public function methode(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function postData(string $key): string
    {
        if($this->getExists($key))
        {
            return $_POST[$key];
        }
    }

    public function postExists(string $key): bool
    {
        return isset($_POST[$key]);
    }

    public function requestURI()
    {
        return $_SERVER('REQUEST_URI');
    }
}
