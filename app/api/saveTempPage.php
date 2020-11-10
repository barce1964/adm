<?php
$_POST = json_decode( file_get_contents("php://input"), true );
$newFile = "../../temp.html";

if ($_POST["html"]) {
    fopen($newFile, "w");
    file_put_contents($newFile, $_POST["html"]);
    fclose($newFile);
} else {
    header("HTTP/1.0 400 Bad Request");
}
