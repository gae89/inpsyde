[![](https://i.imgur.com/UgKXsjj.png)](https://i.imgur.com/UgKXsjj.png)

<a href='myplugin.php?_wpnonce={$nonce}'>Save Something</a>

**Autoload files using Composer autoload**
```php
require __DIR__ . '/vendor/autoload.php';
```

**Create a nonce**
```php
$WPNonce = new \gae89\inpsyde();
$nonceCreate = $WPNonce -> wp_create_nonce_oop();
```

**Verify a nonce**
```php
$WPNonce = new \gae89\inpsyde();
$nonceVerify = $WPNonce -> wp_verify_nonce_oop();
```

**Add a nonce to a URL**
```php
$WPNonce = new \gae89\inpsyde();
$nonceUrl = $WPNonce -> wp_nonce_url_oop();
```


**Add a nonce to a form**
```php
$WPNonce = new \gae89\inpsyde();
$nonceField = $WPNonce -> wp_nonce_field_oop();
```

**Verify a nonce passed in an AJAX request**
```php
$WPNonce = new \gae89\inpsyde();
$checkAjaxRefer = $WPNonce -> check_ajax_referer_oop();
```

**Test either if the current request carries a valid nonce, or if the current request was referred from an administration screen**
```php
$WPNonce = new \gae89\inpsyde();
$checkAdminRefer = $WPNonce -> check_admin_referer_oop();
```

**Display 'Are you sure you want to do this?' message to confirm the action being taken**
```php
$WPNonce = new \gae89\inpsyde();
$nonceAys = $WPNonce -> wp_nonce_ays_oop();
```

**Retrieve or display the referer hidden form field**
```php
$WPNonce = new \gae89\inpsyde();
$wpReferField = $WPNonce -> wp_referer_field_oop();
```
