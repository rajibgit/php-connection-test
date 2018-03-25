<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "phpapp");

$con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);


if($con){
	echo "your database is successfully connected";
}
else{
	echo "not connected";
}






?>