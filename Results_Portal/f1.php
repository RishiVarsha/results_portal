<?php
session_start();
if (isset($_POST['login'])) {

    $conn = new mysqli("localhost:3307:3307", "root", "", "sign_up");
    if ($conn->connect_error) {
        die("ConnectionA Failed:" . $conn->connect_error);
    } else {
        $mail = $_POST['mail'];
        $pa = $_POST['pwd'];
        $rs = mysqli_query($conn, "SELECT * FROM signup WHERE dotnet_mail='$mail'");
        if (mysqli_num_rows($rs) == 1) {
            $row = mysqli_fetch_array($rs);
            $password = $row["pwd"];
            if ($pa == $password) {
                session_start();
                $_SESSION['mail'] = $mail;
                $_SESSION['pwd'] = $pa;

                echo "<script>setTimeout(\"location.href = 'studentresult.php';\",500);</script>";
            } else {
                echo '<script> alert("Incorrect!"); </script>';
                echo "<script>setTimeout(\"location.href = 'signup.php';\",1000);</script>";

                exit;
            }
        } else {
            echo '<script> alert("Incorrect!"); </script>';
            echo "<script>setTimeout(\"location.href = 'signup.php';\",1000);</script>";

            exit;
        }
    }
}



if (isset($_POST['logint'])) {
    $conn = new mysqli("localhost:3307:3307", "root", "", "sign_up");
    if ($conn->connect_error) {
        die("Connection Failed:" . $conn->connect_error);
    } else {
        $dotnet_mail = $_POST['dotnet_mail'];
        $pa = $_POST['password'];
        $rs = mysqli_query($conn, "SELECT * FROM teachers WHERE dotnet_mail='{$dotnet_mail}'");
        if (mysqli_num_rows($rs) == 1) {
            $row = mysqli_fetch_array($rs);
            $password = $row["password"];
            if ($pa == $password) {

                $_SESSION['dotnet_mail'] = $dotnet_mail;
                $_SESSION['password'] = $pa;
                echo "<script>setTimeout(\"location.href = 'teacherpage.php';\",500);</script>";
            } else {
                echo '<script> alert("Incorrect!"); </script>';
                echo "<script>setTimeout(\"location.href = 'teacherlogin.php';\",1000);</script>";

                exit;
            }
        } else {
            echo '<script> alert("Incorrect!"); </script>';
            echo "<script>setTimeout(\"location.href = 'teacherlogin.php';\",1000);</script>";

            exit;
        }
    }
}

?>