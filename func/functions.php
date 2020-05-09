<?php

function sendEmail(array $data)
{
    // var_dump($data);
    mail($data['email'], $data['subject'], $data['message']);
}