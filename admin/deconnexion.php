<?php
session_start();

if (isset($_SESSION['santoryou'])){

    $_SESSION['santoryou'] = array();

    session_destroy();

    header("Location: ../index.php");
}

?>