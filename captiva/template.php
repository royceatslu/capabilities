<?php
include('../session.php');  
$page="document_classification";
$section="products";
include('../header.php'); ?>
<div id="pagecontent">
  <nav id="breadcrumbs"><a href="/">Home</a> :: <a href="/products.php">Products</a> :: <a href="/captiva/">Captiva Capture</a> :: <a href="/captiva/template.php">Basic Template</a> </nav><!-- /#breadcrumbs  -->
<div id="main" class="content">
           
           <h2>Document Classification</h2>
              

<p class="callout"><strong>Eliminate Misqueing.</strong> With intelligent capture of inbound documents and extraction of information for proper routing, you can ensure consistently correct delivery of work to the appropriate work group. The advantages: heightened efficiency and productivity, faster response, better customer service. </p>


<div id="sections" class="row">
    <a data-tab="what" class="box" href="#what"><i class="material-icons">arrow_drop_down</i><span>What is it?</span></a>
    <a data-tab="why" class="box" href="#why"><i class="material-icons">arrow_drop_down</i><span>Why is it important?</span></a>
    <a data-tab="how_use" class="box" href="#how_use"><i class="material-icons">arrow_drop_down</i><span>How are Customers Using it?</span></a>
      <a data-tab="how_work" class="box" href="#how_work"><i class="material-icons">arrow_drop_down</i><span>How does it Work?</span></a>
</div><!-- .row -->


<div id="panels">
<div class="panel" id="what">
<h3>What is it?</h3>
   <p>Document classification is the application of advanced recognition technology for the purpose of extracting business-critical information from inbound documents.</p>
</div><!-- /#what  -->
<div id="why" class="panel">
<h3>Why is it important?</h3>
  <p>Document classification gets the right documents to the right people - avoiding the costs of misqueues.</p>


  <ul>
  <li>Roughly 30% of documents routed to business processes are misqueued: this is costly to the business on many levels.</li>
  <li>Ensuring completeness of documents assures that the right information is in hand to make a decision: this is important from a business and regulatory standpoint</li>
  <li>Proper classification enables data extraction: knowing what information is contained determines how to handle it.</li>
  <li>Proper classification and extraction can determine the action needed.</li>
  </ul>
</div><!-- /#why  -->
<div id="how_use" class="panel">
 <h3>How are customers using it?</h3>
    <ul>
        <li>Banking customers use it to identify key documents required for mortgage lending processes for regulatory and business requirements.</li>
        <li>Insurance customers are using it to identify the completeness of claim submissions.</li>
        <li>Government agencies are using it to speed the processing of documents sent from the public and other agencies (FOIA requests, tax processing, licenses &amp; other entitlements).</li>
        <li>Pharmacy fulfillment companies use it to process prescription requests.</li>

    </ul>
</div><!-- /#how_use  -->
<div class="panel" id="how_work">
   <h3>Captive—multiple technologies to determine each document type.</h3>
 
 <div class="row loaders">
     <a href="../templates/tlmr.php" class="box"><i class="material-icons">arrow_drop_down</i>Text Left, Media Right</a>
     <a href="../templates/trml.php" class="box"><i class="material-icons">arrow_drop_down</i>Text Right, Media Left</a>
     <a href="../templates/ttmb.php" class="box"><i class="material-icons">arrow_drop_down</i>Text Top, Media Bottom</a>
     <a href="../templates/tbmt.php" class="box"><i class="material-icons">arrow_drop_down</i>Text Bottom, Media Top</a>
     <a href="../templates/ft.php" class="box"><i class="material-icons">arrow_drop_down</i>Full Text</a>
     <a href="../templates/fm.php" class="box"><i class="material-icons">arrow_drop_down</i>Full Media</a>
    </div><!-- /.row  --> 
    <div id="layouts"></div><!-- /#layouts  -->
</div><!-- /#how_work  -->
</div><!-- #panels -->
        </div><!-- #main -->
    </div><!-- #pagecontent -->
<?php include('../footer.php'); ?>
  