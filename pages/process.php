<?php
require_once '../vendor/autoload.php';

use App\Classes\Generator;
use App\Classes\ImageUpload;

$result = '';
if (isset($_POST['btn'])) {
    $generator = new Generator($_POST);
    $result =   $generator->index();
    include 'home.php';
} else if (isset($_POST['btn1'])) {
    $imageUpload = new ImageUpload($_POST, $_FILES);
    $result             =   $imageUpload->index();
    extract($result);
    include 'example-two.php';
}
