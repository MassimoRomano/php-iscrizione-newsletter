<?php
function emailControl($mail)
{
    if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {
        return [
            'status' =>  'success',
            'message' => 'Grande ora fai parte della famiglia',
            'value'=> true,
        ];
    } else {
        return [
            'status' =>  'danger',
            'message' => 'Ritenta la tua email non è valida',
            'value'=> false,
        ];
    }
}