<?php
$_POST = json_decode( file_get_contents("php://input"), true );

$file = "../../" . $_POST["pageName"];
$newHTML = $_POST["html"];

if ($newHTML && $file) {
    fopen($file, "w");
    file_put_contents($file, $newHTML);
    fclose($file);
} else {
    header("HTTP/1.0 400 Bad Request");
}
