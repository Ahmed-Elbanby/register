<?php 
session_start();
require_once('../inc/db.php');


if(isset($_POST['submit']))
{

    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);

    $sql = 'SELECT * FROM users WHERE email=?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    $data = $stmt->fetchObject();

    if($data){

        $check = password_verify($password,$data->password);
        if($check){

            $_SESSION['successful_login'] = "Successful Login";
            $_SESSION['id'] = $data->id;
            $_SESSION['name'] = $data->name;
            $_SESSION['email'] = $data->email;
            $_SESSION['mobile'] = $data->mobile;

            header('Location:../index.php');
            die();

        }else{
            $_SESSION['unsuccessful_login'] = "Password is Incorrect";

            header('Location:../login.php');
            die();
        }

    }else{
        $_SESSION['unfound_login'] = "Email is NOT Found";

        header('Location:../login.php');
        die();
    }

}


