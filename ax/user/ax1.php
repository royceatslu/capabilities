<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="user_experience";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/ax/">ApplicationXtender</a> :: <a href="/ax/capabilities.php">Capabilities</a> :: <a href="/ax/user/ax1.php">User Experience</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>AX: User Experience</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> AX is intuitive and easy to learn for end-users. It works with any browser, no plug-ins are required. Content can be accessed from anywhere on any device.  </p>

<div class="row loaders">
     <a href="../templates/ax1/why.php" class="box"><i class="material-icons">arrow_drop_down</i>Why is it important?</a>
     <a href="../templates/ax1/work.php" class="box"><i class="material-icons">arrow_drop_down</i>How does it Work?</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>