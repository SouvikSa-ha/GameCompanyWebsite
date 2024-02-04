<?php

$conn = mysqli_connect("localhost", "root", "", "legacy_db");

if (!$conn) {
    echo "Connection Failed";
}