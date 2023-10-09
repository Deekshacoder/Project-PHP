<?php
 
 $Name=$_POST['Name'];
 $mobile=$_POST['mobile'];
    

 $conn=new mysqli_connect('localhost','root','','login');
 if($conn->connect_error){
     die('Connection Failed:'.$conn->connect_error);
 }else{
     $stmt=$conn->prepare("insert into login_form(Name,mobile)values(?,?)");
     $stmt->bind_param("si",$Name,$mobile);
     $stmt->execute();
     echo "Registration successfully......";
     $stmt->close();
     $conn->close();
 }