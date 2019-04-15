<?php

require __DIR__ . '/UPnP.php';

$upnp = new UPnP();
var_dump($upnp->routerIPAddress ());
var_dump($upnp->getExternalIPAddress());

var_dump($upnp->addPortMapping (30045, 30046,$upnp->routerIPAddress ()));
var_dump($upnp->deletePortMapping (30045));
