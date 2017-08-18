<?php

<<<<<<< HEAD
//Component for work with routes
class Router
{

    //Array with routes
    private $routes;


    public function __construct()
    {
        // File path with routes
        $routesPath = ROOT . '/config/routes.php';

        // Get routes from file
        $this->routes = include($routesPath);
    }

    
    //Returns the query string
=======
/**
 * Класс Router
 * Компонент для работы с маршрутами
 */
class Router
{

    /**
     * Свойство для хранения массива роутов
     * @var array 
     */
    private $routes;

    /**
     * Конструктор
     */
    public function __construct()
    {
        // Путь к файлу с роутами
        $routesPath = ROOT . '/config/routes.php';

        // Получаем роуты из файла
        $this->routes = include($routesPath);
    }

    /**
     * Возвращает строку запроса
     */
>>>>>>> parent of 758e53e... 5
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

<<<<<<< HEAD
    //Method for request processing
    public function run()
    {
        // Get string request
        $uri = $this->getURI();

        // Check the availability of such a request in the routes array (routes.php)
        foreach ($this->routes as $uriPattern => $path) {

            // Compare $uriPattern and $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Get an internal path from an external path according to the rule.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Identify controller, action, parameters
=======
    /**
     * Метод для обработки запроса
     */
    public function run()
    {
        // Получаем строку запроса
        $uri = $this->getURI();

        // Проверяем наличие такого запроса в массиве маршрутов (routes.php)
        foreach ($this->routes as $uriPattern => $path) {

            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                // Определить контроллер, action, параметры
>>>>>>> parent of 758e53e... 5

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

<<<<<<< HEAD
                // Connect the controller class file
=======
                // Подключить файл класса-контроллера
>>>>>>> parent of 758e53e... 5
                $controllerFile = ROOT . '/controllers/' .
                        $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

<<<<<<< HEAD
                // Create object, call method (action)
                $controllerObject = new $controllerName;

                //Calling the required method ($actionName) in some class ($controllerObject) with specified parameters ($parameters)
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                // If the controller method is successfully called, we terminate the router
=======
                // Создать объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;

                /* Вызываем необходимый метод ($actionName) у определенного 
                 * класса ($controllerObject) с заданными ($parameters) параметрами
                 */
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                // Если метод контроллера успешно вызван, завершаем работу роутера
>>>>>>> parent of 758e53e... 5
                if ($result != null) {
                    break;
                }
            }
        }
    }

}
