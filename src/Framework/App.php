<?php

declare(strict_types=1);

namespace Framework;

use Framework\Router;




class App {


        private Router $router;

        public function __construct()
        {
            $this->router = new Router;
        }


        public function run(){

            $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $method = $_SERVER['REQUEST_METHOD'];

            $this->router->dispatch($path, $method);
        }


        public function addRoute(string $path, string $method,  array $controller){

                $this->router->add($path, $method, $controller);

        }

        public function get(string $path, array $controller){

                $this->router->add('GET', $path, $controller);
        }


        public function post( string $path, array $controller){

            $this->router->add('POST', $path, $controller);
    }


}