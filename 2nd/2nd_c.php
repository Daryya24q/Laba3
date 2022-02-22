<?php


$data = "";
$data .= "<ul>";
foreach ($_SESSION as $key => $value)
    $data .= "<li>" . $key . "=" . $value;
$data .= "</ul>";
echo $data;
