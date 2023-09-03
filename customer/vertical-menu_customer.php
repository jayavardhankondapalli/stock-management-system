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
            .vertical-menu {
                background-color: "black";
            }
            
        .b{
            background-color: rgb(82, 186, 179);
            border-radius: 6px;
            border: none;
            color: rgb(255, 255, 255);
            padding: 10px;
            margin-left: 10px;
            text-transform: uppercase;
            width: 200px;
            cursor: pointer;
            position: relative;
            margin-bottom: 20px
          }
               
            #adim
        {
            width:200px;
            height:200px;
            position:relative;
           margin-top: 170px;
            
            
        }
            
        </style>
        <script language="javascript">
    
    function place_order()
    {
    
         parent.second.location="place_order.php";
    }
    function offers()
    {
        parent.second.location="offers_customer.php";
    }
    function accounts()
    {
        parent.second.location="accounts_customer.php";
    }
    function search_products()
    {
        parent.second.location="search_products.php";
    }
    function issues()
    {
        parent.second.location="issues.php";
    }
</script>
        
    </head>
    <body>
        <div class="vertical-menu">
             <button  class ="b" onclick="place_order()">Place order</button>
             <button  class ="b" onclick="search_products()">Search products</button>
            <button class="b" onclick="offers()">Offers</button>
            <button class="b" onclick="issues()">issues</button>
            <button class="b" onclick="accounts()">Accounts</button>
               <center><img id="adim" src="customer.png" ></img></center>
  <div/>
        <?php
            
           
                    
                    
        ?>
    </body>
</html>
