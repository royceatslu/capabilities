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
           <h2>xCP 2.3 New Features: Development</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> Single tool to configure and build purpose-built applicatins </p>

<div class="row loaders">
     <a href="../new/development/extjs.php" class="box"><i class="material-icons">arrow_drop_down</i>Support for ExtJS</a>
     <a href="../new/development/layout.php" class="box"><i class="material-icons">arrow_drop_down</i>New UI Layouts</a>
     <a href="../new/development/widgets.php" class="box"><i class="material-icons">arrow_drop_down</i>New in Widgets</a>
     <a href="../new/development/result_list.php" class="box"><i class="material-icons">arrow_drop_down</i>Enhanced Result List</a>
     <a href="../new/development/functions.php" class="box"><i class="material-icons">arrow_drop_down</i>Additional OOTB Functions & UI Actions</a>
     <a href="../new/development/query.php" class="box"><i class="material-icons">arrow_drop_down</i>DQL Query with Preview</a>
     <a href="../new/development/preview.php" class="box"><i class="material-icons">arrow_drop_down</i>Development-time Queries Preview</a>
     <a href="../new/development/java_ext.php" class="box"><i class="material-icons">arrow_drop_down</i>Support for Java Extensions</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>