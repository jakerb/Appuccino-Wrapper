<?php
	
	header('Content-Type: application/json');
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	date_default_timezone_set('Europe/London');
	define('APPUCCINO_WRAPPER_BASE_URI', __DIR__);

	require '../config/config.php';
	require '../config/functions.php';

	require '../Post/Model.php';
	require '../Post/Controller.php';
	require '../Discovery/Controller.php';
	require '../Serve/Controller.php';
	require '../Partials/Controller.php';
	require '../Resources/Controller.php';
	require '../Data/Controller.php';
	require '../Templates/Controller.php';
	require '../Router/Controller.php';

	use Appuccino\Wrapper\Post\Controller as Post;
	use Appuccino\Wrapper\Discovery\Controller as Discovery;
	use Appuccino\Wrapper\Serve\Controller as Serve;
	use Appuccino\Wrapper\Partials\Controller as Partial;
	use Appuccino\Wrapper\Resources\Controller as Resource;
	use Appuccino\Wrapper\Data\Controller as Data;
	use Appuccino\Wrapper\Router\Controller as Router;
	use Appuccino\Wrapper\Templates\Controller as Template;

	$router = new Router();
	
	/* 
	 * Output Resources, Templates and Partials to /manifest.json
	 */

	function get_manifest() {
		
		$serve = new Serve();
		$discover = new Discovery();

		/* 
		 * Add resources to manifest.
		 */
		foreach($discover->discover_resources() as $resource_uri) {
			$resource = new Resource();
			$serve->add_resource($resource->import($resource_uri));
		}

		/* 
		 * Add partials to manifest.
		 */
		foreach($discover->discover_partials() as $partial_uri) {
			$partial = new Partial();
			$serve->add_partial($partial->import($partial_uri));
		}

		/* 
		 * Add templates to manifest.
		 */
		foreach($discover->discover_templates() as $template_uri) {
			$template = new Template();
			$serve->add_template($template->import($template_uri));
		}

		/* 
		 * Return manifest.
		 */
		return array_merge($serve->partials, $serve->resources, $serve->templates);

	}

	$router->register('/manifest.json', function() { return get_manifest(); });

	/* 
	 * Output Posts and Data to /file.json
	 */
	$router->register('/file.json', function() {

		$serve = new Serve();
		$discover = new Discovery();
		$file = isset($_GET['file']) ? ltrim(str_replace('../', false, $_GET['file']), '/') : false;

		/*
		 * If the file parameter is set, check if exists.
		 */
		if($file) {
			if(strtolower($file) == 'posts.json') {

				foreach($discover->discover_posts() as $post_uri) {
					$post = new Post();
					$serve->add_post($post->import($post_uri));
				}

				foreach($discover->discover_data() as $data_uri) {
					$data = new Data();
					$serve->add_data($data->import("test", $data_uri));
				}

				return array(
					'posts' => $serve->posts, 
					'data'	=> $serve->data
				);
			}
			
			$manifest = get_manifest();

			foreach($manifest as $item) {
				if(isset($item['file']) == $file) {
					$file = appuccino_unflatten_file_name(APPUCCINO_WRAPPER_BASE_URI . DIRECTORY_SEPARATOR . $file);
					if(file_exists($file)) {
						return appuccino_get_contents($file, array());
					}
				}
			}
		}

	});	

	$router->listen(@$_SERVER['PATH_INFO']);

?>