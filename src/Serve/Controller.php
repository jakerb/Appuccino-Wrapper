<?php
	namespace Appuccino\Wrapper\Serve;

	use Appuccino\Wrapper\Post\Controller as Post;
	use Appuccino\Wrapper\Partials\Controller as Partial;
	use Appuccino\Wrapper\Resources\Controller as Resource;
	use Appuccino\Wrapper\Data\Controller as Data;
	use Appuccino\Wrapper\Templates\Controller as Template;

	class Controller {

		public $posts 		= array();
		public $data		= array();
		public $partials 	= array();
		public $resources 	= array();
		public $templates 	= array();

		public function add_post($post = Post) {
			$this->posts[] = $post;
			return $this;
		}

		public function add_partial($partial = Partial) {
			$partial = array(
				'file'	=> APPUCCINO_WRAPPER_PARTIALS_URI . appuccino_flatten_file_name(basename($partial->file_uri)),
				'md5'	=> sha1_file($partial->file_uri)
			);

			$this->partials[] = $partial;

			return $this;
		}

		public function add_template($template = Template) {
			$template = array(
				'file'	=> APPUCCINO_WRAPPER_TEMPLATE_URI . appuccino_flatten_file_name(basename($template->file_uri)),
				'md5'	=> sha1_file($template->file_uri)
			);

			$this->templates[] = $template;

			return $this;
		}

		public function add_data($data = Data) {
			$this->data[$data->name] = $data->data;
			return $this; 
		}

		public function add_resource($resource = Resource, $type = false) {

			if(!defined('APPUCCINO_WRAPPER_RESOURCE_ACCEPT_TYPES')) {
				throw new \Exception('Resource Types not set!');
			}

			$accepted_types = explode('|', APPUCCINO_WRAPPER_RESOURCE_ACCEPT_TYPES);
			$file_info = pathinfo($resource->file_uri);

			if(!isset($file_info['extension']) || isset($file_info['extension']) && !in_array(strtolower($file_info['extension']), $accepted_types)) {
				throw new \Exception('Resource file does not have a valid extension!');
			}

			$path_split = explode(APPUCCINO_WRAPPER_RESOURCE_URI, $resource->file_uri);

			if(count($path_split) !== 2) {
				return false;
			}

			$resource = array(
				'file'	=> APPUCCINO_WRAPPER_RESOURCE_URI . $path_split[1],
				'md5'	=> sha1_file($resource->file_uri),
				'type'	=> strtolower($file_info['extension'])
			);

			$this->resources[] = $resource;

			return $this;
		}

	}