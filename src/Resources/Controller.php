<?php
	namespace Appuccino\Wrapper\Resources;


	class Controller {

		public $file_uri;

		public function import($resource_uri) {
			if(!defined('APPUCCINO_WRAPPER_RESOURCE_URI')) {
				throw new \Exception("Resource URI not set!");
			} 

			if(!is_dir(APPUCCINO_WRAPPER_RESOURCE_URI)) {
				throw new \Exception("Resource URI not a valid directory!");
			}

			if(file_exists($resource_uri)) {
				$this->file_uri = $resource_uri;
			}  else {
				return false;
			}

			return $this;
		}

	}