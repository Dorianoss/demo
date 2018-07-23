<?php
session_start();

$host="demo.local";
$user="root";
$pass="uC0p0H8123_"; //установленный вами пароль
$db_name="demo_database";
$link=mysqli_connect($host,$user,$pass,$db_name);
//mysqli_select_db($db_name,$link);
//Если переменная Name передана
if (isset($_POST["inputEmail"])) {
    //Вставляем данные, подставляя их в запрос
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];
    $result = mysqli_query($link, "SELECT password FROM `users` WHERE email = '$email'");
    if (mysqli_num_rows($result) > 0)
        switch ($_POST["inputType"]) {
            case "registration" :
                header("Location: http://demo.local/register.php?message=fail");
                break;
            case "login" :
                $result = mysqli_query($link, "SELECT password FROM `users` WHERE email = '$email' AND password = '$password'");
                if (mysqli_num_rows($result) > 0) {
                    $_SESSION['email'] = $email;
                    header("Location: profile.php");
                }
                else
                {
                    header("Location: http://demo.local/login.php?message=fail1");
                }
                break;
                }
    else {
        switch ($_POST["inputType"]) {
            case "registration" :
                $sql = mysqli_query($link, "INSERT INTO `users` (`email`, `password`) 
                        VALUES ('" . $_POST['inputEmail'] . "','" . $_POST['inputPassword'] . "')");
                //Если вставка прошла успешно
                $_SESSION['email'] = $email;
                header("Location: regok.php");
                break;
            case "login" :
                header("Location: http://demo.local/login.php?message=fail2");
                break;
        }
    }
}
else {
    header("Location: http://demo.local/home.php?message=fail3");
}