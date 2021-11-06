<?php
    session_start();
    session_destroy();//borra la session.

    header('Location:index.php');
?>