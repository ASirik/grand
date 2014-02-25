<?php

/**
* Gavick News Pro GK1 - script template
* @package Joomla!
* @Copyright (C) 2009 Gavick.com
* @ All rights reserved
* @ Joomla! is Free Software
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
* @version $Revision: 1.0.0 $
**/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<?php if($this->config['useMoo'] == 1) : ?><script type="text/javascript" src="<?php echo $uri->root(); ?>modules/mod_news_pro_gk1/scripts/mootools.js"></script><?php endif; ?>
<?php if($this->config['useScript'] == 1) : ?><script type="text/javascript" src="<?php echo $uri->root(); ?>modules/mod_news_pro_gk1/scripts/engine<?php echo ($config['compress_js'] == 1) ? '_compressed' : '' ?>.js"></script><?php endif; ?>
<script type="text/javascript">
try {$Gavick;}catch(e){$Gavick = {};};
$Gavick["gk_npro-<?php echo $this->config['module_unique_id'];?>"] = {
	"animation_speed": <?php echo $this->config['animation_speed']; ?>,
	"animation_interval": <?php echo $this->config['animation_interval']; ?>
};
</script>	