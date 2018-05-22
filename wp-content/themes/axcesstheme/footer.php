<?php ?>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="list-unstyled">
					<?php 
						if (is_user_logged_in()) { ?>

							<li><a href="<?php echo esc_url(wp_logout_url(home_url()))?>">se déconnecter</a></li>
							
						<?php } else { ?>

							<li><a href="<?php echo esc_url(wp_login_url(home_url()))?>">administration</a></li>

						<?php }
					 ?>	
				</ul>
				<p class="col-12">site réalisé par ©jeremiehavart | <a href="mailto:jeremiehvt@gmail.com">jeremiehvt@gmail.com</a></p>
			</div>
		</div>
	</div>
</div>

<?php
wp_footer(); 
?>
</body>
</html>