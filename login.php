<?php 

    session_start();

    if (isset($_POST['username'])) {
        // connection
        include('connection.php');
        // รับค่า User & Password
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        // query
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];

            if ($_SESSION['userlevel'] == 'a') { // ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                header("Location: admin_page.php");
            } 

            if ($_SESSION['userlevel'] == 'm') { // ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                header("Location: user_page.php");
            }

        } else {
            echo "<script>";
                echo "alert(' User หรือ Password ไม่ถูกต้อง ');";
            echo "</script>";
        }
    } else {
        header("location: index.php"); // user & password incorrect back to login again
    }

?>