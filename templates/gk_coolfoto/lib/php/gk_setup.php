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
	
	// Adding MooTools 1.11 to template
	JHTML::_('behavior.mootools');
	
	/*--------------------------------------------------------------
	#
	# Generating basic template variables
	#
	--------------------------------------------------------------*/	
	
	// setting variable for template base url
	$template_baseurl = $this->baseurl . '/templates/' . $this->template;	
	// getting information about basic template color
	$template_color = $this->params->get("template_color", 1);
	// getting information about login button
	$login_button = ($this->params->get("login_button", 1)  == 1) ? true : false;
	// getting information about register button
	$register_button = ($this->params->get("register_button", 1)  == 1) ? true : false;
	// getting information about logo
	$logo_as_image = ($this->params->get("logo_as_image", 1) == 1) ? true : false;
	// getting menu
	$menu = & JSite::getMenu();
	// getting information about menu type
	$menu_type = $this->params->get("menutype", "standard");
	// getting information about frontpage
	$frontpage_i = ($this->params->get("frontpage", 1) == 1) ? false : ($menu->getActive() == $menu->getDefault());		
	// getting information about bg switcher
	$stylearea = ($this->params->get("stylearea", 1) == 0) ? false : true;
	// getting social icons settings
	$icon1 = $this->params->get("icon1", 1);
	$icon1_link = $this->params->get("icon1_link", "");
	$icon2 = $this->params->get("icon2", 1);
	$icon2_link = $this->params->get("icon2_link", "");
	$icon3 = $this->params->get("icon3", 1);
	$icon3_link = $this->params->get("icon3_link", "");
	$icon4 = $this->params->get("icon4", 1);
	$icon4_link = $this->params->get("icon4_link", "");
	$icon5 = $this->params->get("icon5", 1);
	$icon5_link = $this->params->get("icon5_link", "");
	$icon6 = $this->params->get("icon6", 1);
	$icon6_link = $this->params->get("icon6_link", "");
	$icon7 = $this->params->get("icon7", 1);
	$icon7_link = $this->params->get("icon7_link", "");
	$icon8 = $this->params->get("icon8", 1);
	$icon8_link = $this->params->get("icon8_link", "");
	$icon9 = $this->params->get("icon9", 1);
	$icon9_link = $this->params->get("icon9_link", "");
	$icon10 = $this->params->get("icon10", 1);
	$icon10_link = $this->params->get("icon10_link", "");
	// getting footer content
	$footer_content = $this->params->get("footer_content", 'Template Design &copy; <a href=\'http://www.gavick.com\' target=\'_blank\'>Joomla Templates</a> | GavickPro.  All rights reserved.');
	// creating JURI instance	
	$url = clone(JURI::getInstance());		
	// getting User object and user ID 
	$user =& JFactory::getUser();
	// getting User ID
	$userID = $user->get('id');

	/*--------------------------------------------------------------
	#
	# Calculating dimensions
	#
	--------------------------------------------------------------*/

	$column_position = $this->params->get("column_position", "left");
	$column_width = $this->params->get("column_width", 300);
	$header1_width = $this->params->get("header1_width", 620);
	$header2_width = 0;
	$header3_width = $this->params->get("header3_width", 728);
	$header4_width = 0;
	$mainbody_width = 980;
	$header_margin = 10;
	$inset_width = $this->params->get("inset_width", 200);
	$right_class = '';
	//
	if($this->countModules('header1 and header2'))
	{
		$header2_width = 980 - ($header1_width + $header_margin);
	}
	else
	{
		$header1_width = 980;
		$header2_width = 980;
	}
	//
	if($this->countModules('header3 and header4'))
	{
		$header4_width = 980 - $header3_width;
	}
	else
	{
		$header3_width = 980;
		$header4_width = 980;
	}
	
	/*--------------------------------------------------------------
	#
	# Generating user positions classes
	#
	--------------------------------------------------------------*/

	// empty variables for classes
	$user_position_1 = 'null';
	$user_position_2 = 'null';
	$user_position_3 = 'null';	

	/**
	    $user_position_1
	**/

	// 33%
	if($this->countModules('user1 and user2 and user3'))
	{
		$user_position_1 = 'us_width-33';		
	}
	else if($this->countModules('user1 and user2') || $this->countModules('user1 and user3') || $this->countModules('user2 and user3'))
	{
		$user_position_1 = 'us_width-50';
	}	
	else
	{
		$user_position_1 = 'us_width-100';	
	}

	/**
	    $user_position_2
	**/	
	
	// 33%
	if($this->countModules('user4 and user5 and user6'))
	{
		$user_position_2 = 'us_width-33';		
	}
	else if($this->countModules('user4 and user5') || $this->countModules('user4 and user6') || $this->countModules('user5 and user6'))
	{
		$user_position_2 = 'us_width-50';
	}	
	else
	{
		$user_position_2 = 'us_width-100';	
	}
	
	/**
	    $user_position_3
	**/
	
	$sum_modules = 0;
	if($this->countModules('user7') > 0) $sum_modules += 1;
	if($this->countModules('user8') > 0) $sum_modules += 1;
	if($this->countModules('user9') > 0) $sum_modules += 1;
	if($this->countModules('user10') > 0) $sum_modules += 1;
	if($this->countModules('user11') > 0) $sum_modules += 1;
	
	if($sum_modules == 5) // 20%
	{
		$user_position_3 = 'us_width-20';
	}
	else if($sum_modules == 4) // 25%
	{
		$user_position_3 = 'us_width-25';
	}
	else if($sum_modules == 3) // 33%
	{
		$user_position_3 = 'us_width-33';	
	}
	else if($sum_modules == 2) // 50%
	{
		$user_position_3 = 'us_width-50';
	}
	else // 100%
	{
		$user_position_3 = 'us_width-100';	
	}
	

?>