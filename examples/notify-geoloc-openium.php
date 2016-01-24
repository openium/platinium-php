<?php

require_once(__DIR__ . '/../api/PPSNotifier.php');

$apiServerId = 'b9ca566f-0570-ed44-31ab-106ceac0bf3c';
$apiServerKey = '3267882580383289145452322957630521931488968087816507086738186514978459075760496548590054652324442445588148375684038958734580174397945949740124503293335406456173061161914489335828687253189218411598676675922380304419054747868997907202536823143004477462852888224839141087085346272823209210946499505630290134064958623105227980256836755351452843981526267749488266400967977616623311429373486792653191742166989232282852685656249718888302335993508917693461911000155927311810625542892341979737811596037885028755890293437856719594160009687469727528598163339328979491948481432509440003210733754256525482058423994843980081689248';
$apiServerTokenDev = '43b4f716f8ef4f0b5ddda0d09d35c5d72164daa6';
$apiServerTokenProd = 'a57c2c00eec8311b3969905fc0fe602e2253547f';

$groups = array('iosdroid1', 'iosdroid2');

$notificationMessage = date(DATE_RFC822) . ' - Hello ['.implode(',', $groups).']';
$notification = new PPSNotification($notificationMessage);
$notification->setSound("war3.wav");

$notifier = new PPSNotifier($apiServerId, $apiServerKey, $apiServerTokenDev, $apiServerTokenProd);
$notifier->setServer('http://platinium-dev.openium.fr');
$notifier->setLatitude(45.765198);
$notifier->setLongitude(3.1356983);
$notifier->setRadius(10000);
$notifier->setTolerance(7);
$response = $notifier->notify($notification, PPSNotifier::ENV_DEV, $groups);

var_dump($response);

?>
