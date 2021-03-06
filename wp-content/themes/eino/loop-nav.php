	<?php if ( is_attachment() ) : ?>

		<div class="loop-nav">
			<?php previous_post_link( '%link', '<span class="previous">' . __( '<span class="meta-nav">&larr;</span> Назад к записи', 'eino' ) . '</span>' ); ?>
		</div><!-- .loop-nav -->

	<?php elseif ( is_singular( apply_filters( 'eino_singular_loop_nav', array( 'post', 'portfolio_item', 'download' ) ) ) ) : ?>

		<div class="loop-nav">
			<?php previous_post_link( '%link', '<span class="previous">' . __( '<span class="meta-nav"></span> Назад', 'eino' ) . '</span>' ); ?>
			<?php next_post_link( '%link', '<span class="next">' . __( 'Вперед <span class="meta-nav"></span>', 'eino' ) . '</span>' ); ?>
		</div><!-- .loop-nav -->

	<?php elseif ( !is_singular() && current_theme_supports( 'loop-pagination' ) ) : loop_pagination( array( 'prev_text' => __( '<span class="meta-nav"></span> Назад', 'eino' ), 'next_text' => __( 'Вперед <span class="meta-nav"></span>', 'eino' ) ) ); ?>

	<?php elseif ( !is_singular() && $nav = get_posts_nav_link( array( 'sep' => '', 'prelabel' => '<span class="previous">' . __( '<span class="meta-nav"></span> Назад', 'eino' ) . '</span>', 'nxtlabel' => '<span class="next">' . __( 'Вперед <span class="meta-nav"></span>', 'eino' ) . '</span>' ) ) ) : ?>

		<div class="loop-nav">
			<?php echo $nav; ?>
		</div><!-- .loop-nav -->

	<?php endif; ?>