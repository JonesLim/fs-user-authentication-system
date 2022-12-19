<?php

    session_start();

    if(isset($_SESSION['user'])) {
        //delete the user's session data
        unset($_SESSION['user']);
        // redirect user back to inde
        header('Location: /');
        exit;
    } else {
        // redirect to login page
        header('Location: /login.php');
        exit;
    }