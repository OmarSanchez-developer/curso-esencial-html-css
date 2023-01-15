<?php

namespace App\Http;

class Request
{
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct()
    {
         // mipagina.test/servicios/index
         $this->segments = explode('/', $_SERVER['REQUEST_URI']);

         var_dump($_SERVER['REQUEST_URI']);
    }
}
?>