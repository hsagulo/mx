<?php

add_filter('genesis_footer_creds_text', 'bsg_footer_creds_filter');

function bsg_footer_creds_filter( $creds ) {
    $rel = is_front_page() ? '' : 'rel="nofollow"';
    $creds = "Copyright &copy 2016 All rights reserved. <a {$rel} href=\"http://mxzen.com\">www.mxzen.com</a> </a>";
    return $creds;
}
