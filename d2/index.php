<?php 
include('../session.php');
$page="home";
$section="products";
include('../header.php'); ?>
<div id="pagecontent">
 <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/ia/">D2</a></nav><!-- /#breadcrumbs  -->
            <div id="main" class="content">
             <h2 >D2</h2>
<p>D2 message here.</p>
        <div class="row" id="subsections">
<a href="d2/what_it_is.php" class="box icon"><img src="/img/icon_problems.png" alt="Problems we solve icon" />What is D2?</a><!-- .box -->
<a href="d2/benefits.php" class="box icon"><img src="/img/icon_benefits.png" alt="Benefits" />Benefits</a><!-- .box -->
<a href="d2/d2capabilities.php" class="box icon"><img src="/img/icon_capabilities.png" alt="Capabilities" />Capabilities</a><!-- .box -->
<a href="d2/success.php" class="box icon"><img src="/img/icon_success.png" alt="success" />Success stories</a><!-- .box -->
            </div><!-- .row -->


        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../footer.php'); ?>