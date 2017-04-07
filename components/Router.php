<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = include(ROOT . '/config/routes.php');
    }

    /**
     * Returns request string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return strtolower(trim($_SERVER['REQUEST_URI'], '/'));
        }
    }

    public function run()
    {
        // Получить строку запроса
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {      // ~ заменяем на '/'
                // Получаем внутренний путь из внешнего согласно правилу
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                // Определить контроллер, action, параметр
                $segments = explode('/', $internalRoute);
                $controllerName = ucfirst(array_shift($segments)) . 'Controller';
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;
                // Подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                // Создать обьект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;
//                echo $controllerName . '<br>' . $actionName . '<br>';
//                print_r($parameters);
                call_user_func_array([$controllerObject, $actionName], $parameters);
                break;
            }
        }
    }
}