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
         html,body{
             border: 0;
             padding: 0;
              margin: 0;
            height: 100%;
            }
            
         body
         {
        background: tomato;
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
        border-radius: 10px;
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
        <form action=" " method="post">
            <header>CUSTOMER SIGNUP</header>
            <label>username</label> <input type="text" name="username1"/><br>
            <label>password</label> <input type="text" name="password1"/><br>
            <label>retype password</label><input type="text" name="repassword"/><br>
            <input class="but" type="submit" name="signup" value="signup">
        </form>
        <?php
            if(isset($_POST['signup']))
            {
                
                $username1=$_POST['username1'];
                $password1=$_POST['password1'];
                $repassword=$_POST['repassword'];
                if($password1==$repassword)
                {
                    include("setconn.php");
                    $sql="INSERT INTO customer_login VALUES ('$username1','$password1')";
                    $result=mysqli_query($conn,$sql);
                    echo "namastha";
                }
                else
                {
                    echo "passsword does not match";
                }
            
            }
        
        ?>
    </body>
</html>
