<?php
/* updated for php7 and php 5 on 2560-09-13 */
/* Section 1 : Configuration */
ini_set('display_errors', 0); // 0 =  'Off'
$db 		= "perlphpasp"; // will be created in s2products.php
$host 		= "localhost";
$uname 		= "root";
$upass 		= "";
$tb			= "products";
$dbstatus 	= 0;
myConnect();

/* Section 2 : function area */
function myConnect() {
	global $db,$host,$uname,$upass,$connect,$dbstatus;	
	if((int)phpversion() >= 7) {
		$connect = new mysqli($host, $uname, $upass, $db);
		if ($connect->connect_error) $connect = new mysqli($host, $uname, $upass); else $dbstatus = 1;
		if ($connect->connect_error) die("Connection failed: " . $connect->connect_error);
	} else {
		if(!$connect = mysql_connect($host,$uname,$upass)) die("Connect failed : ");
	}
}
?>