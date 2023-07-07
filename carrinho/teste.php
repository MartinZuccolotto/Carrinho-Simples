<?php
    if(empty($_SESSION)){
        session_start();
    }
    
    if(!$_SESSION['produtos']){
        $_SESSION['produtos'] = array();
    }

    if(!empty($_POST['id'])){      
        $id = $_POST['id'];  
        $descricao = $_POST['desc'];
        
        $produto =array();
        
        array_push($produto,$id,$descricao);

        array_push($_SESSION['produtos'],$produto);
    }
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
?>