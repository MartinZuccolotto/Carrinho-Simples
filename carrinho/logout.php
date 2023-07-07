<?php    
    if(!empty($_SESSION)){
        session_destroy();
    }else{
        session_start();
        $_SESSION = [];
    }
    unset($_SESSION['produtos']);
    $_SESSION['produtos'] = array();
    print_r($_SESSION);
?>