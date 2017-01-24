<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="architecture";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/xCP/">xCP</a> :: <a href="/xcp/capabilities.php">Capabilities</a> :: <a href="/xcp/it/it_design.php">IT design</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>xCP: Modern Architecture</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> Designing applications easily, with drag and drop and configuring out-of-the-box widgets. </p>

<div class="row loaders">
     <a href="../templates/it/design/capability1/what.php" class="box quarter"><i class="material-icons">arrow_drop_down</i>Components Reusability</a>
     <a href="../templates/it/design/capability2.php" class="box"><i class="material-icons">arrow_drop_down</i>UI Events</a>
     <a href="../templates/design/it/capability3.php" class="box"><i class="material-icons">arrow_drop_down</i>Composable Action Flow</a>
     <a href="../templates/design/it/capability4.php" class="box"><i class="material-icons">arrow_drop_down</i>Dynamic Pages</a>
</div><!-- /.row  --> 
<div class="row loaders">
     <a href="../templates/design/it/capability5.php" class="box"><i class="material-icons">arrow_drop_down</i>Localization</a>
     <a href="../templates/design/it/capability6.php" class="box"><i class="material-icons">arrow_drop_down</i>Custom Import</a>
     <a href="../templates/design/it/capability7.php" class="box"><i class="material-icons">arrow_drop_down</i>Custom Create Folders</a>
     <a href="../templates/design/it/capability8.php" class="box"><i class="material-icons">arrow_drop_down</i>Drag & Drop</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>