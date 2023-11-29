<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="uasyos";
$mysqli = mysqli_connect($host,$user,$password,$db) or die("Tidak dapat terhubung ke database");
?>