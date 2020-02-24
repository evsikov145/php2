<?php

include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM item WHERE id = $id ";

$res = mysqli_query($connect, $sql);

$data = mysqli_fetch_assoc($res);

$name = $data['name'];

$sql2 = "INSERT INTO basket(name) VALUES ('$name')";
mysqli_query($connect, $sql2);

header("Location: ../index.php");



