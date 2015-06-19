<?php if ( $apply = get_the_job_application_method() ) :
	if ( $apply->type === 'url' ) {
	    $application_href = $apply->url;
	} elseif ( $apply->type === 'email' ) {
	    $application_href = sprintf( 'mailto:%1$s%2$s', $apply->email, '?subject=' . rawurlencode( $apply->subject )  );
	}
	?>
	<div class="application">
		<a class="application_button button" href="<?php echo $application_href; ?>"><?php _e( 'Apply for job', 'wp-job-manager' ); ?></a>
	</div>
<?php endif; ?>
