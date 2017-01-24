<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="architecture";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/">xCP</a> :: <a href="../whats_new.php">what's new</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>xCP 2.3 New Features: Platform</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> Leverage Power of Platform </p>

<div class="row loaders">
     <a href="../new/platform/cabinet.php" class="box"><i class="material-icons">arrow_drop_down</i>Cabinet support as a first class citizen</a>
     <a href="../new/platform/alias.php" class="box"><i class="material-icons">arrow_drop_down</i>Alias Set Support</a>
     <a href="../new/platform/perm_set.php" class="box"><i class="material-icons">arrow_drop_down</i>Full support for Permission Set</a>
     <a href="../new/platform/lifecycle.php" class="box"><i class="material-icons">arrow_drop_down</i>Runtime support for Lifecycles</a>
     <a href="../new/platform/migration.php" class="box"><i class="material-icons">arrow_drop_down</i>Migration Framework</a>
     <a href="../new/platform/sysobject.php" class="box"><i class="material-icons">arrow_drop_down</i>Adopt dm_sysobject</a>
     <a href="../new/platform/content_transfer.php" class="box"><i class="material-icons">arrow_drop_down</i>Support for new Content Transfer</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>