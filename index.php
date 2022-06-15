<?php
echo "this is a xapp test sheet";
include "./smarty/Smarty.class.php";
define('SMARTY_ROOT', './smarty/tpls');
$tpl = new Smarty();
$tpl->setTemplateDir(SMARTY_ROOT."/templates/");
$tpl->setCompileDir(SMARTY_ROOT."/templates_c/");
$tpl->setConfigDir(SMARTY_ROOT."/configs/");
$tpl->setCacheDir(SMARTY_ROOT."/cache/");
$tpl->setCaching(1);
$tpl->setCacheLifetime(60*60*24);
$tpl->setLeftDelimiter('<{');
$tpl->setRightDelimiter('}>');
?>