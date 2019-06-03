<?php
	
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

	use Appuccino\Wrapper\Post\Controller as Post;
	use Appuccino\Wrapper\Discovery\Controller as Discovery;
	use Appuccino\Wrapper\Serve\Controller as Serve;
	use Appuccino\Wrapper\Partials\Controller as Partial;
	use Appuccino\Wrapper\Resources\Controller as Resource;
	use Appuccino\Wrapper\Data\Controller as Data;

	$serve = new Serve();
	$discover = new Discovery();

	foreach($discover->discover_posts() as $post_uri) {
		$post = new Post();
		$serve->add_post($post->import($post_uri));
	}

	foreach($discover->discover_data() as $data_uri) {
		$data = new Data();
		$serve->add_data($data->import("test", $data_uri));
	}


	foreach($discover->discover_partials() as $partial_uri) {
		$partial = new Partial();
		$serve->add_partial($partial->import($partial_uri));
	}

	foreach($discover->discover_resources() as $resource_uri) {
		$resource = new Resource();
		$serve->add_resource($resource->import($resource_uri));
	}
	
	print_r($serve);
	die();
	
	$post = new Post();
	$post->set_id(1);
	$post->set_post_title('Test');
	$post->set_post_author(1);
	$post->set_post_date(strtotime('now'));
	$post->set_post_content('testing');
	$post->set_post_excerpt('testing...');
	$post->set_post_status('publish');
	$post->set_comment_status(1);
	$post->set_ping_status(1);
	$post->set_post_password('password');
	$post->set_post_name('test');
	$post->set_to_ping(1);
	$post->set_pinged(1);
	$post->set_post_modified(strtotime('now'));
	$post->set_post_content_filtered('testing');
	$post->set_post_parent(0);
	$post->set_guid('35e4989e-8ce0-42aa-a277-929c2b053cae');
	$post->set_menu_order(1);
	$post->set_post_type('post');
	$post->set_post_mime_type('text/html');
	$post->set_comment_count(0);
	$post->set_filter('test_filter');
	$post->set_image_encode(1);
	$post->set_category('test_filter');
	$post->set_meta_data('item', 'value');
	$post->set_settings('item', 'value');
	$post->set_settings('item2', 'value2');
	$post->set_uri('/home/test');
	$post->set_template('test.html');
	$post->set_homepage(true);

	$serve->add_post($post);

	

	// foreach((array) $post as $item => $v) {
	// 	$value = call_user_func_array(array($post, "get_{$item}"), array());
	// 	if(is_array($value)) {
	// 		$value = json_encode($value);
	// 	}
	// 	//echo "{$item} is set as " . $value . "\n";
	// } 

	//$post->import("post.json");
	//print_r($post->to_array());

?>
