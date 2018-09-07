<?php ?>

<div class="jumbotron jumbotron-fluid" id="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3 py-5">
				<ul class="list-unstyled">
                    <h6>administration</h6>
					<?php 
						if (is_user_logged_in()) { ?>

							<li><a href="<?php echo esc_url(wp_logout_url(home_url()))?>">se déconnecter</a></li>
							
						<?php } else { ?>

							<li><a href="<?php echo esc_url(wp_login_url(home_url()))?>">administration</a></li>

						<?php }

						get_sidebar('footer');
					 ?>	
				</ul>
			</div>
            <div class="col-12 col-md-3 py-5 ml-md-5">
                <ul class="list-unstyled">
                    <h6>contact</h6>
                    <li>Mairie de missiriac</li>
                    <li>6 rue Edouard Rolland</li>
                    <li>56140 Missiriac</li><br>
                    <li><a href="mailto:jaxcesshandisports@outlook.com">axcesshandisports@outlook.fr</a></li>
                    <li>06 42 98 96 15</li>
                </ul>
            </div>

		</div>
	</div>
    <p class="col-12" id="colofon"><a href="http://axcesshandisports.fr">axcesshandisports ©</a></p>
</div>

<?php
wp_footer();
?>
</body>
</html>