<?php
	namespace Appuccino\Wrapper\Partials;


	class Controller {

		public $file_uri;

		public function import($partial_uri) {
			if(!defined('APPUCCINO_WRAPPER_PARTIALS_URI')) {
				throw new \Exception("Partial URI not set!");
			} 

			if(!is_dir(APPUCCINO_WRAPPER_PARTIALS_URI)) {
				throw new \Exception("Template URI not a valid directory!");
			}

			if(file_exists($partial_uri)) {
				$this->file_uri = $partial_uri;
			}  else {
				return false;
			}

			return $this;
		}

	}