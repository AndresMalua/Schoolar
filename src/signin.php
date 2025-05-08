<?php

     include('../config/database.php');

     session_start();

     if(isset($_SESSION['user_id'])){
        header('Refesch:0; url=http://localhost/Schoolar/src/home.php');
     }



     $email = $_POST['e_mail'];
     $passw = $_POST['p_sswd'];
     $enc_pass = sha1($passw);

     $sql = "
     SELECT 
               --id, 
               --email, 
               --password, 
                COUNT(id) as total
     from 
               users 
     where 
               email = '$email' and 
               password ='$passw' and 
               status = true 
               id;";

    $res = pg_query($conn,$sql);

    if($res){
        $row = pg_fetch_assoC($res);
       if($row['total'] > 0){
       //echo " Login OK";
       $_SESSION['user_id'] = $conn['id']
       header('Refesch:0; url=http://localhost/Schoolar/src/home.php');
      }else{
        echo"Login failed";
       }
    }   


?>