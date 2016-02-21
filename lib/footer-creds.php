<?php

add_filter('genesis_footer_creds_text', 'bsg_footer_creds_filter');

function bsg_footer_creds_filter( $creds ) {
    $rel = is_front_page() ? '' : 'rel="nofollow"';
    $creds = "Copyright <a {$rel} href=\"http://onlinecrew.info\">bornracingmx.com</a> © 2016 All Rights Reserved.</a>";
    return $creds;
}
