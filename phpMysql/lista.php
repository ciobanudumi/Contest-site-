<?php
require_once "./mysql/config.php";

$conexiune = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

if (!$conexiune) {
die('Eroare conectare la MySQL: ' . mysqli_connect_error());
}

mysqli_select_db($conexiune, DB_NAME) or die("Eroare la selectarea bazei de date " .
mysqli_error($conexiune));


$sql="SELECT * FROM `participanti`";

$result = mysqli_query($conexiune, $sql);

echo"<BR><BR><BR>";

echo "<table>";
if (mysqli_num_rows($result)) {
    echo "<tr>";
    echo "<th>id</th><th>Nume</th><th>Prenume</th><th>Nickname</th><th>Data Inregistrare</th>";
    echo "</tr>";
    echo "<tr>";
    while ($row = mysqli_fetch_array($result)) {
    $id = htmlspecialchars($row['id']);
    $nume = htmlspecialchars($row['nume']);
    $prenume = htmlspecialchars($row['prenume']);
    $nickname = htmlspecialchars($row['nikname']);
    $data = $row['data_inregistratii'];
    echo "<td>$id</td><td>$nume</td><td>$prenume</td><td>$nickname</td><td>$data</td>";
    echo "</tr>";
    }
    } else {
    print "Nu exista niciun mesaj!";
    }
    echo "</table>";
    mysqli_close($conexiune);
?>