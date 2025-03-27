<?php

    include('../config/database.php');

    $fname  = $_POST['f_name'];
    $lname  = $_POST['l_name'];
    $email  = $_POST['e_mail'];
    $passwd = $_POST['passw' ];


    $sql = "INSERT INTO users (firstname, lastname , email, password)
                 VALUES('$f_name','$l_name','$e_mail','$passw')
                
   ";
    $res = pg_query($conn,$sql);

    if ($res){
         echo "User has been created succesfully";
    }else{
        echo "Error";
   } 

?>