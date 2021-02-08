<?php
    $servername='fdb20.biz.nf';
    $username='3482358_contact';
    $password='Lenovo@45Dj';
    $dbname = "3482358_contact";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>