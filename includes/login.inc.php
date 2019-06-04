<?php

if(isset($_POST['login-submit'])){
    
    require 'databaza.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){//nese nuk e ke shkru emailen ose passwordin
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM login WHERE uname=? OR umail=?;";//me mujt me bo login me email ose username
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../login.php?error=emptyfields");
            exit();
        }
        else{
        mysqli_stmt_bind_param($stmt, "ss"/*2 strings*/, $email, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            $pwdCheck = password_verify($password, $row['password']);
            if($pwdCheck == false){
                header("Location: ../login.php?error=wrongpassword");
                exit();
            }
            else if($pwdCheck == true){
                session_start();
                $SESSION['userId'] = $row['idUsers'];//qito sbojn se sdi qysh i kena emrat ndatabaze
                $SESSION['userUid'] = $row['uidUsers'];

                header("Location: ../login.php?login=success");
                exit();
            }
            else{
                header("Location: ../login.php?error=smthhappened");
                exit();
            }
        }
        else{
            header("Location: ../login.php?error=nouser");
            exit();
        }
        }
    }
    // $email = $_POST['email'];
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // $repeat_password = $_POST['repeat-password'];

}
else{
    header("Location: ../login.php");
    exit();
}