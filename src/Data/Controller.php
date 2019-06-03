<?php
	namespace Appuccino\Wrapper\Data;


	class Controller {

		public $name;
		public $data;

		public function set_data($data_name, $data_value) {
			$this->name = $data_name;
			$this->data = $data_value;

			return $this;
		}

		public function import($data_name, $file_uri, $file_type = 'json') {

			if(strtolower($file_type) == 'json') {

				if(file_exists($file_uri)) {
					try {
						
						$json_file = json_decode(file_get_contents($file_uri));

						$this->name = $data_name;
						$this->data = $json_file;

						return $this;

					} catch (Exception $e) {
						throw new \Exception($e);
						
					}
					
				}

				throw new \Exception("Data import file does not exist!");
			}	

			throw new \Exception("Could not import specified file type!");

		}

		public function to_array() {
			return (array) $this;
		}

	}