<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="capability1";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/captiva/">Captiva</a> :: <a href="/captiva/capabilities.php">Capabilities</a> :: <a href="/captiva/user/capability4.php">Highly Accurate Capture</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>Highly Accurate Capture</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> 
    <li>Your organization can rapidly and efficiently capture business-critical information from incoming documents with a high degree of accuracy.</li>
    <li>The advantages: accelerated business processes, reduced manual effort, better-informed decision-making</li>
 </p>

<div id="panels">
<div class="row loaders">
     <a href="../templates/capability1/what.php" class="box"><i class="material-icons">arrow_drop_down</i>What is it?</a>
     <a href="../templates/capability1/why.php" class="box"><i class="material-icons">arrow_drop_down</i>Why is it Important?</a>
     <a href="../templates/capability1/how.php" class="box"><i class="material-icons">arrow_drop_down</i>How are Customers Using it?</a>
     <a href="../templates/capability1/work.php" class="box"><i class="material-icons">arrow_drop_down</i>How does it Work?</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>