<?php
    session_start();
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body
         {
            background: white;
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
          border: 3px solid #FF3838;

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
            <header>PLACE ORDER</header>
            <label>Product name</label><input type="text" name="product_name"><br>
            <label>Company</label><input type="text" name="company"><br>
            <label>Required Quantity</label><input type="number" name="required_quantity"><br>
            <input class= "but" type="submit" value="placeorder">
        </form>
        
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
    
            include("setconn.php");
            
            
            $username=$_SESSION['user'];
            $product_name= $_POST['product_name'];
            $company=$_POST['company'];
            $quantity = $_POST['required_quantity'];
            $status='no';
           
            $sql="INSERT INTO orders VALUES ('$username','$product_name','$company','$quantity','$status')";
            if(mysqli_query($conn,$sql))
            {
                echo "successfully addes";
                
            }
            else
                echo "failed";        
        }
         
        ?>
    </body>
</html>
