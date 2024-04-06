
<?php
//echo "Hello World!";
if(isset($_POST['create'])){
    $con=mysqli_connect('localhost','root','','db_users');
   
    $user=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['lock'];
    $sql="INSERT INTO `tb_users`(`id`,`user`,`email`,`password`)VALUES('0','$user','$email','$password')";
    $rs=mysqli_query($con,$sql);
    if($rs){
    header("Location:http://localhost/ZALUDA/login2.html");
    }else{
         echo "account created";
    }
}
else if(isset($_POST['log'])){
    //echo "logged in";
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
                header("Location:http://localhost/ZALUDA/index.html");
                $state=1;
                $truncate_query="TRUNCATE TABLE `tb_exist`";
        $truncate=mysqli_query($con,$truncate_query);
        if($truncate){
            $sql2="INSERT INTO `tb_exist`(`id`,`email`,`address`)VALUES('0','$email','$address')";
            mysqli_query($con,$sql2);
             
             $state=1;
             header("Location:http://localhost/ZALUDA/index.html");
         }
            }
            
        }
        if($state==0){
            echo "account doesn't exist";
        }
        

                
        
            }
        
        


    
    
    mysqli_close($con);
}
?>