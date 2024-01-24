<?php
session_start();
$db=mysqli_connect("localhost","root","","dbcovid19");
mysqli_query($db,"set name 'utf8'");

?>