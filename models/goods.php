<?php

require_once "db.php";

function goodsAll($connect) {
    $sql = "select * from item";
    $res = mysqli_query($connect, $sql);

    if(!$res) {
        die(mysqli_error($connect));
    }

    return $res;
}

function goodsGet($connect, $id) {
    $sql = "select * from item where id=$id";
    $res = mysqli_query($connect, $sql);

    if(!$res) {
        die(mysqli_error($connect));
    }

    return $res;
}
