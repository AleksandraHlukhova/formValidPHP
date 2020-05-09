<?php

$errors = array();
$oldInput = array();
$data = array();
$flag = true;

if(isset($_POST['submit'])){
    function test_input($res) {
        $res = trim($res); //убирает пробелы
        $res = stripslashes($res); //убирает знаки экранирования
        $res = htmlspecialchars($res); //Преобразует специальные символы в HTML-сущности
        return $res;
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // $message = wordwrap($message, 70, "\r\n");
    $data['subject'] = $subject;
    $name = test_input($name);
    if (empty($name)) {
        $errors['name'] = 'Имя обязательно';
        $oldInput['name'] = $name;
    }else if(mb_strlen($name) < 3){
        $errors['name'] = 'Введите корректное имя ';
        $oldInput['name'] = $name;
    } else if(!preg_match("/^[a-яA-Я ]*$/",$name)) {
        // $name = test_input($name);
        $errors['name'] = 'Разрешены только буквы и пробелы';
        $oldInput['name'] = $name;
    }else if($flag){
        $oldInput['name'] = $name;
    }
        $data['name'] = $name;

    $email = test_input($email);
    if (false === filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email обязательно';
        $oldInput['email'] = $email;
    }else if($flag){
        $oldInput['email'] = $email;
    }
        $data['email'] = $email;

    $phone = test_input($phone);
    $regexp = "/[0-9]/ui";
    if (empty($phone)){
        $errors['phone'] = 'Поле должно быть заполнено';
        $oldInput['phone'] = $phone;
    }else if(!preg_match_all($regexp, $phone, $matches)){
        $errors['phone'] = 'поле не может модержать буквы';
        $oldInput['phone'] = $phone;
    }else if (mb_strlen($name) < 10) {
        $errors['phone'] = 'Введите корретный номер(10 симв.)';
        $oldInput['phone'] = $phone;
    }else if($flag){
        $oldInput['phone'] = $phone;
    }
        $data['phone'] = $phone;
    
    $message = test_input($message);
    if(empty($message)){
        $errors['message'] = 'Поле должно быть заполнено';
    }else if(mb_strlen($message) < 20 && mb_strlen($message) !== 0){
        $errors['message'] = 'опишите свой вопрос более развернуто';
        $oldInput['message'] = $message;
    }else if($flag){
        $oldInput['message'] = $message;
    }
        $data['message'] = $message;
    
    if(count($errors) === 0){
        $flag = false;

        require_once "./func/functions.php";
        // send mail to the user
        
        if(sendEmail($data)){
            header('Location: success.php');
            exit;
        }else{
            print_r('Ошибка отправки формы! Попробуйте через пару минут');
        }
        
    }
}
require_once './contact.php';
