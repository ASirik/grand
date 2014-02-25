<?php
	
	/*--------------------------------------------------------------
	# Coolfoto - June 2009 (for Joomla 1.5)
	# Copyright (C) 2007-2009 Gavick.com. All Rights Reserved.
	# License: Copyrighted Commercial Software
	# Website: http://www.gavick.com
	# Support: support@gavick.com  
	---------------------------------------------------------------*/
	
	// no direct access
	defined('_JEXEC') or die('Restricted access');
	
?>

	<div id="footer_menu">
		<jdoc:include type="modules" name="footer_menu" style="raw" />
	</div>
	
    <?php if($stylearea) : ?>
	<!-- Style Switcher -->
    <div id="stylearea"> 
    	<a href="#" id="style_icon-1" class="style_switcher">Flowers</a> | 
    	<a href="#" id="style_icon-2" class="style_switcher">Heaven</a>
    </div>
	<?php endif; ?>
	<!-- Copyright Information -->	
	<div id="informations"><?php echo $footer_content; ?></div>