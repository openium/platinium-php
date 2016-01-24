# Platinium - PHP Client

For more information about Platinium, check out the main repository https://github.com/openium/platinium

## Purpose

You will find here all the PHP code you need to trigger Platinium push notifications on your mobile applications.

## Basic example

This simple example allows you to trigger a notification on the production Platinium server with the production environment.
This code will send a notification on the group `iosdroid1` and will aim the devices with the `en` and `fr` languages.

```
require_once(__DIR__ . '/../api/PPSNotifier.php');

$apiServerId = 'app-id';
$apiServerKey = 'server-key';
$apiServerTokenDev = 'dev-token';
$apiServerTokenProd = 'prod-token';

$groups = array('iosdroid1');
$langs = array('fr', 'en');

$notificationMessage = date(DATE_RFC822) . ' - Hello ' . implode(',', $groups) . ' (' . implode(',', $langs) . ')';
$notification = new PPSNotification($notificationMessage);

$notifier = new PPSNotifier($apiServerId, $apiServerKey, $apiServerTokenDev, $apiServerTokenProd);
$response = $notifier->notify($notification, PPSNotifier::ENV_PROD, $groups, $langs);

var_dump($response);
```

You can find more example in the `examples` directory.

## Also see

The Java implementation of the Platinium client : https://github.com/openium/platinium-java
The Symfony2 bundle based on this PHP implementation : https://github.com/openium/platinium-php-bundle
