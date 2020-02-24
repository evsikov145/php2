<?php

function getBasket($connect) {
    $sql = "select * from basket";
    $res = mysqli_query($connect, $sql);

    if(!$res) {
        die(mysqli_error($connect));
    }

    return $res;
}