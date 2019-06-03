<?php
	namespace Appuccino\Wrapper\Post;

	class Controller extends Model {

		/*
		 * Info: Import a post object from a file.
		 */
		public function import($file_uri, $file_type = 'json') {

			if(strtolower($file_type) == 'json') {

				if(file_exists($file_uri)) {
					try {
						
						$json_file = json_decode(file_get_contents($file_uri));

						if(is_array($json_file) && !empty($json_file)){

							foreach($json_file[0] as $key => $value) {

								$key = strtolower($key);

								if(method_exists($this, "set_{$key}")) {
									call_user_func_array(array($this, "set_{$key}"), array($value));
								}
							}

							return $this;

						} else {
							throw new \Exception("JSON object is empty or incorrect structure!");
						}

					} catch (Exception $e) {
						throw new \Exception($e);
						
					}
					
				}

				throw new \Exception("Post import file does not exist!");
			}	

			throw new \Exception("Could not import specified file type!");

		}

		public function to_array() {
			return (array) $this;
		}
	}


?>