<?php
	namespace Appuccino\Wrapper\Templates;


	class Controller {

		public $file_uri;

		public function import($template_uri) {
			if(!defined('APPUCCINO_WRAPPER_TEMPLATE_URI')) {
				throw new \Exception("Template URI not set!");
			} 

			if(!is_dir(APPUCCINO_WRAPPER_TEMPLATE_URI)) {
				throw new \Exception("Template URI not a valid directory!");
			}

			if(file_exists($template_uri)) {
				$this->file_uri = $template_uri;
			}  else {
				return false;
			}

			return $this;
		}

	}