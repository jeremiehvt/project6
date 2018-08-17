<?php
/**
 * Created by PhpStorm.
 * User: havartjeremie
 * Date: 17/08/2018
 * Time: 13:25
 */

if ( is_active_sidebar('footer') && is_dynamic_sidebar()) {
    dynamic_sidebar('footer');
}
