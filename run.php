<?php
/**
 * @author fb.com/www.zeldin.go.id
 * @package B1GT0ken
**/
require "./lib.php";
$reff = "17OC16O7O"; // REFF
$serverMail = 0; // Server Generate Mail select 1 or 0
echo "[!] STARTED... GENERATING MAIL\n";
if($serverMail == 2){
	require "./v2.func.php";
	include("./v2.php");
}elseif($serverMail == 1){
	require "./v1.func.php";
	include("./v1.php");
}else{
	require "./v3.func.php";
	include("./v3.php");
}
?>
