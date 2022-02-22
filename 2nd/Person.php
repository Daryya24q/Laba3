<?php

if (!isset($_SESSION["name"]) || !isset($_SESSION["surname"]) || !isset($_SESSION["age"])) {
    http_response_code(401);
    return;
}

if (isset($_SESSION["name"]) && isset($_SESSION["surname"]) && isset($_SESSION["age"])) {
    echo "Your  {$_SESSION['name']} {$_SESSION['surname']} is. You are {$_SESSION['age']} y.o.";
}
