<?php

namespace App\services;

class SayHello {
    function sayHello(string $name): string 
    {
        return "Hello $name";
    }
}