<?php

	namespace Appuccino\Wrapper\Post;

	class Model {

		public $id;
		public $post_author;
		public $post_date;
		public $post_date_gmt;
		public $post_content;
		public $post_title;
		public $post_excerpt;
		public $post_status;
		public $comment_status;
		public $ping_status;
		public $post_password;
		public $post_name;
		public $to_ping;
		public $pinged;
		public $post_modified;
		public $post_modified_gmt;
		public $post_content_filtered;
		public $post_parent;
		public $guid;
		public $menu_order;
		public $post_type;
		public $post_mime_type;
		public $comment_count;
		public $filter;
		public $uri;
		public $image_encode;
		public $categories;
		public $meta_data;
		public $settings;
		public $template;
		public $homepage;


		public function get_id() { 
			return $this->id; 
		}                                                                                            
		public function get_post_author() { 
			return $this->post_author; 
		}                                                                          

		public function get_post_date() { 
			return $this->post_date; 
		}                                                                              

		public function get_post_date_gmt() { 
			return $this->post_date_gmt; 
		}                                                                      

		public function get_post_content() { 
			return $this->post_content; 
		}                                                                        

		public function get_post_title() { 
			return $this->post_title; 
		}                                                                            

		public function get_post_excerpt() { 
			return $this->post_excerpt; 
		}                                                                        

		public function get_post_status() { 
			return $this->post_status; 
		}                                                                          

		public function get_comment_status() { 
			return $this->comment_status; 
		}                                                                    

		public function get_ping_status() { 
			return $this->ping_status; 
		}                                                                          

		public function get_post_password() { 
			return $this->post_password; 
		}                                                                      

		public function get_post_name() { 
			return $this->post_name; 
		}                                                                              

		public function get_to_ping() { 
			return $this->to_ping; 
		}                                                                                  

		public function get_pinged() { 
			return $this->pinged; 
		}                                                                                    

		public function get_post_modified() { 
			return $this->post_modified; 
		}                                                                      

		public function get_post_modified_gmt() { 
			return $this->post_modified_gmt; 
		}

		public function get_post_content_filtered() { 
			return $this->post_content_filtered; 
		}                                                      

		public function get_post_parent() { 
			return $this->post_parent; 
		}                                                                          

		public function get_guid() { 
			return $this->guid; 
		}                                                                                        

		public function get_menu_order() { 
			return $this->menu_order; 
		}                                                                            

		public function get_post_type() { 
			return $this->post_type; 
		}                                                                              

		public function get_post_mime_type() { 
			return $this->post_mime_type; 
		}                                                                    

		public function get_comment_count() { 
			return $this->comment_count; 
		}                                                                      

		public function get_filter() { 
			return $this->filter;
		}                                                                                    

		public function get_uri() { 
			return $this->uri; 
		}                                                                                          

		public function get_image_encode() { 
			return $this->image_encode; 
		}                                                                        

		public function get_categories() { 
			return $this->categories; 
		}                                                                            

		public function get_meta_data() { 
			return $this->meta_data; 
		}                                                                              

		public function get_settings() { 
			return $this->settings; 
		}                                                                                

		public function get_template() { 
			return $this->template; 
		}

		public function get_homepage() { 
			return $this->homepage; 
		} 

		/* 
		 * Property: @to_ping
		 * Type: int
		 */ 
		public function set_id($id = int) {
			$this->id = $id;
			return $this;
		}

		public function remove_id() {
			$this->id = null;
			return $this;
		}

		public function update_id($id = int) {
			return $this->set_id($id);
		}

		/* 
		 * Property: @title
		 * Type: string
		 */ 

		public function set_post_title($title = string) {
			$this->post_title = $title;
			return $this;
		}

		public function remove_post_title() {
			$this->post_title = null;
			return $this;
		}

		public function update_post_title($title = string) {
			return $this->update_post_title($title);
		}

		/* 
		 * Property: @author
		 * Type: integer
		 */ 
		public function set_post_author($author = int) {
			$this->post_author = $author;
			return $this;
		}

		public function remove_post_author() {
			$this->post_author = null;
			return $this;
		}

		public function update_post_author($author = int) {
			return $this->set_post_author($author);
		}

		/* 
		 * Property: @date
		 * Type: datetime
		 */ 
		public function set_post_date($date = int) {
			$this->post_date = $date;
			$this->post_date_gmt = implode('', array($date, 'GMT'));
			
			return $this;
		}

		public function remove_post_date() {
			$this->post_date = null;
			return $this;
		}

		public function update_post_date($date = int) {
			return $this->set_post_date($date);
		}

		/* 
		 * Property: @content
		 * Type: string
		 */ 
		public function set_post_content($content = string) {
			$this->post_content = $content;
			return $this;
		}

		public function remove_post_content() {
			$this->post_content = null;
			return $this;
		}

		public function update_post_content($content = string) {
			return $this->set_post_content($content);
		}

		/* 
		 * Property: @excerpt
		 * Type: string
		 */ 
		public function set_post_excerpt($excerpt = string) {
			$this->post_excerpt = $excerpt;
			return $this;
		}

		public function remove_post_excerpt() {
			$this->post_excerpt = null;
			return $this;
		}

		public function update_post_excerpt($excerpt = string) {}

		/* 
		 * Property: @status
		 * Type: integer
		 */ 
		public function set_post_status($status = int) {
			$this->post_status = $status;
			return $this;
		}

		public function remove_post_status() {
			$this->post_status = null;
			return $this;
		}

		public function update_post_status($status = int) {
			$this->post_status = $status;
			return $this;
		}

		/* 
		 * Property: @comment_status
		 * Type: integer
		 */ 
		public function set_comment_status($status = int) {
			$this->comment_status = $status;
			return $this;
		}

		public function remove_comment_status() {
			$this->comment_status = null;
			return $this;
		}

		public function update_comment_status($status = int) {}

		/* 
		 * Property: @ping_status
		 * Type: integer
		 */ 
		public function set_ping_status($status = int) {
			$this->ping_status = $status;
			return $this;
		}

		public function remove_ping_status() {
			$this->ping_status = null;
			return $this;
		}

		public function update_ping_status($status = int) {
			return $this->set_ping_status($status);
		}

		/* 
		 * Property: @post_password
		 * Type: string
		 */ 
		public function set_post_password($post_password = string) {
			$this->post_password = $post_password;
			return $this;
		}

		public function remove_post_password() {
			$this->post_password = null;
			return $this;
		}

		public function update_post_password($post_password = string) {
			return $this->set_post_password($post_password);
		}

		/* 
		 * Property: @post_name
		 * Type: string
		 */ 
		public function set_post_name($post_name = string) {
			$this->post_name = $post_name;
			return $this;
		}

		public function remove_post_name() {
			$this->post_name = null;
			return $this;
		}

		public function update_post_name($post_name = string) {
			return $this->set_post_name($post_name);
		}

		/* 
		 * Property: @to_ping
		 * Type: int
		 */ 
		public function set_to_ping($to_ping = int) {
			$this->to_ping = $to_ping;
			return $this;
		}

		public function remove_to_ping() {
			$this->to_ping = null;
			return $this;
		}

		public function update_to_ping($to_ping = int) {
			return $this->set_to_ping($to_ping);
		}

		/* 
		 * Property: @pinged
		 * Type: int
		 */ 
		public function set_pinged($pinged = int) {
			$this->pinged = $pinged;
			return $this;
		}

		public function remove_pinged() {
			$this->pinged = null;
			return $this;
		}

		public function update_pinged($pinged = int) {
			return $this->set_pinged($pinged);
		}

		/* 
		 * Property: @post_modified
		 * Type: int
		 */ 
		public function set_post_modified($post_modified = int) {
			$this->post_modified = $post_modified;
			$this->post_modified_gmt = implode('', array($post_modified, 'GMT'));
			return $this;
		}

		public function remove_post_modified() {
			$this->post_modified = null;
			return $this;
		}

		public function update_post_modified($post_modified = int) {
			return $this->set_post_modified($post_modified);
		}

		/* 
		 * Property: @post_content_filtered
		 * Type: string
		 */ 
		public function set_post_content_filtered($post_content_filtered = string) {
			$this->post_content_filtered = $post_content_filtered;
			return $this;
		}

		public function remove_post_content_filtered() {
			$this->post_content_filtered = null;
			return $this;
		}

		public function update_post_content_filtered($post_content_filtered = string) {
			return $this->set_post_content_filtered($post_content_filtered);
		}

		/* 
		 * Property: @post_parent
		 * Type: int
		 */ 
		public function set_post_parent($post_parent = int) {
			$this->post_parent = $post_parent;
			return $this;
		}

		public function remove_post_parent() {
			$this->post_parent = null;
			return $this;
		}

		public function update_post_parent($post_parent = int) {
			return $this->set_post_parent($post_parent);
		}

		/* 
		 * Property: @guid
		 * Type: string
		 */ 
		public function set_guid($guid = string) {
			$this->guid = $guid;
			return $this;
		}

		public function remove_guid() {
			$this->guid = null;
			return $this;
		}

		public function update_guid($guid = string) {
			return $this->set_guid = $guid;
		}

		/* 
		 * Property: @menu_order
		 * Type: int
		 */ 
		public function set_menu_order($menu_order = int) {
			$this->menu_order = $menu_order;
			return $this;
		}

		public function remove_menu_order() {
			$this->menu_order = null;
			return $this;
		}

		public function update_menu_order($menu_order = int) {
			return $this->set_menu_order($menu_order);
		}

		/* 
		 * Property: @post_type
		 * Type: string
		 */ 
		public function set_post_type($post_type = string) {
			$this->post_type = $post_type;
			return $this;
		}

		public function remove_post_type() {
			$this->post_type = null;
			return $this;
		}

		public function update_post_type($post_type = string) {
			return $this->set_post_type($post_type);
		}

		/* 
		 * Property: @post_mime_type
		 * Type: string
		 */ 
		public function set_post_mime_type($post_mime_type = string) {
			$this->post_mime_type = $post_mime_type;
			return $this;
		}

		public function remove_post_mime_type() {
			$this->post_mime_type = null;
			return $this;
		}

		public function update_post_mime_type($post_mime_type = string) {
			return $this->set_post_mime_type($post_mime_type);
		}

		/* 
		 * Property: @comment_count
		 * Type: int
		 */ 
		public function set_comment_count($comment_count = int) {
			$this->comment_count = $comment_count;
			return $this;
		}

		public function remove_comment_count() {
			$this->comment_count = null;
			return $this;
		}

		public function update_comment_count($comment_count = int) {
			return $this->set_comment_count($comment_count);
		}

		/* 
		 * Property: @filter
		 * Type: string
		 */ 
		public function set_filter($filter = string) {
			$this->filter = $filter;
			return $this;
		}

		public function remove_filter() {
			$this->filter = null;
			return $this;
		}

		public function update_filter($filter = string) {
			return $this->set_filter($filter);
		}

		/* 
		 * Property: @image_encode
		 * Type: string
		 */ 
		public function set_image_encode($image_encode = string) {
			$this->image_encode = $image_encode;
			return $this;
		}

		public function remove_image_encode() {
			$this->image_encode = null;
			return $this;
		}

		public function update_image_encode($image_encode = string) {
			$this->set_image_encode($image_encode);
			return $this;
		}

		/* 
		 * Property: @categories
		 */ 
		public function set_category($category) {
			if(!is_array($this->categories)) {
				$this->categories = array();
			}

			if(is_array($category)) {
				$this->categories = $category;
				return $this;
			}

			if(!in_array($category, $this->categories)) {
				$this->categories[] = $category;
			}
			
			return $this;
		}

		public function remove_category($category) {
			if(is_array($this->categories) && ($index = array_search($category, $this->categories)) !== false) {
			    unset($this->categories[$index]);
			}

			return $this;
		}

		public function update_category($category) {
			$this->set_category($category);
			return $this;
		}


		/* 
		 * Property: @meta_data
		 * Type: array
		 */ 
		public function set_meta_data($meta_key = string, $meta_value = false) {
			if(!is_array($this->meta_data)) {
				$this->meta_data = array();
			}

			if(is_array($meta_key)) {
				$this->meta_data = $meta_key;
				return $this;
			}

			$this->meta_data[$meta_key] = $meta_value;
			return $this;
		}

		public function remove_meta_data($meta_key = string) {
			if(is_array($this->meta_data) && isset($this->meta_data[$meta_key])) {
				unset($this->meta_data[$meta_key]);
			}

			return $this;
		}

		public function update_meta_data($meta_key = string, $meta_value = false) {
			return $this->set_meta_data($meta_key, $meta_value);
		}

		/* 
		 * Property: @settings
		 * Type: array
		 */ 
		public function set_settings($setting_key = string, $setting_value = false) {
			if(!is_array($this->settings)) {
				$this->settings = array();
			}

			if(is_array($setting_key) || is_object($setting_key)) {
				$this->settings = (array) $setting_key;
				return $this;
			}

			$this->settings[$setting_key] = $setting_value;
			return $this;
		}

		public function remove_settings($setting_key = string) {
			if(is_array($this->settings) && isset($this->settings[$setting_key])) {
				unset($this->settings[$setting_key]);
			}

			return $this;
		}

		public function update_settings($setting_key = string, $setting_value = false) {
			return $this->set_settings($settings_key, $setting_value);
		}

		/* 
		 * Property: @uri
		 * Type: string
		 */ 
		public function set_uri($uri = string) {
			$this->uri = $uri;
			return $this;
		}

		public function remove_uri() {
			$this->uri = null;
			return $this;
		}

		public function update_uri($uri = string) {
			return $this->set_uri($uri);
		}

		/* 
		 * Property: @homepage
		 * Type: boolean
		 */ 
		public function set_homepage($homepage = boolean) {
			$this->homepage = $homepage;
			return $this;
		}

		public function remove_homepage() {
			$this->homepage = false;
			return $this;
		}

		public function update_homepage($homepage = boolean) {
			return $this->set_homepage($homepage);
		}

		/* 
		 * Property: @uri
		 * Type: string
		 */ 
		public function set_template($template = string) {

			if(!defined('APPUCCINO_WRAPPER_TEMPLATE_URI')) {
				throw new \Exception("Appuccino wrapper template URI not set in config!");
			}

			if(!function_exists('appuccino_does_file_exist')) {
				throw new \Exception("Cannot access functions file, please include it.");
			}

			if(!appuccino_does_file_exist(ltrim(appuccino_unflatten_file_name($template), DIRECTORY_SEPARATOR))) {
				throw new \Exception("Post template file does not exist!");
			}

			$this->template = $template;
			return $this;
		}

		public function remove_template() {
			$this->uri = null;
			return $this;
		}

		public function update_template($template = string) {
			return $this->set_template($template);
		}
	}


?>