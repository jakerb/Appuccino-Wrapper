<?php
	namespace Appuccino\Wrapper\Router;

	class Controller {
	
		public $routes = array();

		function listen($current_route) {
			if(isset($this->routes[$current_route]) && is_callable($this->routes[$current_route])) {
				$call = call_user_func($this->routes[$current_route]);
				if(is_array($call) || is_object($call)) {
					die(json_encode($call));
				}

				if(!empty($call)) {
					echo $call; die();
				}

				die('<!-- File does not exist -->');
			}

			return false;
		}

		function register($route_uri, $callback) {
			$this->routes[$route_uri] = $callback;
		}
	
	}
?>