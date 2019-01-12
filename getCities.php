<?php
require_once('util/class.register.php');

$register       = new Register();

$country 		= trim($_REQUEST['country']);
$state 			= trim($_REQUEST['state']);

if(isset($country) && isset($state))
{
	$cities 	= $register->getCity($country,$state);

	print_r(json_encode($cities));
}
else
{
	echo "ERROR@#Please Select a valid State!";
}
?>