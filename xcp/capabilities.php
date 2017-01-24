<?php 
include('../session.php');
$page="capabilities";
$section="products";
include('../header.php'); ?>
    <div id="pagecontent">
     <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/xcp/">xCP</a> :: <a href="/ia/capabilities.php">Capabilities</a> </nav><!-- /#breadcrumbs  -->
            <div id="main" class="content">
                        <h2>xCP : Capabilities</h2>

            <h3 style="text-align:center;">Please select your user level</h3>
<div class="row aligncenter userlevels choices">
<a href="#" class="quarter box icon" data-tab="user_capabilities"><img src="/img/icon_user.png" alt="users icon" />For Users<i class="material-icons">arrow_drop_down</i></a>
<a href="#" class="quarter box icon" data-tab="it_capabilities"><img src="/img/icon_it.png" alt="it icon" />For IT<i class="material-icons">arrow_drop_down</i></a>
</div><!--  /.row -->

<div class="productlist choices">
    <div class="row product-grid aligncenter hidden" id="user_capabilities">

        
        
        <!-- add all buttons for it capabilities here-->
        <a href="/xcp/user/user_easy.php" class="box quarter">Ease of Use</a><!-- .box -->
        <a href="/xcp/user/user_rolebased.php" class="box quarter">Role-Based Interface</a><!-- .box -->
        <a href="/xcp/user/user_collaboration.php" class="box quarter">Colaboration</a><!-- .box -->
        <a href="/xcp/user/user_visibility.php" class="box quarter">Visibility & Tracking</a><!-- .box -->
        <a href="/xcp/user/user_discovery.php" class="box quarter">Information Discovery</a><!-- .box -->
        <a href="/xcp/user/user_validation.php" class="box quarter">Data Validation</a><!-- .box -->
        <a href="/xcp/user/user_Integration.php" class="box quarter">integration</a><!-- .box -->

    </div><!-- .row -->

    <div class="row product-grid  aligncenter hidden" id="it_capabilities">

        <!-- add all buttons for it capabilities here-->
        <a href="/xcp/it/it_design.php" class="box quarter">Application Design</a><!-- .box -->
        <a href="/xcp/it/it_development.php" class="box quarter">Application Development</a><!-- .box -->
        <a href="/xcp/it/it_deploy.php" class="box quarter">Application Deployment</a><!-- .box -->
        <a href="/xcp/it/it_integrate.php" class="box quarter">Systems Integration</a><!-- .box -->
    </div><!-- .row -->
</div><!--  /.productlist -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../footer.php'); ?>
  


