<?php
header("Content-Type: text/html; charset=utf-8");

$ws = "http://localhost:8080/lxc?wsdl";

$spc = new SoapClient($ws);

// var_dump($ct->__getFunctions());


// 创建镜像
$name = "test-soap-api-for-image-create";
$description = "so as name";
$ostype = "unknown";
$cf = "docker";
$df = "raw";

$paras = array('name'=>$name,'description'=>$description,'ostype'=>$ostype,'container_format'=>$cf,'disk_format'=>df);
$r = $spc->create_image($paras);

print_r($r, true);
