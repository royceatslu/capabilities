<!-- TODO: Udate this-->
<?php
include('../../session.php');  
$page="capability5";
$section="products";
include('../../header.php'); ?>
<div id="pagecontent">
<!-- TODO: Update breadcrums here.-->
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/ia/">InfoArchive</a> :: <a href="/ia/capabilities.php">Capabilities</a> :: <a href="/ia/user/capability5.php">User Roles</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <!--TODO: Capabilty Name Here-->
           <h2>Individual User Roles</h2>
<!--TODO: Update Callout Here-->
<p class="callout"> InfoArchive now has the ability to assign users to specific user roles with specific job functions to better guarentee compliance and security. </p>
</p>
<div id="panels">
<div class="row loaders">
     <a href="../templates/capability5/dev.php" class="box"><i class="material-icons">arrow_drop_down</i>Developer</a>
     <a href="../templates/capability5/retention.php" class="box"><i class="material-icons">arrow_drop_down</i>Retention Manager</a>
     <a href="../templates/capability5/admin.php" class="box"><i class="material-icons">arrow_drop_down</i>Administrator</a>
     <a href="../templates/capability5/bus.php" class="box"><i class="material-icons">arrow_drop_down</i>Business User</a>
</div><!-- /.row  --> 
<div id="layouts"></div><!-- /#layouts  -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../../footer.php'); ?>