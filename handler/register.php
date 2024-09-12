<?php 
session_start();
require_once('../inc/db.php');


if(isset($_POST['submit']))
{

    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $mobile = filter_var($_POST['mobile'],FILTER_SANITIZE_STRING);
    $password = password_hash(filter_var($_POST['password'],FILTER_SANITIZE_STRING),PASSWORD_DEFAULT);

    $sql = 'INSERT INTO users(name,email,mobile,password) VALUES(?,?,?,?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$email,$mobile,$password]);

}

if ($stmt->rowCount() > 0) {

    $id = $pdo->lastInsertId();

    $_SESSION['successful_register'] = "Data Inserted Successfully";
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;

    header("Location:../index.php");

} else {

    $_SESSION['unsuccessful_register'] = "Register Error Happend";
    header("Location:../register.php");

}
