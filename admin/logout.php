<?php
    setcookie('logat', 'logat', time()-3600,"/");
    header('Location: ../admin.php');
?>