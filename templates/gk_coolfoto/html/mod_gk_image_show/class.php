<?php

/*

show_text_block=true;
text_block_height=109;
text_block_bgimage=false;
text_block_bgcolor=#000;
text_block_opacity=0.5;
text_block_position=bottom;
clean_xhtml=true;
readmore_button=true;
title=true;
interface=true;
wordcount=30;
title_link=true;
readmore_text=See details;
preloading=true;
animation_speed=500;
animation_interval=5000;
autoanimation=true;
animation_type=opacity;
text1=preview;
text2=details;
bar1_enabled=true;
bar2_enabled=true;
bar1_width=100;
bar1_left=400;
bar1_top=100;
bar2_width=100;
bar2_left=380;
bar2_top=200;
image_pos_x=20;
image_pos_y=20;
interface_left=20;
interface_bottom=0;

*/

if(!class_exists('GKImageShowTemplate')){
	class GKImageShowTemplate{
		// 
		var $ID;
		// 
		var $config;
		// 
		var $path;
	 	// 
		var $settings;
		// 
		var $slides;
		// 
		function GKImageShowTemplate( $module_id, $settings, $base_path, $group_settings, $slide_data ){
			$this->ID = $module_id;
			$this->path = $base_path;
			$this->settings = $group_settings;
			$this->slides = $slide_data;
			//
			$this->parse($settings);
			$this->generate();
		}
		// 
		function returnJSData(){
			return array(
				"img_w" => $this->settings['image_x'],
				"img_h" => $this->settings['image_y'],
				"animation_speed" => $this->config['animation_speed'],
				"animation_interval" => $this->config['animation_interval'],
				"autoanimation" => $this->config['autoanimation'],
				"animation_type" => $this->config['animation_type'],
				"preloading" => $this->config['preloading'],
				"text_block_opacity" => $this->config['text_block_opacity'],
				"text_block_bgimage" => $this->config['text_block_bgimage']
			);
		}
		// 
		function parse($settings){
			// creating configuration array (hash)
			$this->config = array(
										"image_bg_width" => 582,
										"image_bg_height" => 436,
										"show_text_block" => true, // true|false
										"text_block_height" => 100,
										"text_block_bgimage" => false,
										"text_block_bgcolor" => "#000",
										"text_block_opacity" => 0.5,
										"text_block_position" => 'bottom', // top|bottom
										"clean_xhtml" => true, // true |false
										"readmore_button" => true, // true |false
										"title" => true, // true |false
										"interface" => true, // true |false
										"wordcount" => 30,
										"title_link" => true, // true |false
										"readmore_text" => 'See details',
										"preloading" => true, // true |false
										"animation_speed" => 500,
										"animation_interval" => 5000,
										"autoanimation" => true, // true |false
										"animation_type" => 'opacity', // top|bottom|right|left|opacity
										//------------------
										"text1" => 'preview',
										"text2" => 'details',
										"bar1_enabled" => true,
										"bar2_enabled" => true,
										"bar1_width" => 100,
										"bar1_left" => 400,
										"bar1_top" => 100,
										"bar2_width" => 100,
										"bar2_left" => 380,
										"bar2_top" => 200,
										"image_pos_x" => 20,
										"image_pos_y" => 20,
										"interface_left" => 20,
										"interface_bottom" => 0,
										
								);
			// exploding settings
			$settings = preg_replace("/\n$/", '', $settings);
			$exploded_settings = explode(';', $settings);
			// parsing
			for( $i = 0; $i < count($exploded_settings) - 1; $i++ )
			{
				// preparing pair key-value
				$pair = explode('=', trim($exploded_settings[$i]));
				// extracting key and value from pair	
				$key = $pair[0];
				$value = $pair[1];	
				// checking existing of key in config array
				if(isset($this->config[$key]))
				{
					// setting value for key
					$this->config[$key] = $value;
				}
			}	
		}
		// 
		function generate(){
			require(JModuleHelper::getLayoutPath('mod_gk_image_show', 'content'));
		}
	}
}

?>