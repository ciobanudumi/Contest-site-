<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proiect</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav/style.css">

</head>
<body>    
    <?php
        include "nav/nav.php";
    ?>
    <div class="container inreg">
       <h1>Inregistrare</h1>
       <div class="inregistrare"> 
           <form action= "registration/inregistrare.php" name="formaInscriere" method="POST" onsubmit="return validezaForma();">
                <p>Nume      <input type="text"  name="nume" id="nume" placeholder="Ciobanu" /></p>
                <p>Prenume  <input type="text" name="prenume" id="prenume" placeholder="Dumitru" /></p>
                <p>Nickname <input type="text" name="nickname" id="nickname" placeholder="CiobanuD123" /></p><br>
                <p>
                    <input class="button btn-form" type="submit" value="Inregistrare" />
                    <input class="button btn-form" type="reset" value="Reset" />
                </p>
           </form>
       </div>

    </div>
    <script src="registration/validation.js"></script>
</body>
</html>