<?php 
include('../session.php');
$page="capabilities";
$section="products";
include('../header.php'); ?>
    <div id="pagecontent">
    <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/captiva/">Captiva Capture</a> :: <a href="/captiva/capabilities.php">Capabilities</a> </nav><!-- /#breadcrumbs  -->
            <div id="main" class="content">
                       <h2>Captiva Capture : Capabilities</h2>

            <h3 style="text-align:center;">Please select your user level</h3>
<div class="row aligncenter userlevels choices">
<a href="#" class="quarter box icon" data-tab="user_capabilities"><img src="/img/icon_user.png" alt="users icon" />For Users<i class="material-icons">arrow_drop_down</i></a>
<a href="#" class="quarter box icon" data-tab="it_capabilities"><img src="/img/icon_it.png" alt="it icon" />For IT<i class="material-icons">arrow_drop_down</i></a>
</div><!--  /.row -->

<div class="productlist choices">
            
        <div class="row product-grid aligncenter hidden" id="user_capabilities">


<a href="document_classification.php" class="box quarter"><!--<img src="/img/icon_document_classification.png" alt="users icon" />-->Document Classification</a><!-- .box -->
<a href="user/capability1.php" class="box quarter">Highly Accurate Capture</a><!-- .box -->
<a href="user/capability2.php" class="box quarter">Automated Template Creation</a><!-- .box -->
<a href="user/capability3.php" class="box quarter">Automated Complex Data Entry</a><!-- .box -->
<a href="user/capability4.php" class="box quarter">Flexibility in Data Capture</a><!-- .box -->
<a href="user/capability5.php" class="box quarter">Accurate Data Capture for Encoding</a><!-- .box -->
<a href="user/capability6.php" class="box quarter">Searchable Legal Images</a><!-- .box -->
<a href="user/capability7.php" class="box quarter">Advanced PDF Compression</a><!-- .box -->

            </div><!-- .row -->

                    <div class="row product-grid  aligncenter hidden" id="it_capabilities">

<a href="it/itcapability1.php" class="box quarter">Deployment Options</a><!-- .box -->
<a href="it/itcapability2.php" class="box quarter">Configuration</a><!-- .box -->


            </div><!-- .row -->
</div><!--  /.productlist -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../footer.php'); ?>
  