<?php
namespace core;
class Router {
    private $routes = [];

    public function add($method, $uri, $controller) {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller): void
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller): void
    {
        $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller): void
    {
        $this->add('DELETE', $uri, $controller);
    }

    public function put($uri, $controller) {
        $this->add('PUT', $uri, $controller);
    }

    public function route($uri, $type) {
        foreach ($this->routes as $route) {
            if ($route["uri"] === $uri && $type === $route['method']) {
                return require basePath($route['controller']);
            }
        }

        abort();
    }
}