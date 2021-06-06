<?php
require_once "./mysql/config.php";

$conexiune = mysqli_connect(DB_HOST, DB_USER, DB_PASS);
if (!$conexiune) {
die('Eroare conectare la MySQL: ' . mysqli_connect_error());
}

mysqli_select_db($conexiune, DB_NAME) or die("Eroare la selectarea bazei de date " .
mysqli_error($conexiune));


$sql="SELECT participanti.id, participanti.nume, participanti.prenume, subiecte.nume as numeSubiect , rezultate.punctaj FROM `subiecte`,`participanti`,`rezultate` where(
	participanti.id = rezultate.id_participant AND
    subiecte.id = rezultate.id_subiect
)";

$result = mysqli_query($conexiune, $sql);

echo"<BR>";

$r = array(); //rezultat

if (mysqli_num_rows($result)) {
    
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];

        $nume = htmlspecialchars($row['nume']);
        $prenume = htmlspecialchars($row['prenume']);
        $numeSubiect = htmlspecialchars($row['numeSubiect']);
        $punctaj = htmlspecialchars($row['punctaj']);

        if(!isset($r[$id]['nume'])){
            $r[$id]['nume'] = $nume;
        }
        if(!isset($r[$id]['prenume'])){
            $r[$id]['prenume'] = $prenume;
        }
        $r[$id]['subiecte'][$numeSubiect]=$punctaj;

    }

    foreach($r as $participant){
        echo "<p>". $participant['nume']." ".$participant['prenume']."<p>";
        echo "<table>";
        $total = 0;
        foreach($participant['subiecte'] as $key=>$value){
            echo "<li>".$key." : ". $value."</li>";
            $total+=$value;
        }
        echo "<li>Total $total</li>";
        echo "</ul>";
    }

    } else {
    print "Nu exista niciun rezultat!";
    }

    
    mysqli_close($conexiune);
?>