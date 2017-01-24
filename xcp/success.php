<?php 
include('../session.php');
$page="success";
$section="products";
include('../header.php'); ?>
    <div id="pagecontent">
    <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/xcp/">xCP</a> :: <a href="/ia/capabilities.php">Success Stories</a> </nav><!-- /#breadcrumbs  -->
        <div id="main" class="content">
            <h2>xCP : Success Stories</h2>

            <!--TODO: Update Callout Here-->
            <p class="callout"> Real Customers, The Right Solutions </p>

            <div class="row loaders">
                <a href="/xcp/success/barclays.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Barclays</a><!-- .box -->
                <a href="/xcp/success/generali_hellas.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Generali Hellas</a><!-- .box -->
                <a href="/xcp/success/dr_horton.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->D.R. Horton</a><!-- .box -->
            </div><!-- /.row  --> 
            <div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../footer.php'); ?>