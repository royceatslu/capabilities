<?php 
session_start();
//set the user level
if(!empty($_GET['ul'])) : $_SESSION['ul'] = $_GET['ul'];
endif;
$ul = isset($_SESSION['ul'])?$_SESSION['ul']: "";   
//set the product type
if(!empty($_GET['product'])) : $_SESSION['product'] = $_GET['product'];
$product = $_SESSION['product'];
endif;
?>