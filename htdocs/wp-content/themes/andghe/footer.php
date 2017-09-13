</div><!-- #content -->
<div style="clear:both;"></div>
<!-------- FOOTER ------>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">

               <span><i class="fa fa-phone fa-1" aria-hidden="true"></i><?php $footer_options = (array)get_option('footer_options'); ?>
				   <h4> <?php $phone = $footer_options['phone']; ?>
					   <?php if( 0 < strlen( trim( $footer_options['phone'] ) ) ) { ?>
						   <?php echo $phone; ?>
					   <?php } // end if ?> </h4>&nbsp;&nbsp;&nbsp;&nbsp;</span><span><i
						class="fa fa-envelope-o fa-1" aria-hidden="true"></i> <h4><?php $email = $footer_options['email']; ?>
						<?php if( 0 < strlen( trim( $footer_options['email'] ) ) ) { ?>
							<?php echo $email; ?>
						<?php } // end if ?></h4></span>
			</div>
		</div>
		<div class="row social">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<?php $footer_options = (array)get_option('footer_options'); ?>
				<?php
				if(isset($footer_options['facebook_footer'])) {
					$facebook = $footer_options['facebook_footer'];
				}?>
				<?php if(0 < strlen( trim( isset($footer_options['facebook_footer'] )) ) ) {?>
					<a href="https://facebook.com/<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook fa-2x ftr_i"></i></a>
				<?php } // end if ?>

				<?php $footer_options = (array)get_option('footer_options'); ?>
				<?php
				if(isset($footer_options['twitter_footer'])) {
					$twitter = $footer_options['twitter_footer'];} ?>
				<?php if( 0 < strlen( trim( isset($footer_options['twitter_footer'] ) )) ) { ?>
					<a href="http://twitter.com/<?php echo $twitter; ?>"  target="_blank"><i class="fa fa-twitter fa-2x ftr_i"></i></a>
				<?php } // end if ?>

				<?php $footer_options = (array)get_option('footer_options'); ?>
				<?php
				if(isset($footer_options['google_plus_footer'])) {
					$google_plus = $footer_options['google_plus_footer'];} ?>
				<?php if( 0 < strlen( trim( isset($footer_options['google_plus_footer'] )) ) ) { ?>
					<a href="http://google.com/<?php echo $google_plus; ?>" target="_blank"><i class="fa fa-google-plus fa-2x ftr_i"></i></a>
				<?php } // end if ?>
			</div>
		</div>

	</div>
</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
