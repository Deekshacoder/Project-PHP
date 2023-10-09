<?php
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mobile'];
 $Doctors=$_POST['Doctors'];
 $Date=$_POST['Date'];

 $conn=new mysqli('localhost','root','','registration');
 if($conn->connect_error){
     die('Connection Failed:'.$conn->connect_error);
 }else{
     $stmt=$conn->prepare("insert into Registration_form(name,email,mobile,Doctors,Date)values(?,?,?,?,?)");
     $stmt->bind_param("ssssi",$name,$email,$mobile,$Doctors,$Date);
     $stmt->execute();
     echo "Registration successfully......";
     $stmt->close();
     $conn->close();
 }