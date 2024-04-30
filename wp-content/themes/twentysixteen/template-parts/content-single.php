<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<header class="entry-header">
	<div class="container">	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
	<?php the_post_thumbnail(''); ?>
	</header><!-- .entry-header -->

<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	

	<div class="container">
		<?php
			the_content();			
			?>
	</div><!-- .entry-content -->

	<!-- .entry-footer -->
</main><!-- #post-<?php the_ID(); ?> -->
