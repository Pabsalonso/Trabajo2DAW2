<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Diet_Shop
 */

get_header();

$layout = diet_shop_get_option('blog_layout');
/**
* Hook - diet_shop_container_before 		- 10
*
* @hooked diet_shop_container_before
*/
 do_action( 'diet_shop_container_before', esc_attr( $layout ) );
?>

		

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			do_action( 'diet_shop_loop_navigation' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	

<?php

/**
* Hook - diet_shop_container_after 		- 10
*
* @hooked diet_shop_container_after
*/
do_action( 'diet_shop_container_after',  esc_attr( $layout ) );

get_footer();
