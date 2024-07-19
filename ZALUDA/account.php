<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        color:whitesmoke;
        
        font-family:sans-serif;
      }
      body{
        background-image:linear-gradient(white,orangered);
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
  <h2 style="text-align:center;color:black;">Your details</h2>
<?php
$con=mysqli_connect('localhost','root','','db_users');
$sql="SELECT * FROM `tb_exist`";
$rs=mysqli_query($con,$sql);
if($rs){
  while($result=mysqli_fetch_assoc($rs)){
      
          echo "<h1><center>YOUR ADDRESS : ".$result['address'] ."</center><br /></h1>";
          echo "<h1><center>YOUR EMAIL ID :".$result['email']. '</center><br /></h1>';
          echo "<h1><center>YOUR ID :".$result['id'] ."5XCTHU</center><br /></h1>" ;
      }
  }
  ?>
  </body>
  </html>