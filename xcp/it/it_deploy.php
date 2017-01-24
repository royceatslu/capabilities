<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="architecture";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/xCP/">xCP</a> :: <a href="/xcp/capabilities.php">Capabilities</a> :: <a href="/xcp/it/it_deployment.php">IT deployment</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>xCP: Modern Architecture</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> deploying modern looking porpuse-built, intuitive, and configurable applications with Documentum xCP platform. </p>

<div class="row loaders">
     <a href="../templates/it/deploy/capability1/what.php" class="box quarter"><i class="material-icons">arrow_drop_down</i>REST Services</a>
     <a href="../templates/it/deploy/capability2.php" class="box"><i class="material-icons">arrow_drop_down</i>Configurable Validations</a>
     <a href="../templates/deploy/it/capability3.php" class="box"><i class="material-icons">arrow_drop_down</i>Validation Framework</a>
     <a href="../templates/deploy/it/capability4.php" class="box"><i class="material-icons">arrow_drop_down</i>Business Alerts</a>
</div><!-- /.row  --> 
<div class="row loaders">
     <a href="../templates/deploy/it/capability5.php" class="box"><i class="material-icons">arrow_drop_down</i>Runtime Libraries</a>
     <a href="../templates/deploy/it/capability6.php" class="box"><i class="material-icons">arrow_drop_down</i>Incremental Deployment</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>