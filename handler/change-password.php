<?php 

include '../inc/db.php';
session_start();

if(isset($_POST['submit'])){
    $id = $_SESSION['id'];

    $stmt = $pdo->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->execute([$id]);

    $oldPassword = filter_var($_POST['oldPassword'],FILTER_SANITIZE_STRING);

    $data = $stmt->fetchObject();

    if($data){
        $check = password_verify($oldPassword, $data->password);

        if($check){
            $newPassword = password_hash(filter_var($_POST['newPassword'],FILTER_SANITIZE_STRING),PASSWORD_DEFAULT);
            
            $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id =?");
            $stmt->execute([$newPassword, $id]);

            $_SESSION['successful_change'] = "Password Changed Successfully";
            header("Location:../index.php");
        }else{
            $_SESSION["unsuccessful_change"] = "Password Change Error";
            header("Location:../change-password.php");
        }
    }


}