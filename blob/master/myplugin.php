<?php

// In our file that handles the request, verify the nonce.

$nonce = $_REQUEST['_wpnonce'];

if ( ! wp_verify_nonce( $nonce, 'my-nonce' ) ) {

     die( 'Security check' );

} else {

     // Do stuff here.
}

?>