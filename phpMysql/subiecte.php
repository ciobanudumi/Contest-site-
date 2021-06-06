<?php
require_once "./mysql/config.php";
$conexiune = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
if (!$conexiune) {
die('Eroare conectare la MySQL: ' . mysqli_connect_error());
}
mysqli_select_db($conexiune, DB_NAME) or die("Eroare la selectarea bazei de date " .
mysqli_error($conexiune));


$sql="SELECT * FROM `subiecte`";

$result = mysqli_query($conexiune, $sql);

echo"<BR>";

if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_array($result)) {
        $nume = htmlspecialchars($row['nume']);
        $mesaj = ($row['mesaj']);
        $punctaj = htmlspecialchars($row['punctaj']);
        echo"<div class = 'sub'>";
            echo"<h2>$nume</h2>";
            echo"<p>$mesaj</p>";
            echo"<p class='punctaj'>Punctaj: $punctaj</p>";
        echo"</div>";
    }
    } else {
    print "Nu exista niciun mesaj!";
    }
    mysqli_close($conexiune);
?>