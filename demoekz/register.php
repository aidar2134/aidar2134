<?php
    require_once("db.php");
$login = $_POST['login'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
if (empty($login) || empty($password) || empty($full_name) || empty($email) || empty($phone))
{
    echo "Заполните все поля";
} 
    else{
    $sql = "INSERT INTO User (login,password,email,full_name,phone) VALUES ('$login','$password','$email','$full_name','$phone')";
    if ($conn -> query($sql) === TRUE){
        echo "Успешная регистрация";
    }
    else {
        echo "Ошибка" . $conn->error;
    }
}