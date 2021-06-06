<?php
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];

$pass = md5($pass);

require_once "../mysql/config.php";

$conexiune = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if (!$conexiune) {
die('Eroare conectare la MySQL: ' . mysqli_connect_error());
}

mysqli_select_db($conexiune, DB_NAME) or die("Eroare la selectarea bazei de date " .
mysqli_error($conexiune));

$sql="select * from admin where nume = '$login' and parola = '$pass';";

$result = mysqli_query($conexiune, $sql);

$user = mysqli_fetch_array($result);


if(!isset($user) || (count($user) == 0)){
    header('Location: ../admin.php');
    mysqli_close($conexiune);
    exit();
}

setcookie('logat', 'logat', time()+3600, "/");
header('Location: ../admin.php');

    mysqli_close($conexiune);

?>