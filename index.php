<?php
    include "./model/pdo.php";
    include "./view/header.php";
    if (isset($_GET["pg"])) {
  
   
    $pg=$_GET["pg"];
    switch ($pg) {
        case 'about':
            include "./view/about.php";
            break;
        case 'lie':
            include "./view/lie.php";
            break;
        case 'contact':
            include "./view/contact.php";
            break;
        case 'productdetails':
            include "./view/productdetails.php";
            break;
        case 'product':
            include "./view/product.php";
            break;
        case "shoppingcart":
            include "./view/shoppingcart.php";
            break;
        case "pay":
            include "./view/pay.php";
            break;
        case "dangnhap":
            include "./view/dangnhap.php";
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