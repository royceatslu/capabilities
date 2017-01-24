<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="capability4";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/ia/">InfoArchive</a> :: <a href="/ia/capabilities.php">Capabilities</a> :: <a href="/ia/user/capability6.php">SAP Decommissioning</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>SAP Connectors Overview</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> 

EMC InfoArchive for SAP solution has use case specific components that are designed
both for active archiving of Production SAP systems and decommissioning of legacy
SAP systems, managing SAP data through the application lifecycle.

</p>

<div id="panels">
<div class="row loaders">
     <a href="../templates/capability6/EPI.php" class="box"><i class="material-icons">arrow_drop_down</i>EPI-Use Labs Object Extractor</a>
     <a href="../templates/capability6/PBS.php" class="box"><i class="material-icons">arrow_drop_down</i>PBS Connector</a>
     <a href="../templates/capability6/IA.php" class="box"><i class="material-icons">arrow_drop_down</i>EMC InfoArchvie for SAP Connector</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>