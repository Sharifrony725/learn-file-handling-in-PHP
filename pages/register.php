<?php
require_once '../vendor/autoload.php';

use App\Classes\Registration;

if (isset($_POST['btn'])) {
    $registration = new Registration($_POST , $_FILES);
    $message =  $registration->index();
    include 'registration.php';
}
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'manage') {
        $registration = new Registration();
       $students =  $registration->getAllStudentInfo();
       include 'manage.php';
    }
}
