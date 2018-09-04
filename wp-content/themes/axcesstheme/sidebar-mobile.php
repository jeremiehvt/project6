<?php
if ( is_active_sidebar('main') && is_dynamic_sidebar()) { ?>
    <ul class="mobile-sidebar list-unstyled d-block d-sm-block d-md-none">
        <?php dynamic_sidebar('mobile');?>
    </ul>
<?php
}
