<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        color:whitesmoke;
        
        font-family:sans-serif;
      }
      body{
        background-color:crimson;
        background-repeat:no-repeat;
        background-size:cover;
        margin-top:400px;
      }
      h2{
        font-size:100px;
        margin-bottom:150px;
      }
      </style>
</head>
<body>
  
<?php
  $con=mysqli_connect('localhost','root','','db_users');
  $sql="SELECT `address` FROM `tb_exist`";
  $rs=mysqli_query($con,$sql);
  if($rs){
    while($result=mysqli_fetch_assoc($rs)){
        
            echo "<center><h1>YOUR ADDRESS : ".$result['address']."</h1></center>";
        }
    }
  

  ?>
  </body>
  </html>