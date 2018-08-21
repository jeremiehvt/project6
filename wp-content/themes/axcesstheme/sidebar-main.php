<?php
if ( is_active_sidebar('main') && is_dynamic_sidebar()) { ?>
    <ul class="main-sidebar list-unstyled">
        <?php dynamic_sidebar('main');?>
    </ul>
<?php
}
