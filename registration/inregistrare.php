<?php
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$nickname = $_POST['nickname'];


require_once "../mysql/config.php";
$conexiune = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
if (!$conexiune) {
die('Eroare conectare la MySQL: ' . mysqli_connect_error());
}
mysqli_select_db($conexiune, DB_NAME) or die("Eroare la selectarea bazei de date " . mysqli_error($conexiune));

$date = date("Y-m-d");
$sql=sprintf("insert into participanti(nume, prenume, nikname, data_inregistratii) values('%s','%s','%s','%s');",
    mysqli_real_escape_string($conexiune, $nume),
    mysqli_real_escape_string($conexiune, $prenume),
    mysqli_real_escape_string($conexiune, $nickname),
    mysqli_real_escape_string($conexiune, $date));
print_r($date);

if (!mysqli_query($conexiune, $sql)) {
    die('Error: ' . mysqli_error($conexiune));
    }

mysqli_close($conexiune);
header('Location: ../participanti.php');

?>