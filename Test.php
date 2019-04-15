<?php

require __DIR__ . '/UPnP.php';

$upnp = new UPnP();
var_dump($upnp->routerIPAddress ());
var_dump($upnp->getExternalIPAddress());

var_dump($upnp->addPortMapping (8089, 8089,$upnp->routerIPAddress ()));
var_dump($upnp->deletePortMapping (8089));
