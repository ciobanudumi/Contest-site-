<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav/style.css">
</head>
<body>
    <?php
        include "nav/nav.php";
    ?>
    <div class="container ">        
       <h1>Admin</h1>
       <div class="inregistrare"> 
           <?php
                if( (!isset($_COOKIE['logat']) or ($_COOKIE['logat'] == '') )):
            ?>
            <form action= "admin/validateAdmin.php"  method="POST">
                <p>Login   <input type="text"  name="login" id="login" placeholder="login" /></p>
                <p>Password<input type="password" name="pass" id="pass" placeholder="password" /></p>
                
                <p>
                    <input class="button btn-form" type="submit" value="Autentificare" />
                    <input class="button btn-form" type="reset" value="Reset" />
                </p>
           </form>
            <?php else:?>
                    <h2>Adminul este logot</h2>
                    <p><a class='button' href='admin/logout.php'>Logout</a></p>
            <?php endif;?>
            
       </div>

    </div>
    
</body>
</html>