<?php

define("HOME", 'http://127.0.0.1');
define("CMS", 'XWCMS');
define("ROOTURL",$_SERVER['DOCUMENT_ROOT']);
define("A",0);
define("B",1);
define("C",2);
define("D",3);
define("E",4);
define("F",5);
$configArray = ['system'=>'linux'];


$configArray = json_encode($configArray);

define('DATA',$configArray);



