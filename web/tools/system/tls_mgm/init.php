<?php
//use this file to point to the config file of this module 
//this file is used in lib/data_loader.php and in template/header.php but also index.php
require_once("../../../common/cfg_comm.php");
$module_id = "tls_mgm";
$branch = "system";
$_SESSION['branch'] = "system";
$_SESSION['module_id'] = $module_id;
?>
