<?php
	
	function appuccino_flatten_file_name($filename = string) {
		return str_replace('.php', '.html', $filename);
	}

	function appuccino_unflatten_file_name($filename = string) {
		return str_replace('.html', '.php', $filename);
	}

	function appuccino_get_contents($filename, $args = array()) {

		extract($args);

		ob_start();
		require $filename;
		$output = ob_get_clean();
		return $output;
	}

	function appuccino_does_file_exist($filename = string) {
		if(defined('APPUCCINO_WRAPPER_BASE_URI')) {
			return file_exists(
				rtrim(APPUCCINO_WRAPPER_BASE_URI, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . ltrim($filename, DIRECTORY_SEPARATOR)
			);
		}

		throw new \Exception("Appuccino wrapper base URI not set in config!");
	}

?>