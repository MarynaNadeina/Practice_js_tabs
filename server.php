<?php
$_POST = json_decode(file_get_contents("php://input"), true); //for JSON type
echo var_dump($_POST);