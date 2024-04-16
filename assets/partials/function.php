<?php
$email = $_GET['email'];
$result = emailControl($email);

function emailControl($mail){
    if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
        return [
            'status' =>  'success',
            'message' => 'Grande ora fai parte della famiglia',
        ];
    } else {
        return [
            'status' =>  'danger',
            'message' => 'Ritenta la tua email non e valida'
        ];  
    }
}

?>