<?php
    namespace src\routes;

    class routes {
        private $routes = [];

        public function add($method, $path, $action) {
            $this->routes[] = [
                'method'=>strtoupper($method),
                'path'=>$path,
                'action'=>$action
            ];
        }

        public function handleRequest() {
            $method = $_SERVER['REQUEST_METHOD'];
            $fullpath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

            $basepath = "/fatec/pw-27-05/public";
            $path = substr($fullpath, strlen($basepath));

            if ($path === false || $path === '') $path = "/";

            foreach ($this->routes as $r) {
                $routepath = preg_replace('/\{[^\}]+\}/', '([^/]+)', $r['path']);
                $routepath = str_replace('/', '\/', $routepath);
                if ($r['method'] == $method && preg_match('/^'.$routepath.'$/', $path, $matches)) {
                    array_shift($matches);
                    call_user_func_array($r['action'], $matches);
                    return;
                }
            }
        }

    }
?>