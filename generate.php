<?php

require_once "vendor/autoload.php";

use Krystian\PdfPhp\classes\Generator;

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}

if(!$_POST["first_name"] ||
    !$_POST["last_name"] ||
    !$_POST["email"] ||
    !$_POST["phone"] ||
    !$_POST["description"])
{
    exit;
}

$data = [
    'name_field' => $_POST["first_name"] . " " . $_POST["last_name"],
    'email_field' => $_POST["email"],
    'phone_field' => $_POST["phone"],
    'enquiry_field' => $_POST["description"]
];

$result = Generator::generate($data);

var_dump($result);