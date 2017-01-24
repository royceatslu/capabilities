<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="architecture";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/ax/">ApplicationXtender</a> :: <a href="/ax/capabilities.php">Capabilities</a> :: <a href="/ax/user/ax1.php">Modern architecture</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>AX: Modern Architecture</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> AX is quick to deploy and easy to administer via the web. It scales easily to thousands of users and TB of content. It is built on open standards, HTML5, and Restful services. AX requires minimal IT support and is cloud ready. </p>

<div class="row loaders">
     <a href="../templates/ax4/what.php" class="box"><i class="material-icons">arrow_drop_down</i>What is it?</a>
     <a href="../templates/ax4/why.php" class="box"><i class="material-icons">arrow_drop_down</i>Why is it important</a>
     <a href="../templates/ax4/how.php" class="box"><i class="material-icons">arrow_drop_down</i>How are Customers Using it?</a>
     <a href="../templates/ax4/work.php" class="box"><i class="material-icons">arrow_drop_down</i>How does it Work?</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>