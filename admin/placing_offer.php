<?php
 include("setconn.php");
 $product_name=$_GET['prod'];
 $company_name=$_GET['com'];
 $q=$_GET['q'];
 if($q==1)
 {
     $percentage=$_GET['per'];
     $sql="INSERT INTO offers VALUES ('$product_name','$company_name','$percentage')";
     $result = mysqli_query($conn,$sql);
     echo "offer_placed";
 }
 if($q==2)
 {
     $sql="DELETE FROM offers WHERE product_name='$product_name' AND company='$company_name'";
     $result = mysqli_query($conn,$sql);
     echo "deleted_offer";
 }
        
