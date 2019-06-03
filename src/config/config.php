<?php

	$config = array(
		'APPUCCINO_WRAPPER_BASE_URI' 				=> __DIR__,
		'APPUCCINO_WRAPPER_TEMPLATE_URI'			=> 'templates/',
		'APPUCCINO_WRAPPER_PARTIALS_URI'			=> 'partials/',
		'APPUCCINO_WRAPPER_RESOURCE_URI'			=> 'resources/',
		'APPUCCINO_WRAPPER_RESOURCE_ACCEPT_TYPES' 	=> 'js|css',
		'APPUCCINO_WRAPPER_POSTS_URI'				=> 'posts/',
		'APPUCCINO_WRAPPER_DATA_URI'				=> 'data/',
	);
		
	foreach($config as $config_key => $config_value) {
		if(!defined($config_key)) {
			define($config_key, $config_value);
		}
	}

?>