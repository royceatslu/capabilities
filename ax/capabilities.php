<?php 
include('../session.php');
$page="capabilities";
$section="products";
include('../header.php'); ?>
    <div id="pagecontent">
    <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/ax/">ApplicationXtender</a> :: <a href="/ax/capabilities.php">Capabilities</a> </nav><!-- /#breadcrumbs  -->
            <div id="main" class="content">
                       <h2>ApplicationXtender: Capabilities</h2>

            <h3 style="text-align:center;">Please select your user level</h3>
<div class="row aligncenter userlevels choices">
<a href="#" class="quarter box icon" data-tab="user_capabilities"><img src="/img/icon_user.png" alt="users icon" />For Users<i class="material-icons">arrow_drop_down</i></a>
<a href="#" class="quarter box icon" data-tab="it_capabilities"><img src="/img/icon_it.png" alt="it icon" />For IT<i class="material-icons">arrow_drop_down</i></a>
</div><!--  /.row -->

<div class="productlist choices">
            <h3>Select a feature of AX</h3>
        <div class="row product-grid aligncenter hidden" id="user_capabilities">

<!-- TODO: add all buttons for user capabilities here-->
<a href="/ax/user/ax1.php" class="box quarter"><!--<img src="/img/icon_success.png" alt="users icon" />-->User Experience</a><!-- .box -->
<a href="/ax/user/ax2.php" class="box quarter">Business Application Integration</a><!-- .box -->
<a href="/ax/user/ax3.php" class="box quarter">Process Automation Workflow</a><!-- .box -->
<a href="/ax/user/ax5.php" class="box quarter">Partner Solutions</a><!-- .box -->

            </div><!-- .row -->

                    <div class="row product-grid  aligncenter hidden" id="it_capabilities">
<!-- add all buttons for it capabilities here-->
<a href="/ax/it/ax4.php" class="box quarter">Modern Architecture</a><!-- .box -->
<a href="/ax/it/ax6.php" class="box quarter">Easy to Deploy</a><!-- .box -->


            </div><!-- .row -->
</div><!--  /.productlist -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../footer.php'); ?>
  