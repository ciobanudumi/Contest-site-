<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav/style.css">
</head>
<body>
<?php
        include "nav/nav.php";
    ?>
    <div class="container">
        <h1>Subiecte</h1> 
        <div class="content subiecte">
            <?php
                include "phpMysql/subiecte.php";
            ?>
        </div>
    </div>
    
</body>
</html>