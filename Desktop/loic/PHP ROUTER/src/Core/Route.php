<?php

namespace App\Core;

class Route
{
    private string $path;
    private $callable;
    private $matches = [];
    
    public function __construct(string $path,$callable)
    {
        $this->path = $path;
        $this->callable = $callable;
    }

    public function match(string $url): bool
    {
        // on enlève le / après le contenu de url
        $url = trim($url, '/');
        // remplace ce qui se trouve apres les : par un regex
        $path = preg_replace('#:([\w]+)#','([^/]+)',$this->path);

        // on crée un nouveau regex
        $regex = "#^$path$#i";
        // si le regex ne match pas avec l'url, retourne false
        if(!preg_match($regex,$url,$matches)){
            return false;
        }

        // matches comprend ce qui a été enlevé plus l'url
        array_shift($matches);
        $this->matches = $matches;
        return true;
    }

    public function call()
    {
        return call_user_func($this->callable,$this->matches);
    }
}