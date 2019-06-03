<?php
	namespace Appuccino\Wrapper\Discovery;

	use Appuccino\Wrapper\Post\Controller as Post;

	class Controller {

		public function discover_data() {

			$data = array();

			if(!defined('APPUCCINO_WRAPPER_DATA_URI')) {
				throw new \Exception("Data URI not set!");
			} 

			if(!is_dir(APPUCCINO_WRAPPER_RESOURCE_URI)) {
				throw new \Exception("Data URI not a valid directory!");
			}

			foreach(glob(rtrim(APPUCCINO_WRAPPER_DATA_URI, DIRECTORY_SEPARATOR) . '/*.json') as $file) {
				$data_file = rtrim(APPUCCINO_WRAPPER_BASE_URI, DIRECTORY_SEPARATOR) . '/' . ltrim($file, DIRECTORY_SEPARATOR);
				if(is_file($data_file)) {
					$data[] = $data_file;
				}
			} 

			return $data;

		}

		public function discover_resources() {

			$resources = array();

			if(!defined('APPUCCINO_WRAPPER_RESOURCE_URI')) {
				throw new \Exception("Resource URI not set!");
			} 

			if(!is_dir(APPUCCINO_WRAPPER_RESOURCE_URI)) {
				throw new \Exception("Resource URI not a valid directory!");
			}

			foreach(glob(rtrim(APPUCCINO_WRAPPER_RESOURCE_URI, DIRECTORY_SEPARATOR) . '/*/*') as $file) {
				$resource_file = rtrim(APPUCCINO_WRAPPER_BASE_URI, DIRECTORY_SEPARATOR) . '/' . ltrim($file, DIRECTORY_SEPARATOR);
				if(is_file($resource_file)) {
					$resources[] = $resource_file;
				}
			} 

			return $resources;

		}

		public function discover_templates() {

			$templates = array();

			if(!defined('APPUCCINO_WRAPPER_TEMPLATE_URI')) {
				throw new \Exception("Partial URI not set!");
			} 

			if(!is_dir(APPUCCINO_WRAPPER_TEMPLATE_URI)) {
				throw new \Exception("Resource URI not a valid directory!");
			}

			foreach(glob(rtrim(APPUCCINO_WRAPPER_TEMPLATE_URI, DIRECTORY_SEPARATOR) . '/*.php') as $file) {
				$template_file = rtrim(APPUCCINO_WRAPPER_BASE_URI, DIRECTORY_SEPARATOR) . '/' . ltrim($file, DIRECTORY_SEPARATOR);
				if(is_file($template_file)) {
					$templates[] = $template_file;
				}
			} 

			return $templates;

		}

		public function discover_partials() {

			$partials = array();

			if(!defined('APPUCCINO_WRAPPER_PARTIALS_URI')) {
				throw new \Exception("Partial URI not set!");
			} 

			if(!is_dir(APPUCCINO_WRAPPER_PARTIALS_URI)) {
				throw new \Exception("Resource URI not a valid directory!");
			}

			foreach(glob(rtrim(APPUCCINO_WRAPPER_PARTIALS_URI, DIRECTORY_SEPARATOR) . '/*.php') as $file) {
				$partial_file = rtrim(APPUCCINO_WRAPPER_BASE_URI, DIRECTORY_SEPARATOR) . '/' . ltrim($file, DIRECTORY_SEPARATOR);
				if(is_file($partial_file)) {
					$partials[] = $partial_file;
				}
			} 

			return $partials;

		}

		public function discover_posts() {

			$posts = array();

			if(!defined('APPUCCINO_WRAPPER_POSTS_URI')) {
				throw new \Exception("Posts URI not set!");
			} 

			if(!is_dir(APPUCCINO_WRAPPER_POSTS_URI)) {
				throw new \Exception("Posts URI not a valid directory!");
			}

			foreach(glob(rtrim(APPUCCINO_WRAPPER_POSTS_URI, DIRECTORY_SEPARATOR) . '/*.json') as $file) {
				$post_file = rtrim(APPUCCINO_WRAPPER_BASE_URI, DIRECTORY_SEPARATOR) . '/' . ltrim($file, DIRECTORY_SEPARATOR);
				$posts[] = $post_file;
			} 

			return $posts;

		}
	}


?>