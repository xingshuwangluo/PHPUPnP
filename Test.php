<?php

require __DIR__ . '/UPnP.php';

$upnp = new UPnP();
var_dump($upnp->routerIPAddress ());
var_dump($upnp->getExternalIPAddress());

var_dump($upnp->addPortMapping (80, 8089,'172.16.3.134'));
var_dump($upnp->deletePortMapping (8089));
