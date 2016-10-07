<?php

class Router
{
	 public $routes = [
          'GET'=>[],
          'POST'=>[]
      ];

     private $controllers_path = "controllers/";

     public function get($uri, $action)
     {
          $this->routes['GET'][$uri] = $action;
     }

     public function post($uri, $action)
     {
          $this->routes['POST'][$uri] = $action;
     }

     public function direct($uri, $requestType)
     {
          if (array_key_exists($uri, $this->routes[$requestType])) {
               $action = $this->parseUrlAction($this->routes[$requestType][$uri]);
               $controller_file =  $this->controllers_path.$action['controller'].".php";
               if (file_exists($controller_file)) {
                    require $controller_file;
                    if (class_exists($action['controller']) && method_exists($action['controller'], $action['method'])) {
                         $controller = new $action['controller'];
                         $act = $action['method'];
                         $controller->$act(new Request);
                         exit;
                    }
               }
     	 }

     	 throw new Exception("No URI found for this route");
     }

     private function parseUrlAction($action){
          $data = explode("@", $action);
          return array("controller" => $data[0], "method" => $data[1]);
     }

     public static function redirect($url = '')
     {
          header("Location: ".$url);
     }

}