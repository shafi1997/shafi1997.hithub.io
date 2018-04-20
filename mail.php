<?php 
    if(isset($_POST['submit'])){
        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        $to = 'msh.shafiul@gmail.com';
        $messagee = "Name: ".$name."\n"."Subject: ".$subject."\n"."Message: ".$message;
        $header = "From: ".$email;
        
        if(mail($to, $messagee, $header)){
            echo "<h2>Sent Successfully! Thank You"." ".$name.", We will conect you shortly!</h2>";
        }
        else {
            echo "Somthing went wrong!";
        }
    }

?>