#UPnP by PHP

## UPnP::routerIPAddress
取得路由器IP地址

```
$upnp = new UPnP();
echo $upnp->routerIPAddress ();
```

执行后会返回一个类似于`192.168.1.1` 或 `192.168.10.1`的地址.

## UPnP::getExternalIPAddress

获取现在的IP地址

```
$upnp = new UPnP();
echo $upnp->getExternalIPAddress ();
```

执行后可能获得

## UPnP::addPortMapping

新增端口映射

```
$upnp = new UPnP();
$upnp->addPortMapping (8080, 8080, '192.168.10.4')
```


## UPnP::deletePortMapping

删除端口映射

```
$upnp = new UPnP();
$upnp->deletePortMapping (8080)
```
