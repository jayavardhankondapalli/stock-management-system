<?php
   session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <style>
    table 
    {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
    
    </style>
    </head>
    <body>
        <?php
        include("setconn.php");
        $user=$_SESSION['user'];
       
         $sql = "SELECT * FROM accounts WHERE Customer_Dealer_name='$user'";
         $result=mysqli_query($conn,$sql);
         echo " <table>
            <tr>
                <th>USERNAME</th>
                <th>PRODUCT_NAME</th>
                <th>COMPANY</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>DATE</th>
            </tr>";
       
         
         if(mysqli_num_rows($result) > 0){
           while($row = mysqli_fetch_array($result)){
           echo "<tr>";
  echo "<td>".$row['Customer_Dealer_name']."</td>";         
  echo "<td>".$row['Productname']."</td>";
  echo "<td>".$row['Company']."</td>";
  echo "<td>".$row['Quantity']."</td>";
  echo "<td>".$row['Price']."</td>";
    echo "<td>".$row['Date']."</td>";

  echo "</tr>";     
          }
          echo "<table>";
         }
 else {echo "no accounts ";}
        ?>
    </body>
</html>
