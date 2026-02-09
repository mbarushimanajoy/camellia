<?php
$hostname="localhost";	
$username="root";
$password="";
$database="camellia";
$conn=mysqli_connect($hostname,$username,$password,$database);
if(!$conn){
    echo"database not connected";
}
?>