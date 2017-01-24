<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="dashboards";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/ia/">InfoArchive</a> :: <a href="/ia/capabilities.php">Capabilities</a> :: <a href="/ia/user/dashboards.php">Dashboards</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>Role Specific Dashboards</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> Role specific dashboards give InfoArchive users a graphical interface to see the most important information their role requires. </p>
</p>
<div id="panels">
<div class="row loaders">
     <a href="../templates/dashboards/what.php" class="box"><i class="material-icons">arrow_drop_down</i>What are Role specific Dashboards?</a>
     <a href="../templates/dashboards/how.php" class="box"><i class="material-icons">arrow_drop_down</i>How do Role specific Dashboards work?</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>