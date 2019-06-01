<!-- perafersisht lidhja me databaze edhe krijimi i loginit -->
<?php 

    $host = "localhost";
    $user = "root";
    $password = "Spectre007";
    $db = "php";

    $conn = mysqli_connect($host, $user, $password, $db);
//     mysql_select_db($db);

//     if(isset($_POST['username'])){
        
//         $uname = $_POST['username'];
//         $password = $_POST['password'];

//         $sql = "select * from loginform where user='" . $uname . "'AND Pass='" . $password . "'limit 1";
        
//         $result = mysql_query($sql);

//         if(mysql_num_rows($result) == 1){
//             echo "You Have Succesfully Logged In";
//             exit();
//         }
//         else{
//             echo "You Have Entered Incorrect Password";
//             exit();
//         }
//     }
?>

 <!-- qka duhet HTML me pas...

 <body>
     <div>
//         <form action="login.php" method="POST">
//             <div>
//                 <input type="text" name="username" placeholder="Enter your username">
//             </div>
//             <div>
//                 <input type="password" name="password" placeholder="Enter your password">
//             </div>
//             <input type="submit" name="submit" value="LOGIN">
//         </form>
//     </div>
// </body> -->
