<?php 
include('../session.php');
$page="capabilities";
$section="products";
include('../header.php'); ?>
    <div id="pagecontent">
     <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/ia/">InfoArchive</a> :: <a href="/ia/capabilities.php">Capabilities</a> </nav><!-- /#breadcrumbs  -->
            <div id="main" class="content">
                        <h2>InfoArchive : Capabilities</h2>

            <h3 style="text-align:center;">Please select your user level</h3>
<div class="row aligncenter userlevels choices">
<a href="#" class="quarter box icon" data-tab="user_capabilities"><img src="/img/icon_user.png" alt="users icon" />For Users<i class="material-icons">arrow_drop_down</i></a>
<a href="#" class="quarter box icon" data-tab="it_capabilities"><img src="/img/icon_it.png" alt="it icon" />For IT<i class="material-icons">arrow_drop_down</i></a>
<a href="#" class="quarter box icon" data-tab="strat_capabilities"><img src="/img/icon_it.png" alt="it icon" />For Strategists<i class="material-icons">arrow_drop_down</i></a>

</div><!--  /.row -->

<div class="productlist choices">
         
        <div class="row product-grid aligncenter hidden" id="user_capabilities">


<a href="/ia/user/enriched_administrator_and_user_experience.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Enriched Administrator and User Experience</a><!-- .box -->
<a href="/ia/user/dashboards.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Dashboards</a><!-- .box -->
<a href="/ia/user/capability1.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Ensure Compliance</a><!-- .box -->
<a href="/ia/user/capability2.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Application Decommissioning</a><!-- .box -->
<a href="/ia/user/capability3.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Application Optimization</a><!-- .box -->
<a href="/ia/user/capability4.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Information Transformation</a><!-- .box -->
<a href="/ia/user/capability5.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Individual User Roles</a><!-- .box -->
<a href="/ia/user/capability6.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->SAP Decommissioning</a><!-- .box -->

            </div><!-- .row -->

                    <div class="row product-grid  aligncenter hidden" id="it_capabilities">


                <!-- add all buttons for it capabilities here-->
                <a href="/ia/it/simple_architecture.php" class="box quarter"><!--<img src="/img/icon_question.png" alt="question icon" />-->Simple architecture</a><!-- .box -->
                <a href="/ia/it/itcapability2.php" class="box quarter">Quick Deployment</a><!-- .box -->
                <a href="/ia/it/itcapability3.php" class="box quarter">Low TCO</a><!-- .box -->
                <a href="/ia/it/itcapability4.php" class="box quarter">User and Group Configuration</a><!-- .box -->
                <a href="/ia/it/itcapability5.php" class="box quarter">Encryption</a><!-- .box -->
                <a href="/ia/it/itcapability6.php" class="box quarter">Security</a><!-- .box -->
                <a href="/ia/it/itcapability7.php" class="box quarter">Disaster Recovery</a><!-- .box -->
                <a href="/ia/it/itcapability8.php" class="box quarter">Storage Options</a><!-- .box -->
            </div><!-- .row -->

             <div class="row product-grid  aligncenter hidden" id="strat_capabilities">


                <!-- add all buttons for it capabilities here-->
                <a href="/ia/strat/thought_leadership.php" class="box quarter">Thought Leadership</a><!-- .box -->
                
                
            </div><!-- .row -->
</div><!--  /.productlist -->

        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../footer.php'); ?>
  


