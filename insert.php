<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $mobile = $_POST['mobile'];
 
     $sql = "INSERT INTO contact (name,number)
     VALUES ('$name','$mobile')";
 
     if (mysqli_query($conn, $sql)) {
        echo "We will be forwarded to you very soon Thanks for using our website. Click the button aside to return.. ";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>
<html>
<style>
img.back {
     height:60px;
        width:60px;
        text-align:Right;
        margin-left: 400px;
    margin-right: 7px;
    background:white;
    border-radius: 50%;
    border: 2px solid #333;
     }
     a{
    color:#20bcd5;
    border-bottom:px solid #EEF;
    font-size:15;
}
</style>
<a href="Form.html">
<img class="back" src="https://static.thenounproject.com/png/1991936-200.png">
</a>
</html>