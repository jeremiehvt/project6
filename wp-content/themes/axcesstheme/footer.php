<?php ?>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<ul class="list-unstyled">
			<?php 
				if (is_user_logged_in()) { ?>

					<li><a href="<?php echo wp_logout_url(home_url())?>">se déconnecter</a></li>
					
				<?php } else { ?>

					<li><a href="<?php echo wp_login_url(home_url())?>">administration</a></li>

				<?php }
			 ?>
			
		</ul>
		<p>site réalisé par ©jeremiehavart | <a href="mailto:jeremiehvt@gmail.com">jeremiehvt@gmail.com</a></p>
	</div>
	
</div>

<?php
wp_footer(); 
?>
</body>
</html>