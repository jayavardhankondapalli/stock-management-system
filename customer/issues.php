<?php
session_start();
?>
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
            <th>username</th>
            <th>product_name</th>
            <th>company_name</th>
        </tr>
        
    <?php
    $username=$_SESSION['user'];
    $sql="SELECT * FROM issues WHERE username='$username'";
    
    ?>
</body>
</html>