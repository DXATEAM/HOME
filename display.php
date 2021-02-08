<?php

 $servername='fdb20.biz.nf';
    $username='3482358_contact';
    $password='Lenovo@45Dj';
    $dbname = "3482358_contact";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

$sql = "SELECT name, number, FROM customer";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

// output data of each row

while($row = $result->fetch_assoc()) {

echo "id: " . $row[""]. " - Name: " . $row["name"]. " " . $row["number"]. "<br>";

}

} else {

echo "0 results";

}

$conn->close();

?> 
