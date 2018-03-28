<?php

$nonce = $_GET['_wpnonce'];

if ( wp_verify_nonce( $nonce, 'say-hello' ) ){

    echo 'Hellooo!!!';
} else {
    die( 'Good bye!' );
}