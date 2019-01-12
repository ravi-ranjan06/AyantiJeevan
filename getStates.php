<?php
require_once('util/class.register.php');

$register       = new Register();

$country 		= trim($_REQUEST['country']);

if(isset($country) && $country != '')
{
	$states 	= $register->getStates($country);

	print_r(json_encode($states));
}
else
{
	echo "ERROR@#Please Select a valid country!";
}
?>