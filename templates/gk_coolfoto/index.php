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
	// including base setup file
	include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/gk_setup.php');
	// including menu generator file
	include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/menu.php');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >

<head>
	<jdoc:include type="head" />

	<?php
		// including template header files
		include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/gk_head.php');	
	?>
</head>

<body>	
	<?php if(($login_button && $this->countModules('login'))) : ?>
	<div id="popup_login">
		<div id="close_button_login"></div>
		<div class="top">
			<jdoc:include type="modules" name="login" style="raw" />
		</div>
		<div class="bottom"></div>
	</div>
	<?php endif; ?>	

	<?php if($register_button && ((!isset($_GET['task']) || !isset($_GET['option'])) || ((isset($_GET['task']) && $_GET['task'] != 'register') || (isset($_GET['option']) && $_GET['option'] != 'com_user'))) && $userID == 0) : ?>	
	<div id="popup_register">
		<div id="close_button_register"></div>
		<div class="top">
			<script type="text/javascript" src="<?php echo $url->root(); ?>media/system/js/validate.js"></script>
			<script type="text/javascript">Window.onDomReady(function(){document.formvalidator.setHandler('passverify', function (value) { return ($('password').value == value); }	);});</script>
			<form action="<?php echo JRoute::_( 'index.php?option=com_user' ); ?>" method="post" id="josForm" name="josForm" class="form-validate">
			
			<table cellpadding="0" cellspacing="0" border="0" width="100%" class="contentpane">
			<tr>
				<td width="30%" height="40">
					<label id="namemsg" for="name">
						<?php echo JText::_( 'NAME' ); ?>:
					</label>
				</td>
			  	<td>
			  		<input type="text" name="name" id="name" size="40" value="" class="inputbox required" maxlength="50" /> *
			  	</td>
			</tr>
			<tr>
				<td height="40">
					<label id="usernamemsg" for="username">
						<?php echo JText::_( 'USERNAME' ); ?>:
					</label>
				</td>
				<td>
					<input type="text" id="username" name="username" size="40" value="" class="inputbox required validate-username" maxlength="25" /> *
				</td>
			</tr>
			<tr>
				<td height="40">
					<label id="emailmsg" for="email">
						<?php echo JText::_( 'EMAIL' ); ?>:
					</label>
				</td>
				<td>
					<input type="text" id="email" name="email" size="40" value="" class="inputbox required validate-email" maxlength="100" /> *
				</td>
			</tr>
			<tr>
				<td height="40">
					<label id="pwmsg" for="password">
						<?php echo JText::_( 'PASSWORD' ); ?>:
					</label>
				</td>
			  	<td>
			  		<input class="inputbox required validate-password" type="password" id="password" name="password" size="40" value="" /> *
			  	</td>
			</tr>
			<tr>
				<td height="40">
					<label id="pw2msg" for="password2">
						<?php echo JText::_( 'VERIFY_PASSWORD' ); ?>:
					</label>
				</td>
				<td>
					<input class="inputbox required validate-passverify" type="password" id="password2" name="password2" size="40" value="" /> *
				</td>
			</tr>
			<tr>
				<td colspan="2" height="40">
					<p class="information_td"><?php echo JText::_( 'REGISTER_REQUIRED' ); ?></p>
				</td>
			</tr>
			</table>
				<button class="button validate" type="submit"><?php echo JText::_('REGISTER'); ?></button>
				<input type="hidden" name="task" value="register_save" />
				<input type="hidden" name="id" value="0" />
				<input type="hidden" name="gid" value="0" />
				<?php echo JHTML::_( 'form.token' ); ?>
			</form>
		</div>
		<div class="bottom"></div>
	</div>
	<?php endif; ?>	

	<div id="wrapper_header1" class="clearfix">
		<div id="wrapper_header2">	
			<div id="wrapper_header3" class="clearfix">
				<div id="wrapper_menu" class="clearfix">
					<div id="menu_center">
						<a id="logo<?php echo ($logo_as_image) ? '' : '_styled'; ?>" href="./">
						<?php if($logo_as_image) : ?>
						<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/images/style1/logo.png" alt="Logo" />
						<?php endif; ?>
						</a>
						<?php if(($login_button && $this->countModules('login')) || ($register_button && ((!isset($_GET['task']) || !isset($_GET['option'])) || ((isset($_GET['task']) && $_GET['task'] != 'register') || (isset($_GET['option']) && $_GET['option'] != 'com_user'))) && $userID == 0)) : ?>
						<div id="buttons">
							<div>
								<?php if($login_button && $this->countModules('login')) : ?>
								<span id="login_btn"><a href="#"><?php echo ($userID == 0) ? JText::_('LOGIN') : JText::_('USER_PANEL'); ?></a></span>
								<?php endif; ?>
							
								<?php if($register_button && ((!isset($_GET['task']) || !isset($_GET['option'])) || ((isset($_GET['task']) && $_GET['task'] != 'register') || (isset($_GET['option']) && $_GET['option'] != 'com_user'))) && $userID == 0) : ?>
								<span id="register_btn"><a href="<?php echo $this->baseurl; ?>/index.php?option=com_user&amp;task=register"><?php echo JText::_('REGISTER'); ?></a></span>
								<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						<div id="horiz-menu">
							<?php echo $main_navigation;?>
						</div>
					</div>
				</div>
			
						
				<div id="wrapper_header" class="clearfix">				
					<?php if($this->countModules('header1 or header2')) : ?>
					<div id="header_modules1" class="clearfix">
						<?php if($this->countModules('header1')) : ?>
						<div id="header1" <?php if($this->countModules('header1 and header2')) : ?>style="width: <?php echo $header1_width; ?>px;"<?php endif;?>>
							<jdoc:include type="modules" name="header1" style="gavickpro" />
						</div>
						<?php endif; ?>	
						
						<?php if($this->countModules('header2')) : ?>
						<div id="header2" <?php if($this->countModules('header1 and header2')) : ?>style="width: <?php echo $header2_width; ?>px;margin-left:<?php echo $header_margin; ?>px;"<?php endif;?>>
							<jdoc:include type="modules" name="header2" style="gavickpro" />
						</div>
						<?php endif; ?>	
					</div>
					<?php endif; ?>
					
					<?php if($this->countModules('header3 or header2')) : ?>
					<div id="header_modules2" class="clearfix">
						<?php if($this->countModules('header3')) : ?>
						<div id="header3" <?php if($this->countModules('header3 and header4')) : ?>style="width: <?php echo $header3_width; ?>px;"<?php endif;?>>
							<jdoc:include type="modules" name="header3" style="gavickpro" />
						</div>
						<?php endif; ?>	
						
						<?php if($this->countModules('header4')) : ?>
						<div id="header4" <?php if($this->countModules('header3 and header4')) : ?>style="width: <?php echo $header4_width; ?>px;margin-left:<?php echo $header_margin; ?>px;"<?php endif;?>>
							<jdoc:include type="modules" name="header4" style="gavickpro" />
						</div>
						<?php endif; ?>	
					</div>
					<?php endif; ?>		
					<?php if($this->countModules('breadcrumb')) : ?>
						<div id="breadcrumb" class="clearfix">
							<jdoc:include type="modules" name="breadcrumb" style="gavickpro" />
						</div>
					<?php endif; ?>	
				</div>	
			</div>		
		</div>
	</div>	
	
	<?php
		
		// show mainbody on all subpages but not on frontpage
		if (!($this->params->get("frontpage", 1) == 0 && $menu->getActive() == $menu->getDefault() && $this->countModules('mainbody + user1 + user2 + user3 + user4 + user5 + user6 + top + bottom') == 0 && $this->countModules($column_position) == 0)) :
	?>
	
	<div id="wrapper_content" class="clearfix"> 
		<jdoc:include type="message" />
					
		<?php if ($this->countModules('left') && $column_position == "left"): ?>
		<div id="left" style="width: <?php echo $column_width; ?>px;">
			<jdoc:include type="modules" name="left" style="gavickpro" />
		</div>
		<?php endif; ?>	
			
		<div id="component" style="width:<?php echo $mainbody_width - ($this->countModules('inset') ? $inset_width + 10 : 0 ) - ((($this->countModules('right') && $column_position == "right") || ($this->countModules('left') && $column_position == "left")) ? $column_width + 10 : 0); ?>px;">	
			<?php if ($this->countModules('top')) : ?>
				<div class="module_wrap clearfix">
			         <jdoc:include type="modules" name="top" style="gavickpro" />
			    </div>
			<?php endif; ?>
			                
			<?php if($this->countModules('user1 or user2 or user3')) : ?>
				<div class="users_wrap clearfix">
				<?php if ($this->countModules('user1')) : ?>
    				<div class="<?php echo $user_position_1; ?>">
        				<jdoc:include type="modules" name="user1" style="gavickpro" />
        			</div>
        		<?php endif; ?>
			                    
				<?php if ($this->countModules('user2')) : ?>
    				<div class="<?php echo $user_position_1; ?>">
        				<jdoc:include type="modules" name="user2" style="gavickpro" />
                	</div>
                <?php endif; ?>
			                              
				<?php if ($this->countModules('user3')) : ?>
    				<div class="<?php echo $user_position_1; ?>">
        				<jdoc:include type="modules" name="user3" style="gavickpro" />
            		</div>
              	<?php endif; ?>
               	</div>
        	<?php endif; ?>   
			                
			<?php
				// show mainbody on all subpages but not on frontpage
				if (!$frontpage_i || $this->countModules('mainbody')) :
 			?>
 			<div id="wrapper_content_mainbody" class="clearfix">
    			<div id="mainbody">
	    			<div id="mainbody_wrapper">
	      				<?php if($this->countModules('mainbody')) : ?>
 							<jdoc:include type="modules" name="mainbody" style="gavickpro" />
  						<?php else: ?>
 							<jdoc:include type="component" />
	  					<?php endif; ?>
			  		</div>
         		</div>
         	</div>
			<?php endif; ?>
          
			<?php if($this->countModules('user4 or user5 or user6')) : ?>
			<div class="users_wrap clearfix">
				<?php if ($this->countModules('user4')) : ?>
				<div class="<?php echo $user_position_2; ?>">
    				<jdoc:include type="modules" name="user4" style="gavickpro" />
        		</div>
          		<?php endif; ?>
		                              
				<?php if ($this->countModules('user5')) : ?>
				<div class="<?php echo $user_position_2; ?>">
    				<jdoc:include type="modules" name="user5" style="gavickpro" />
        		</div>
          		<?php endif; ?>
		                              
				<?php if ($this->countModules('user6')) : ?>
				<div class="<?php echo $user_position_2; ?>">
    				<jdoc:include type="modules" name="user6" style="gavickpro" />
        		</div>
          		<?php endif; ?>
  			</div>
         	<?php endif; ?>
			                        
			<?php if ($this->countModules('bottom')) : ?>
   				<div class="module_wrap">
       				<jdoc:include type="modules" name="bottom" style="gavickpro" headerLevel="3" />
           		</div>
           	<?php endif; ?> 
   		</div> 
			   
		<?php if ($this->countModules('inset')) : ?>
		<div id="inset" style="width:<?php echo $inset_width; ?>px">
			<jdoc:include type="modules" name="inset" style="gavickpro" />
		</div>
  		<?php endif; ?>  
		  
		<?php if ($this->countModules('right') && $column_position == "right"): ?>
		<div id="right" style="width: <?php echo $column_width; ?>px;">
			<jdoc:include type="modules" name="right" style="gavickpro" />
		</div>
		<?php endif; ?>	    
	</div>
	<?php endif; ?>		
		                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <div class="bodyleft"><a href="http://bank-media.ru/news/" title="http://bank-media.ru/news/" target="_parent">Bank-media.ru/news/</a> | <a href="http://house-mag.ru/news/" title="http://house-mag.ru/news/" target="_parent">House-mag.ru/news/</a> | <a href="http://politic-wars.ru/novosti/" title="http://politic-wars.ru/novosti/" target="_parent">Politic-wars.ru/novosti/</a> | <a href="http://mynewsmaker.ru/" title="http://mynewsmaker.ru/" target="_parent">Mynewsmaker.ru/</a> </div>
	<?php if ($this->countModules('user7 or user8 or user9 or user10 or user11')) : ?>
	<div id="wrapper_bottom" class="clearfix">
		<div id="bottom_center">
			<?php if ($this->countModules('user7')) : ?>
			<div class="<?php echo $user_position_3; ?>">
				<jdoc:include type="modules" name="user7" style="gavickpro" />
			</div>
			<?php endif; ?>
			<?php if ($this->countModules('user8')) : ?>
			<div class="<?php echo $user_position_3; ?>">
				<jdoc:include type="modules" name="user8" style="gavickpro" />
			</div>
			<?php endif; ?>
			<?php if ($this->countModules('user9')) : ?>
			<div class="<?php echo $user_position_3; ?>">
				<jdoc:include type="modules" name="user9" style="gavickpro" />
			</div>
			<?php endif; ?>
			<?php if ($this->countModules('user10')) : ?>
			<div class="<?php echo $user_position_3; ?>">
				<jdoc:include type="modules" name="user10" style="gavickpro" />
			</div>
			<?php endif; ?>
			<?php if ($this->countModules('user11')) : ?>
			<div class="<?php echo $user_position_3; ?>">
				<jdoc:include type="modules" name="user11" style="gavickpro" />
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>

	<?php 
		if($this->countModules('search_bottom') || $icon1 || $icon2 || $icon3 || 
			$icon4 || $icon5 || $icon6 || $icon7 || $icon8 || $icon9 || $icon10) :
	?>
	<div id="bottom_bar">
		<div id="bottom_bar_center" class="clearfix">
			<?php if($this->countModules("search_bottom")) : ?>
			<div id="search_bottom">
				<jdoc:include type="modules" name="search_bottom" style="raw" />
			</div>	
			<?php endif; ?>
			<?php if($icon1 || $icon2 || $icon3 || $icon4 || $icon5 || $icon6 || $icon7 || $icon8 || $icon9 || $icon10) : ?>	
			<div id="social_icons">
				<?php if($icon10) : ?><a href="<?php echo $icon10_link; ?>" id="icon10"></a><?php endif; ?>
				<?php if($icon9) : ?><a href="<?php echo $icon9_link; ?>" id="icon9"></a><?php endif; ?>
				<?php if($icon8) : ?><a href="<?php echo $icon8_link; ?>" id="icon8"></a><?php endif; ?>
				<?php if($icon7) : ?><a href="<?php echo $icon7_link; ?>" id="icon7"></a><?php endif; ?>
				<?php if($icon6) : ?><a href="<?php echo $icon6_link; ?>" id="icon6"></a><?php endif; ?>
				<?php if($icon5) : ?><a href="<?php echo $icon5_link; ?>" id="icon5"></a><?php endif; ?>
				<?php if($icon4) : ?><a href="<?php echo $icon4_link; ?>" id="icon4"></a><?php endif; ?>
				<?php if($icon3) : ?><a href="<?php echo $icon3_link; ?>" id="icon3"></a><?php endif; ?>
				<?php if($icon2) : ?><a href="<?php echo $icon2_link; ?>" id="icon2"></a><?php endif; ?>
				<?php if($icon1) : ?><a href="<?php echo $icon1_link; ?>" id="icon1"></a><?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<div id="wrapper_footer" class="clearfix">
		<div id="footer_center">
		<?php 
			// including footer file
			include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/gk_footer.php'); 
		?>
		</div>
	</div>	
	
	<?php 
		// including information alert for IE6
		if($this->params->get("ie6info", 1) == 1): 
	?>
	<!-- IE6 alert -->
	<!--[if IE 6]>
	<div id="ie6">
		<?php include_once(JPATH_ROOT."/templates/".$this->template.'/lib/php/gk_ie6.php'); ?>
	</div>
	<![endif]-->
	<?php endif; ?>
	<jdoc:include type="modules" name="debug" />
</body>
</html>