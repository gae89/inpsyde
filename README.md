# Composer package for Inpsyde Gmbh

##Usage

add to your functions.php:

Autoload files using Composer autoload
require __DIR__ . '/vendor/autoload.php';


###Create a nonce

$WPNonce = new \gae89\inpsyde();
$nonceCreate = $WPNonce -> wp_create_nonce_oop();

For example:

<a href='myplugin.php?do_something=some_action&_wpnonce=<?php echo $nonceCreate; ?>'>Do some action</a>

###Verify a nonce

$WPNonce = new \gae89\inpsyde();
$nonceVerify = $WPNonce -> wp_verify_nonce_oop();
###Add a nonce to a URL


$WPNonce = new \gae89\inpsyde();
$nonceUrl = $WPNonce -> wp_nonce_url_oop();
###Add a nonce to a form


$WPNonce = new \gae89\inpsyde();
$nonceField = $WPNonce -> wp_nonce_field_oop();
###Verify a nonce passed in an AJAX request


$WPNonce = new \gae89\inpsyde();
$checkAjaxRefer = $WPNonce -> check_ajax_referer_oop();
###Test either if the current request carries a valid nonce, or if the current request was referred from an administration screen


$WPNonce = new \gae89\inpsydee();
$checkAdminRefer = $WPNonce -> check_admin_referer_oop();
###Display 'Are you sure you want to do this?' message to confirm the action being taken.


$WPNonce = new \gae89\inpsyde();
$nonceAys = $WPNonce -> wp_nonce_ays_oop();
###Retrieve or display the referer hidden form field


$WPNonce = new \gae89\inpsyde();
$wpReferField = $WPNonce -> wp_referer_field_oop();
