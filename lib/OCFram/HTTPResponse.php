<?php

namespace OCFram;


class HTTPResponse extends AppliactionComponent
{

    /**
     * @var Page
     */
    protected $page;

    public function addHeader(string $header)
    {
        header($header);
    }

    public function redirect(string $location)
    {
        $this->addHeader("HTTP/1.0 307 Temporary Redirect");
        $this->addHeader('location: '.$location);
        exit();
    }

    public function redirect404()
    {
        $this->addHeader('HTTP/1.0 404 Not Found');
    }

    public function send()
    {
        exit($this->page->getGeneratedPage());
    }

    public function setCookie(string $name, string $value = '',int $expire = 0,
     string $path = null, string $domain = null, bool $secure = false, bool $httpOnly = true)
     {
         setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
     }

     public function setPage(Page $page)
     {
         $this->page = $page;
     }

    /**
     * Get the value of Page
     *
     * @return Page
     */
    public function getPage()
    {
        return $this->page;
    }

}
