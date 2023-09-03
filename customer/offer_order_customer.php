<?php
session_start();
include('setconn.php');       
$product_name=$_GET['prod'];
$company_name=$_GET['com'];
$quantity=$_GET['qua'];
$username=$_SESSION['user'];
$sql="INSERT INTO orders VALUES ('$username','$product_name','$company_name','$quantity','no')";
$result = mysqli_query($conn,$sql);
echo "Order placed";