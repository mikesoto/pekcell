<?php
/**
 * @package pekcell
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="text-center">
			<?php the_post_thumbnail();?>
		</div>
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
