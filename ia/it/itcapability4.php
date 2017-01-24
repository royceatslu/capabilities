<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="capability4";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/ia/">InfoArchive</a> :: <a href="/ia/capabilities.php">Capabilities</a> :: <a href="/ia/it/itcapability4.php">User Configuration</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>User Configuration</h2>
<!--TODO: Update Callout Here-->
<p class="callout">its never been easier to add users and group to InfoArchive User groups. Using well know technologies such as LDAP make InfoArchive increadably simple to use and configure.</p>
<div id="panels">
<div class="row loaders">
     <a href="../templates/itcapability4/what.php" class="box"><i class="material-icons">arrow_drop_down</i>What is it?</a>
     <a href="../templates/itcapability4/why.php" class="box"><i class="material-icons">arrow_drop_down</i>Why is it Important?</a>
     <a href="../templates/itcapability4/how.php" class="box"><i class="material-icons">arrow_drop_down</i>How are Customers Using it?</a>
     <a href="../templates/itcapability4/work.php" class="box"><i class="material-icons">arrow_drop_down</i>How does it Work?</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>