<?php
if (isset($_POST['signup-submit'])) { //nese e ke prek butonin signup 
    require "databaza.php";
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat-password'];

    //nese nuk shenon ne ndonjeren prej textfieldsave (error handler)
    if (empty($username) || empty($email) || empty($password) || empty($repeat_password)) {
        header("Location: ../signup.php?error=emptyfields&username=" . $username . "&email=" . $email); //nese e ke shkru emailin e usernamin ama passwordin jo, kjo ti len tshkrume emailin edhe usernamin
        exit(); //qe mos me vazhdu me kod nese veq ka problem
    } else if ((!filter_var($email, FILTER_VALIDATE_EMAIL)) && (!preg_match("/^[a-zA-Z0-9]*$/", $username))) { // validon emailin dhe usernamin
        header("Location: ../signup.php?error=invalidemailusername");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //e bon validimin e emailes direkt(built in function)
        header("Location: ../signup.php?error=invalidmail&username=" . $username); //ta kthen usernamin
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) { //validimi i usernamit
        header("Location: ../signup.php?error=invalidusername&email=" . $email); //ta kthen emailin nese e ke shkru
        exit();
    } else if ($password !== $repeat_password) { //nese passwordat nuk jane te njejte
        header("Location: ../signup.php?error=passwordcheckusername=" . $username . "&email=" . $email);
        exit();
    } else {
        $sql = "SELECT uname FROM login WHERE uname=?"; //placeholder
        $stmt = mysqli_stmt_init($conn); //stmt = statement
        if (!mysqli_stmt_prepare($stmt, $sql)) { //nese fail
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            //shikojme se a eshte ky username alredy signed up
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck >= 1) {
                header("Location: ../signup.php?error=usernametaken&email=".$email);
                exit();
            } else {
                $sql = "INSERT INTO login (uname, upass, umail) VALUES (?, ?, ?)"; //?=placeholders 
                $stmt = mysqli_stmt_init($conn); //stmt = statement
                if (!mysqli_stmt_prepare($stmt, $sql)) { //nese fail
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT); //e enkodon passwordin

                    mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPwd, $email);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../signup.php");
    exit();
}
