<?php
/**
 * Banner / Featured content
 *
 * @package Dyad
 */

?>


<article data-id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/**
	 * Post media
	 */
	?>

	<div class="site-banner-media">
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'dyad-banner' ); ?>

		<div class="site-banner-thumbnail" title="<?php the_title_attribute(); ?>" <?php if ( has_post_thumbnail() ) { echo 'style="background-image: url(' . esc_url( $thumb[0] ) . ');"'; } ?>></div>
	</div><!-- .site-banner-media -->

	<?php
	/**
	 * Post title
	 */
	?>

	<div class="site-banner-header">
		<span class="banner-featured"><?php esc_html_e( 'Featured', 'dyad' ); ?></span>
		<h1 class="entry-title">
			<a href="#banner-content--<?php the_ID(); ?>" rel="modal:open">
				<?php the_title(); ?>
			</a>
		</h1>
		<div id="banner-content--<?php the_ID(); ?>" class="modal"><?php the_content() ?></div>
	</div><!-- .site-banner-header -->
</article>
