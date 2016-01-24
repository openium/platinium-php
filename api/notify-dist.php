<?php

// Use this file as an example for your notifications

require_once(__DIR__ . '/../api/PPSNotifier.php');

$apiServerId = 'app-id';
$apiServerKey = 'private-key';
$apiServerTokenDev = 'dev-token';
$apiServerTokenProd = 'prod-token';

$notificationMessage = date(DATE_RFC822) . '- Push Notification from '.$_SERVER['PHP_SELF'];
$notification = new PPSNotification($notificationMessage, 12);

$notifier = new PPSNotifier($apiServerId, $apiServerKey, $apiServerTokenDev, $apiServerTokenProd);

$groups = array('group1', 'group2');
$langs = array('fr', 'en');
// Use ENV_PROD to push on the production environment
$response = $notifier->notify($notification, PPSNotifier::ENV_DEV, $groups, $langs);


var_dump($response);

?>
