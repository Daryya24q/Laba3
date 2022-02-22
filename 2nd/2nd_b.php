<?php

if (!isset($_POST["name"]) || !isset($_POST["surname"]) || !isset($_POST["age"])) {
    http_response_code(400);
    return;
}

if (!session_start()) {
    http_response_code(500);
    return;
}

$_SESSION["name"] = $_POST["name"];
$_SESSION["surname"] = $_POST["surname"];
$_SESSION["age"] = $_POST["age"];
header("Refresh:3; url=Person.php");
