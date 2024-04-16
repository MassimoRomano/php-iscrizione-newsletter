<?php
session_start(); // Inizia la sessione
include __DIR__."/assets/function.php";

$email = isset($_GET['email']) ? $_GET['email'] : '';
$result = emailControl($email);

if ($result['value']) {
    $_SESSION['status'] = 'success';
    $_SESSION['message'] = 'Grande, ora fai parte della famiglia';
} else {
    $_SESSION['status'] = 'danger';
    $_SESSION['message'] = 'Ritenta, la tua email non è valida';
}

header("Location: /PHP/NewsLetter/php-iscrizione-newsletter/redirect.php");
exit();
