<?php
 $Name=$_POST['Name'];
 $email=$_POST['email'];
 $your_message=$_POST['message'];

 $conn=new mysqli('localhost','root','','contact');
 if($conn->connect_error){
     die('Connection Failed:'.$conn->connect_error);
 }else{
     $stmt=$conn->prepare("insert into contact_form(Name,email,your_message)values(?,?,?)");
     $stmt->bind_param("sss",$Name,$email,$your_message);
     $stmt->execute();
     echo "Saved successfully......";
     $stmt->close();
     $conn->close();
 }