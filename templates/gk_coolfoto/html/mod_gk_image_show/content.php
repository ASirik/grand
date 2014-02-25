<?php

/**
* Gavick Image Slide - Template style
* @package Joomla!
* @Copyright (C) 2009 Gavick.com
* @ All rights reserved
* @ Joomla! is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: 1.0.0 $
**/

// access restriction
defined('_JEXEC') or die('Restricted access');
// vars
$highest_layer = 0;
// initializing variables
$URI = JURI::getInstance();
// calculating sizes
$total_block_width = 0;
//$total_block_width += $this->settings["image_x"];
$total_block_width = $this->config['image_bg_width'];
if(
	(($this->config['bar1_left'] + $this->config['bar1_width']) > $this->config['image_bg_width'])
	&& 
	(($this->config['bar1_left'] + $this->config['bar1_width']) >= ($this->config['bar2_left'] + $this->config['bar2_width']))
){
	$total_block_width = ($this->config['bar1_left'] + $this->config['bar1_width']);	
}
elseif(
	(($this->config['bar2_left'] + $this->config['bar2_width']) > $this->config['image_bg_width'])
	&& 
	(($this->config['bar1_left'] + $this->config['bar1_width']) <= ($this->config['bar2_left'] + $this->config['bar2_width']))
){
	$total_block_width = ($this->config['bar2_left'] + $this->config['bar2_width']);	
}
//
$total_block_height = $this->config['image_bg_height'];
//

?>

<div id="gk_is-<?php echo $this->ID;?>" class="gk_is_wrapper gk_is_wrapper-style1" style="width: <?php echo $total_block_width; ?>px;height: <?php echo $total_block_height; ?>px;">
	<!-- wrapper with interface bg -->
	<?php if($this->config['interface'] == "true") : ?>
		<div class="interface_bg" style="left:<?php echo $this->config['interface_left'];?>px;bottom:<?php echo $this->config['interface_bottom'];?>px;"></div>
	<?php endif; ?>
	<!-- wrappers with bars bgs -->
	<?php if($this->config['bar1_enabled'] == "true") : ?>
		<div class="bar1_bg" style="left:<?php echo $this->config['bar1_left']-20;?>px;top:<?php echo $this->config['bar1_top'];?>px;width:<?php echo $this->config['bar1_width']+20;?>px;"></div>
	<?php endif; ?>
	
	<?php if($this->config['bar2_enabled'] == "true") : ?>
		<div class="bar2_bg" style="left:<?php echo $this->config['bar2_left']-20;?>px;top:<?php echo $this->config['bar2_top'];?>px;width:<?php echo $this->config['bar2_width']+20;?>px;"></div>
	<?php endif; ?>
	<!-- wrapper with overlay bg -->
	<div class="overlay_bg" style="width:<?php echo $this->config['image_bg_width'];?>px;height:<?php echo $this->config['image_bg_height'];?>px;"></div>
	<!-- wrapper with slides -->
		<div class="gk_is_image" style="width:<?php echo $this->settings["thumb_x"];?>px;height:<?php echo $this->settings["thumb_y"];?>px;left:<?php echo $this->config['image_pos_x'];?>px;top:<?php echo $this->config['image_pos_y'];?>px;">		
		
			<?php if($this->config["preloading"] == 'true') : ?>
			<div class="gk_is_preloader"></div>
			<?php endif; ?>
		
		<?php for($i = 0; $i < count($this->slides); $i++) : ?>
			<?php 
				// cleaning variables
				unset($path, $title, $link);
				// creating slide path
				$path = $URI->root().'components/com_gk3_photoslide/thumbs_small/'.$this->slides[$i]["filename"];
				// creating slide title
				$title = htmlspecialchars(($this->slides[$i]["ctitle"] == "") ? $this->slides[$i]["title"] : $this->slides[$i]["ctitle"]);
				// creating slide link
				$link = ($this->slides[$i]["link_type"] != 0) ? JRoute::_(ContentHelperRoute::getArticleRoute($this->slides[$i]["article"], $this->slides[$i]["cid"], $this->slides[$i]["sid"])) : $this->slides[$i]["link"];			
			?>
			
			<?php if($this->config["preloading"] == 'false') : ?>
				<img src="<?php echo $path; ?>" class="gk_is_slide" style="z-index: <?php echo $i+20; ?>;width:<?php echo $this->settings['thumb_x'];?>px;height:<?php echo $this->settings['thumb_y'];?>px;" alt="<?php echo $link; ?>" title="<?php echo $title; ?>" />
			<?php else: ?>
				<div class="gk_is_slide" style="z-index: <?php echo $i+20; ?>;width:<?php echo $this->settings['thumb_x'];?>px;height:<?php echo $this->settings['thumb_y'];?>px;" title="<?php echo $title; ?>"><a href="<?php echo $path; ?>">src</a><a href="<?php echo $link; ?>">link</a></div>
			<?php endif; ?>
		<?php endfor; ?>
	
		<?php if($this->config['show_text_block'] == "true") : ?>
		<?php if($this->config['text_block_bgimage'] == "true"): ?>
		<div class="gk_is_text_bg" style="height:<?php echo $this->config['text_block_height']; ?>px;<?php echo ($this->config['text_block_position'] == 'bottom') ? 'bottom:0;': 'top:0;'; ?>"></div>
		<?php else : ?>
		<div class="gk_is_text_bg" style="height:<?php echo $this->config['text_block_height']; ?>px;opacity:<?php echo $this->config['text_block_opacity']; ?>;background-color:<?php echo $this->config['text_block_bgcolor']; ?>;<?php echo ($this->config['text_block_position'] == 'bottom') ? 'bottom:0;': 'top:0;'; ?>"></div>
		<?php endif; ?>
		<div class="gk_is_text" style="height:<?php echo $this->config['text_block_height']; ?>px;<?php echo ($this->config['text_block_position'] == 'bottom') ? 'bottom:0;': 'top:0;'; ?>"></div>
		
		<div class="gk_is_text_data">
			<?php for($i = 0; $i < count($this->slides); $i++) : ?>
			
			<?php 
				// cleaning variables
				unset($text, $title, $link, $exploded_text);
				// creating slide text
				$text = ($this->slides[$i]["content"] == "") ? $this->slides[$i]["introtext"] : $this->slides[$i]["content"];
				if($this->config["clean_xhtml"] == "true") $text = strip_tags($text);
				$exploded_text = explode(" ", $text);
				$text = '';
				for($j = 0; $j < $this->config["wordcount"]; $j++)
				{
					if(isset($exploded_text[$j]))
					{
						$text .= $exploded_text[$j]." ";
					}
				}
				// creating slide title
				$title = ($this->slides[$i]["ctitle"] == "") ? $this->slides[$i]["title"] : $this->slides[$i]["ctitle"];
				// creating slide link
				$link = ($this->slides[$i]["link_type"] != 0) ? JRoute::_(ContentHelperRoute::getArticleRoute($this->slides[$i]["article"], $this->slides[$i]["cid"], $this->slides[$i]["sid"])) : $this->slides[$i]["link"];	
			?>
			
			<div class="gk_is_text_item">
				<?php if($this->config["title"] == "true"): ?>
					<?php if($this->config["title_link"] == "true"): ?>
						<h4><span><a href="<?php echo $link; ?>"><?php echo $title; ?></a></span></h4>
					<?php else: ?>
						<h4><span><?php echo $title; ?></span></h4>
					<?php endif; ?>
				<?php endif; ?>
				<p>
					<?php echo $text; ?>
					<?php if($this->config["readmore_button"] == "true") : ?>
					<a href="<?php echo $link; ?>" class="readon"><?php echo $this->config["readmore_text"]; ?></a>
					<?php endif; ?>
				</p>
			</div>
		<?php endfor; ?>
		</div>
		<?php endif; ?>
	</div>	
	<!-- wrapper with interface buttons -->
	<?php if($this->config['interface'] == "true") : ?>
		<div class="interface_buttons" style="left:<?php echo $this->config['interface_left'];?>px;bottom:<?php echo $this->config['interface_bottom'];?>px;">
			<div class="prev"></div><div class="play player"></div><div class="next"></div>
		</div>
	<?php endif; ?>
	<!-- wrappers with event readers -->
	<?php if($this->config['bar1_enabled'] == "true") : ?>
		<div class="bar1_evt_reader" style="left:<?php echo $this->config['bar1_left']-20;?>px;top:<?php echo $this->config['bar1_top'];?>px;width:<?php echo $this->config['bar1_width']+20;?>px;"><span><?php echo $this->config['text1']; ?></span></div>
	<?php endif; ?>
	
	<?php if($this->config['bar2_enabled'] == "true") : ?>
		<div class="bar2_evt_reader" style="left:<?php echo $this->config['bar2_left']-20;?>px;top:<?php echo $this->config['bar2_top'];?>px;width:<?php echo $this->config['bar2_width']+20;?>px;"><span><?php echo $this->config['text2']; ?></span></div>
	<?php endif; ?>
</div>
<div id="gk_is_overlay-<?php echo $this->ID;?>" class="gk_is_t_overlay"></div>