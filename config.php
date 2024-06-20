<?php

$conn = mysqli_connect("localhost", "root", "", "travelo");

if (!$conn) {
    echo "Connection Failed";
}