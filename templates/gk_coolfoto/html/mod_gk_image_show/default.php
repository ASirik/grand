<?php

/**
* Gavick Image Show - Template style
* @package Joomla!
* @Copyright (C) 2009 Gavick.com
* @ All rights reserved
* @ Joomla! is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: 1.0.0 $
**/

// access restriction
defined('_JEXEC') or die('Restricted access');

?>

<script type="text/javascript">
	try {$Gavick;}catch(e){$Gavick = {};};
	$Gavick["gk_is-<?php echo $this->module_id;?>"] = {
		"img_w": <?php echo $dataForJSEngine["img_w"];?>,
		"img_h": <?php echo $dataForJSEngine["img_h"];?>,
		"anim_speed": <?php echo $dataForJSEngine["animation_speed"];?>,
		"anim_interval": <?php echo $dataForJSEngine["animation_interval"];?>,
		"autoanim": <?php echo $dataForJSEngine["autoanimation"];?>,
		"anim_type": "<?php echo $dataForJSEngine["animation_type"];?>",
		"preloading": <?php echo $dataForJSEngine["preloading"]; ?>,
		"opacity": <?php echo $dataForJSEngine['text_block_opacity']; ?>,
		"text_block_bgimage": <?php echo ($dataForJSEngine['text_block_bgimage']) ? "true" : "false"; ?>,
		"actual_animation": false,
		"actual_slide": 0
	};
</script>

<?php if($this->useMoo == 1) : ?><script type="text/javascript" src="<?php echo $uri->root(); ?>templates/gk_coolfoto/lib/scripts/mootools.js"></script><?php endif; ?>
<?php if($this->useScript == 1) : ?><script type="text/javascript" src="<?php echo $uri->root(); ?>templates/gk_coolfoto/lib/scripts/gk_image_show.js"></script><?php endif; ?>