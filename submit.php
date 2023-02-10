<?php
include('db_conn/db_conn.php');

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$requirement = $_POST['contact_reason'];

$sql = "INSERT INTO stu_200021021066 VALUES(NULL, '$name','$number', '$email', '$requirement')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "i guess it worked?.";
} else {
    echo " Please try again, the data has failed to send.<br> if your data was a car, its engine has blown out- It's going nowhere.";
}


?>