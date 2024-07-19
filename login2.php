<?php
 $con=mysqli_connect('localhost','root','','db_users');
 $email=$_POST['email'];
 $lock=$_POST['lock'];
 $address=$_POST['address'];
 $sql="SELECT `email`,`password` FROM `tb_users`";
 
 $rs=mysqli_query($con,$sql);
 $state=0;
 if($rs){
     while($result=mysqli_fetch_assoc($rs)){
         if($result['email']==$email && $result["password"]==$lock){
             echo "logged in";
            $truncate_query="TRUNCATE TABLE `tb_exist`";
        $truncate=mysqli_query($con,$truncate_query);
        if($truncate){
            $sql2="INSERT INTO `tb_exist`(`id`,`email`,`address`)VALUES('0','$email','$address')";
            mysqli_query($con,$sql2);
             
             $state=1;
             header("Location:http://localhost/ZALUDA/index.html");
         }
         
     }
     if($state==0){
         echo "account doesn't exist";
     }
     
        
        
     }

             
     
         }
     
     


 
 
 mysqli_close($con);


?>