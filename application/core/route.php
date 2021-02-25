<?php


class Route
{
    public function start()
    {
        // контроллер и действие по умолчанию
        $controller_name = 'Main';
        $action_name = 'index';

        $uri = parse_url($_SERVER['REQUEST_URI']);
        $routes = explode('/', $uri['path']);

        // Получаем имя контроллера
        if (!empty($routes[1]))
        {
            $controller_name = $routes[1];
        }

        // Получаем имя экшена
        if (!empty($routes[2]))
        {
            $action_name = $routes[2];
        }

        // Добавляем префиксы
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        // подцепляем файл с классом контроллера
        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "application/controllers/" . $controller_file;

        if (file_exists($controller_path))
        {
            require_once "application/controllers/" . $controller_file;
        }
        else
        {
            require_once "application/controllers/controller_404.php";
            $controller_name = "Controller_404";
        }

        // создаем контроллер
        $controller = new $controller_name;
        $action = $action_name;
//        echo $controller_file . "<br>";
//        echo $action_name . "<br>";
//        exit();

        if(method_exists($controller, $action))
        {
            // вызываем действие контроллера
            $controller->$action();
        }
    }
}