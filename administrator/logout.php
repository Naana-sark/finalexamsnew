<?php
    session_destroy();
    unset($_SESSION['Username']);
    header("location: login.php");
    ?>