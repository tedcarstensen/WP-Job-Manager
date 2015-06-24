<?php
/**
 * Single view Company information box
 *
 * Hooked into single_job_listing_start priority 30
 *
 * @since  1.14.0
 */

if ( ! get_the_company_name() ) {
	return;
}
?>
<div class="company" itemscope itemtype="http://data-vocabulary.org/Organization">
	<?php the_company_logo(); ?>
	<div class="clear"></div>
	<?php the_company_name( '<p class="name">', '</p>' ); ?>
	<?php the_company_tagline( '<p class="tagline">', '</p>' ); ?>
	<p class="web-connect">
	<?php if ( $website = get_the_company_website() ) : ?>
			<a class="website" href="<?php echo esc_url( $website ); ?>" itemprop="url" target="_blank" rel="nofollow"><?php _e( 'Website', 'wp-job-manager' ); ?></a>
		<?php endif; ?>
	<?php the_company_twitter(); ?>
	</p>
	<?php the_company_video(); ?>
</div>
