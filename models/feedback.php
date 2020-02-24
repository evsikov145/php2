<?php

require_once "db.php";

function feedbackAll($connect) {
    $sql = "select * from feedback";
    $res = mysqli_query($connect, $sql);

    return $res;
}

if(!empty($_POST['name']) && !empty($_POST['text']) && !empty($_FILES['file']['name'])) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $img = $_FILES['file']['name'];
    feedbackAdd($connect, $name, $text, $img);
}

function feedbackAdd($connect, $name, $text, $img) {

    $path = "../feedback/".$img;
    move_uploaded_file($_FILES['file']['tmp_name'], $path);

    $sql = "INSERT INTO `feedback` (`name`,`text`,`img`) VALUES ('$name', '$text', '$img')";
    $res = mysqli_query($connect, $sql);

    if ($res) {
        header("Location: ../views/otzovy.php");
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($connect) . '</p>';
    }
}





