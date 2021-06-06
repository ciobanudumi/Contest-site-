<?php
require_once "./mysql/config.php";

$conexiune = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if (!$conexiune) {
die('Eroare conectare la MySQL: ' . mysqli_connect_error());
}

mysqli_select_db($conexiune, DB_NAME) or die("Eroare la selectarea bazei de date " .
mysqli_error($conexiune));


$sql="SELECT * FROM `anunturi`";


$result = mysqli_query($conexiune, $sql);

echo"<BR>";

if (mysqli_num_rows($result)) {
    
    while ($row = mysqli_fetch_array($result)) {
    $titlu = htmlspecialchars($row['titlu']);
    $mesaj = htmlspecialchars($row['mesaj']);
    $data = htmlspecialchars($row['data']);
    echo"<div class= 'anunt'>";
    echo "<h2>$titlu</h2>";
    echo "<p>$mesaj</p>";
    echo "<p class='data'>Data publicarii: $data</p>";
    echo"</div>";
    if( (!isset($_COOKIE['logat']) or ($_COOKIE['logat'] == '') )){
        echo "<a class='button' href='>";
    }
}
} else {
    print "Nu exista niciun mesaj!";
    }
    mysqli_close($conexiune);
?>