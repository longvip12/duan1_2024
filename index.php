<?php
    include "./view/header.php";
    if (isset($_GET["pg"])) {
  
   
    $pg=$_GET["pg"];
    switch ($pg) {
        case 'about':
            include "./view/about.php";
            break;
        
        default:
            include "./view/home.php";
            break;
    } 
    }else{
        include "./view/home.php";
    }
    include "./view/footer.php";
?>