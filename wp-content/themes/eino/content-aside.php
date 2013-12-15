<article <?php hybrid_post_attributes(); ?>>

	<?php if ( is_singular( get_post_type() ) ) { ?>

		<header class="entry-header">
			<h1 class="entry-title"><?php single_post_title(); ?></h1>
			<?php echo apply_atomic_shortcode( 'entry_byline', '<div class="entry-byline">' . __( '[post-format-link] опубликовано: [entry-published] [entry-comments-link before=" | "] [entry-edit-link before=" | "]', 'eino' ) . '</div>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Страницы:', 'eino' ) . '</span>', 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms before="Опубликовано: " taxonomy="category"] [entry-terms before="| Метки: "]', 'eino' ) . '</div>' ); ?>
		</footer><!-- .entry-footer -->

	<?php } else { ?>

		<div class="entry-content">
			<?php the_content( __( 'Читать далее &rarr;', 'eino' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Страницы:', 'eino' ) . '</span>', 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

	<?php } ?>

</article><!-- .hentry -->