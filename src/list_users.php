<?php
      include('../config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1" align ="center" >
        <tr>
            <th>FristName </th>
            <th>LastName </th>
            <th>E-mail </th>
            <th>status </th>
            <th>.... </th>
        </tr>
        <tr>
            <td>Andres</td>
            <td>Malua </td>
            <td>malu@mail.com </td>
            <td>Active </td>
            <td>
            <img src="images/edit.png" width="15">
            <img src="images/trash.png" width="15">
            <img src="images/lupa.png" width="15">
            </td>
        </tr>
        <?php
         //Here code
         $sql = "";
        ?>            
</body>
</html>