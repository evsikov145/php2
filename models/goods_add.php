<?php

require_once "db.php";

    $name = $_POST['name'];
    $desk = $_POST['desk'];
    $img = $_FILES['file']['name'];
    $price = $_POST['price'];

    $path = "../img/".$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $path);

    $sql = "INSERT INTO `item` (`name`,`desk`,`path`, `price`) VALUES ('$name', '$desk', '$path', '$price')";
    $res = mysqli_query($connect, $sql);

    if ($res) {
        header("Location: ../views/admin.php");
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
    }
