<?php
   include("setconn.php");
   $q=$_GET['q'];
   $username=$_GET['user'];
   $product_name=$_GET['prod'];
   $company_name=$_GET['com'];
   $required_products=$_GET['req'];
   if($q==1){
       $sql="SELECT * FROM products WHERE product_name='$product_name' AND company='$company_name'" ;
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $quantity=$row['quantity'];
        $price=$row['price'];
        if($required_products<$quantity)
        {
            $p=0;
            $sql="SELECT * FROM offers";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    if($row['product_name']==$product_name AND $row['company']==$company_name)
                    {
                        $percentage=$row['percentage'];
                        $price=$required_products*($price-(($price*$percentage)/100));
                        $p=1;
                        break;
                    }
               
                }
            }
            if($p==0)
            {
                $price=$required_products*$price;
            }
          
                $sql="UPDATE orders SET status='accepted' WHERE customername='$username' AND product_name='$product_name' AND company='$company_name'";
                $result = mysqli_query($conn,$sql);
                echo "Order Completed";
                if($p==1)
                {
                    echo " with Offer";
                }
                $sql="INSERT INTO accounts VALUES ('$username','$product_name','$company_name','$required_products','$price','SELL',CURRENT_DATE)";
                $result = mysqli_query($conn,$sql);
                $quantity=$quantity-$required_products;
                $sql= "UPDATE products SET quantity='$quantity' WHERE product_name='$product_name' AND company='$company_name'";
                $result=mysqli_query($conn,$sql);
        }
        else{
            echo "No stock\n place order";
            $sql="INSERT INTO issues VALUES ('$username','$product_name','$company_name')";
            mysqli_query($conn,$sql);
            
            
        }
   }
   if($q==2)
   {
       $sql="UPDATE orders SET status='canceled' WHERE customername='$username' AND product_name='$product_name' AND company='$company_name'";
       echo "Order Canceled";
   }

?>
