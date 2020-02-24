<?php

require_once "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM `item` where id = $id";
$res = mysqli_query($connect, $sql);

if ($res) {
    header("Location: ../views/admin.php");
} else {
    echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
}