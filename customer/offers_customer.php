<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
.b{
    background-color:rgb(82, 186, 179);
            border-radius: 6px;
            border: none;
            color: rgb(255, 255, 255);
            padding: 5px;
            margin-left: 10px;
            text-transform: uppercase;
            width: 200px;
            cursor: pointer;
            position: relative;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
    </style>
    </head>
     <script language="javascript">
         function order(x)
         {
              var t=document.getElementById("t");
             var row=x.parentElement.rowIndex;
             var product_name=t.rows[row].cells[0].innerHTML;
             var company_name=t.rows[row].cells[1].innerHTML;
             var quantity=window.prompt("Enter Quantity");
           
             if (window.XMLHttpRequest) {
                            xmlhttp = new XMLHttpRequest();
                          } 
                        else 
                        {
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() 
                        {
                            if (this.readyState == 4 && this.status == 200) 
                            {
                              alert(this.responseText);
                            }
                        };
                        xmlhttp.open("GET","offer_order_customer.php?q=1&prod="+product_name +"&com="+company_name +"&qua="+quantity,true);
                        xmlhttp.send();
         }
     </script>
    <body>
        <?php
         include("setconn.php");
         $sql = "SELECT * FROM offers";
         $result=mysqli_query($conn,$sql);
         echo " <table id=\"t\">
            <tr>
                <th>NAME</th>
                <th>COMPANY</th>
                <th>PERCENTAGE</th>
                <th>OFFER</th>
                
            </tr>";
       
         
         if(mysqli_num_rows($result) > 0){
           while($row = mysqli_fetch_array($result)){
           echo "<tr>";
  echo "<td>".$row['product_name']."</td>";
  echo "<td>".$row['company']."</td>";
  echo "<td>".$row['percentage']."</td>";
  echo "<td onclick=\"order(this)\"><button class=\"b\">PLACE_ORDER</button></td>";
  echo "</tr>";     
          }
          echo "<table>";
         }
 else {echo "zero";}
        
        ?>
    </body>
</html>
