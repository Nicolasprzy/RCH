<?php
    include 'functions/main-functions.php';

    $pages = scandir('pages/');
    if(isset($_GET['page']) && !empty($_GET['page'])){
        if(in_array($_GET['page'].'.php',$pages)){
            $page = $_GET['page'];
        }else{
            $page = "error";
        }
    }else{
        $page = "accueil";
    }

    $pages_functions = scandir('functions/');
    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>

<!DOCTYPE html>
<html>
<head>
        <title>Running club d'hondschoote</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-----------Font + icons----------->
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/584183bbbb.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <!-----------Font + icons fin----------->

        <!-----------CSS----------->
        <link rel="stylesheet" href=" 
        <?php
        
        //idem qu'au dessus mais avec les fonctions
        
    $pages_css = scandir('css/');
    if(in_array($page.'.style.css' ,$pages_css)){
        echo "css/".$page.".style.css";

    }?>"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
        <link rel="stylesheet" href="css/mystyles.css">
        
    
  </head>
  <body>
      <?php include "body/topbar.php"; ?>
      
  <?php
        include 'pages/'.$page.'.php';
  ?>
        
        <!-----------Java----------->
  </body>
</html>