<?php
$FullName=$_POST['FullName'];
$Date=$_POST['Date'];
$Time=$_POST['Time'];

//databse connection
$conn = new mysqli('localhost','root','','','test');
if($conn->connect_error){
    die('connection Failed : ' $conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into BOOK YOUR BUS(FullName,Date,Time) values(?,?,?)");
    $stmt->bind_param("sss",$FullName,$Date,$Time);
    echo"done";
    $stmt->close()
    $conn->close()
}
?>