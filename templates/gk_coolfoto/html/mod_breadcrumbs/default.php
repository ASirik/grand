<?php 

	// no direct access
	defined('_JEXEC') or die('Restricted access'); 

?>

<span class="breadcrumbs pathway">
<?php for ($i = 0; $i < $count; $i ++) : ?>
	<?php
		// If not the last item in the breadcrumbs add the separator
		if ($i < $count -1) : 
	?>
		<?php if(!empty($list[$i]->link)) : ?>
			<a href="<?php echo $list[$i]->link; ?>" class="pathway"><span><?php echo $list[$i]->name; ?></span></a>
		<?php else : ?>
			<span class="pathway_separator"><span><?php echo $list[$i]->name; ?></span></span>
		<?php endif; ?>
		<span class="breadcrumbs_separator"></span>
	<?php 
        // when $i == $count -1 and 'showLast' is true
		elseif ($params->get('showLast', 1)) : 
	?>
	    <span class="pathway_end"><span><?php echo $list[$i]->name; ?></span></span>
	<?php endif; ?>
<?php endfor; ?>
</span>