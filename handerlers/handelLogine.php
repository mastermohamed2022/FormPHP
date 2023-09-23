<?php
session_start();
include '../core/function.php';

foreach ($_POST as $key => $value) {
    $$key = sanitizeinput($value);
}


// Open File
$file = fopen("../data/user.csv", "r");

// Variable To All Users in FILE
$users = [];

// Loop Through File
while (($data = fgetcsv($file, 1000, ",")) !== false) {
    $users[] = $data;
}

foreach ($users as $user) {
    if ($user[1] === $email && $user[2] === sha1($password)) {
        $_SESSION["auth"] = $user;
        redirect("../index.php");
    }
}

$_SESSION["errors"] = ["email or password is not correct"];
redirect("../login.php");