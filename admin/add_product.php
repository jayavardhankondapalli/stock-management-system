<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
          
         body
         {
            background:white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
         }
         form
         {
          
            background: white;
            width: 40%;
            box-shadow: 0px 0px 20px rgba(#000, .7);
            font-family: lato;
            position: relative;
            color: #333;
            border-radius: 20px;
            border-width: 3px;
            border-color: #FF3838;
            border-style: solid;
         }
         header
          {
            background: #FF3838;
            padding: 30px 20px;
            color: white;
            font-size: 1.2em;
            font-weight: 600;
            border-radius: 10px 10px 0 0;
          }
          input
         {
           display: block;
            width: 78%;
            margin-left: 20px;
            padding: 5px 20px;
            font-size: 1em;
            border-radius: 3px;
            outline: none;
            border: 1px solid #ccc;
         }
         label
          {
            margin-left: 20px;
            display: inline-block;
            margin-top: 10px;
            margin-bottom: 5px;
            position: relative;
          }
          .but
           {
        position: relative;
        margin-top: 10px;
        margin-bottom: 10px;
        left: 50%;
        transform: translate(-50%, 0);
        font-family: inherit;
        color: white;
        background: #FF3838;
        outline: none;
        border: none;
        padding: 5px 15px;
        font-size: 1.3em;
        font-weight: 400;
        border-radius: 3px;
        box-shadow: 0px 0px 10px rgba(#333, 0.4);
        cursor: pointer;
        transition: all 0.15s ease-in-out;
           }
       
        </style>
    </head>
    
    <body>
        
        <form action="" method="post">
            <header id="top">ADD PRODUCT</header>
           <label>Product name</label><input type="text" name="product_name"><br>
            <label>Company</label><input type="text" name="company"><br>
            <label>Quantity</label><input type="text" name="quantity"><br>
            <label>manufacture date</label><input type="date" name="manufacture_date"><br>
            <label>Expiry date</label><input type="date" name="expiry_date"><br>
            <label>price</label><input type="number" name="price"><br>
            <input class="but" type="submit" value="ADD">
        </form>
        
        <?php
      //  
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            include("setconn.php");
            $product_name= $_POST['product_name'];
            $company=$_POST['company'];
            $quantity = $_POST['quantity'];
            $manufactute_date =$_POST['manufacture_date'];
            $Expiry_date = $_POST['expiry_date'];
            $price =$_POST['price'];
        if($product_name=="" || $company=="" || $quantity=="" ||$manufactute_date=="" ||$Expiry_date==""|| $price=="")
            {
                header("location:add_product.php");
            }
         else
         {
            $sql="INSERT INTO products VALUES ('$product_name','$company','$quantity','$manufactute_date','$Expiry_date','$price')";
            if(mysqli_query($conn,$sql))
            {
                echo "successfully addes";
                
            }
            else
                echo "failed";
         }
        }
       
        ?>
    </body>
</html>
