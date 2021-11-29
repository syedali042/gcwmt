<?php

$hidden_controller = array("admin");

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	$base_folder_name = "govt/colleges/model-town-g/";//LEAVE IT EMPTY FOR THE ROOT
	define('_DB_USER', "root");
	define('_DB_PASS', "");
	define('_DB_NAME', "gcwmt");
	define('_DB_HOST', "localhost");
}
else
{
	$base_folder_name = ""; 
	define('_DB_USER', "");
	define('_DB_PASS', "");
	define('_DB_NAME', "");
	define('_DB_HOST', "localhost");
}

error_on();
error_off();

define('APP_TITLE', "Govt. College For Women, Model Town", true);
define('DEFAULT_CONTROLLER', "hildes", true);

//Whether or use the session
define('_SESSION', true);


//dont edit these

define('BASEURL',trim("/$base_folder_name"), true);

define('_EXT', ".php");
define('_PS', "/");

define('CSS', "/".$base_folder_name."resources/css/", true);
define('IMG', "/".$base_folder_name."resources/images/", true);
define('JS', "/".$base_folder_name."resources/js/", true);
define('UPLOADS', "/".$base_folder_name."resources/upload/", true);
define('PLUGIN', "/".$base_folder_name."resources/plugins/", true);

define('ADMIN_CSS', "/".$base_folder_name."resources/admin/resources/assets/css/", true);
define('ADMIN_IMG', "/".$base_folder_name."resources/admin/resources/images/", true);
define('ADMIN_VENDOR', "/".$base_folder_name."resources/admin/resources/vendors/", true);
define('ADMIN_JS', "/".$base_folder_name."resources/admin/resources/assets/js/", true);
define('ADMIN_UPLOADS', "/".$base_folder_name."resources/admin/resources/uploads/", true);
define('ADMIN_AJAX', "/".$base_folder_name."resources/admin/resources/ajax/", true);
define('ADMIN_INVOICES', "/".$base_folder_name."resources/admin/resources/invoices/", true);
define('ADMIN_REPORT', "/".$base_folder_name."resources/admin/resources/reports/", true);

if(_SESSION){if(!session_id()){session_start();$_SESSION['uniq']="\x4D\x20\x41\x62\x75\x20\x42\x61\x6b\x61\x72\x20\x4B\x68\x61\x6E";}ob_start();}else{ob_start();}
?>