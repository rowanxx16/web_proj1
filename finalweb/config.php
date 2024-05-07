<?php
#connecting to the database 
$host="localhost";
$dbname="Alsharqiah_Event";
$username="root";
$password="1234";
$mysqli=new mysqli(hostname:$host,username:$username,password:$password,database:$dbname);
if($mysqli->connect_errno){
    die("connection error:". $mysqli->connect_error);
}
return $mysqli;
?>
