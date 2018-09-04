<?php
if ( is_active_sidebar('main') && is_dynamic_sidebar()) { ?>
    <ul class="main-sidebar list-unstyled d-none d-sm-none d-md-block">
        <?php dynamic_sidebar('main');?>
    </ul>
<?php
}
