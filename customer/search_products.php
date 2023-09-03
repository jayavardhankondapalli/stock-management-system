<html>
    <head>
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
        <table>
            <tr>
                
                    <th>NAME</th>
                <th>COMPANY</th>
                <th>QUAANTITY</th>
                <th>MANUFACTURE DATE</th>
                <th>EXPIRY DATE</th>
                <th>PRICE</th>
                </td>
            </tr>    
        
       <?php
       include("setconn.php");
       $sql="SELECT * FROM products";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_num_rows($result);
        while($row = mysqli_fetch_array($result))
        {
           echo "<tr>";
     echo "<td>".$row['product_name']."</td>";
    echo "<td>".$row['company']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo "<td>".$row['manufacture_date']."</td>";
    echo "<td>".$row['expiry_date']."</td>";
    echo "<td>".$row['price']."</td>";
        }
       ?>
    </body>
</html>

