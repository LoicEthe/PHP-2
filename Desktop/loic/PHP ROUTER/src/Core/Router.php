<?php

namespace App\Core;

use App\Exception\RouterException;
use App\Core\Route;

class Router
{
    private string $url; // Contient les infos du $_GET pour le routeur
    private array $routes = []; // Contient l'ensemble des routes dispo

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function add($path, $callable): Route
    {
        $route = new Route($path,$callable);
        $this->routes["GET"][] = $route;
        return $route;
    }

    public function run()
    {
        // on boucle sur chaque route de get
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route)
        {
            // si le routeur match avec l'url stocké 
            if($route->match($this->url))
            {
                // execution du routeur
                return $route->call();
            }
        }

        throw new RouterException("Aucune route trouvée avec cette url");
    }
}