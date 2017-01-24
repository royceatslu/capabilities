<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>EMC Products</title>
<script src="https://use.typekit.net/dpz3pmt.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,700,400,200italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/style.css">
<script src="/js/jquery-2.1.0.min.js"></script>
<script src="/js/script.js"></script>
</head>

<body <?php if(isset($bgimg)) { echo 'style="background-image:url(/img/photos/' . $bgimg . ');"'; } ?>class="<?php echo $section; ?>">
<a href="#" class="scroll"><i class="material-icons">arrow_drop_up</i></a>
    <header id="top">
        <div class="row middle">
            <h1 id="logo">EMC
            </h1>
                <nav id="primary">
                    <ul>
                        <li><a href="/products.php?section=products" <?php if(isset($section) && $section == "products") { echo 'class="current_section"'; } ?>>Products</a>
                        </li>
                        <li><a href="/about.php?section=about" <?php if(isset($section) && $section == "about") { echo 'class="current_section"'; } ?>>About Us</a>
                        </li>
                        <li><a href="/contact.php?section=contact" <?php if(isset($section) && $section == "contact") { echo 'class="current_section"'; } ?>>Contact</a>
                        </li>
                    </ul>
                </nav>
        </div>
        <!--  /.row -->
    </header>
    <?php 
    // include('breadcrumbs.php'); 
    ?>