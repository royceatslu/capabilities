<?php 
include('../session.php');
$page="capabilities";
$section="products";
include('../header.php'); ?>
    <div id="pagecontent">
     <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/d2/">D2</a> :: <a href="/d2/capabilities.php">Capabilities</a> </nav><!-- /#breadcrumbs  -->
            <div id="main" class="content">
                        <h2>D2 : Capabilities</h2>

            <h3 style="text-align:center;">Please select your user level</h3>
<div class="row aligncenter userlevels choices">
<a href="#" class="quarter box icon" data-tab="user_capabilities"><img src="/img/icon_user.png" alt="users icon" />For Users<i class="material-icons">arrow_drop_down</i></a>
<a href="#" class="quarter box icon" data-tab="it_capabilities"><img src="/img/icon_it.png" alt="it icon" />For IT<i class="material-icons">arrow_drop_down</i></a>
</div><!--  /.row -->

<div class="productlist choices">
            <h3>Next, choose a product</h3>
        <div class="row product-grid aligncenter hidden" id="user_capabilities">


<a href="capability1.php" class="box quarter"><img src="/img/icon_question.png" alt="question icon" />Capability1</a><!-- .box -->
<a href="enriched_administrator_and_user_experience.php" class="box quarter"><img src="/img/icon_question.png" alt="question icon" />Capability2</a><!-- .box -->
<a href="in-place_compliance_features.php" class="box quarter"><img src="/img/icon_question.png" alt="question icon" />Capability3</a><!-- .box -->
<a href="extensibility.php" class="box quarter"><img src="/img/icon_question.png" alt="question icon" />Capability4</a><!-- .box -->

            </div><!-- .row -->

                    <div class="row product-grid  aligncenter hidden" id="it_capabilities">

 IT CAPABILITIES LIST 

            </div><!-- .row -->
</div><!--  /.productlist -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../footer.php'); ?>
  


