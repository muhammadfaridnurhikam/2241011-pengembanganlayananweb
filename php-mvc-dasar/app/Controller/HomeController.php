<?php

namespace WebLanjutan\PHP\MVC\DASAR\Controller;

class HomeController
{
    function index(): void 
    {
        echo "HomeController.index()";
    }

    function hello(): void 
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Web Lanjutan PHP MVC";
    }
}