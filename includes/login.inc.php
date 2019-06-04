<?php

if (isset($_POST['login-submit'])) {

    require 'databaza.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) { //nese nuk e ke shkru emailen ose passwordin
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM login WHERE uname=? OR umail=?;"; //me mujt me bo login me email ose username
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=emptyfields");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                // $pwdCheck = password_verify($password, $row['upass']);
                if ($password !== $row['upass']) {
                    
                   
                    header("Location: ../login.php?error=wrongpassword".':'.$hashedPwd.':'.$row['upass']);
                    exit();
                } else if ($password == $row['upass']) {
                    session_start();
                    $SESSION['userId'] = $row['uid']; 
                    $SESSION['userUid'] = $row['uname'];

                    header("Location: ../login.php?login=success");
                    exit();
                } else {
                    header("Location: ../login.php?error=smthhappened");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
