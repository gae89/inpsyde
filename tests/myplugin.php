<?php
//Take the code...
$nonce = $_GET['_wpnonce'];
//...and verify it.
if ( wp_verify_nonce( $nonce, 'say-hello' ) ){
    //The code is correct, so...
    echo 'Hellooo!!!';
} else {
    die( 'Good bye!' );
}
