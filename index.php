<?php
	require_once('req/startsession.php');
	$title = "Blog -- HOME";
	require_once('tmpl/head.php');
	require_once('tmpl/nav.php');
?>


<!-- ROW 1 GRID -->
<div class="container">
	<div class="row">
	  <div class="col-sm-4">

		<h2 class="rowHeader">ENTRY 1</h2>
		<p>
			pst data here
		</p>
	  </div> <!-- CLOSE col-sm-4 -->
	  <div class="col-sm-4">
		<h2 class="rowHeader">ENTRY 2</h2>
		<p>another entry herere</p>
	  </div> <!-- CLOSE col-sm-4 -->
	  <div class="col-sm-4">
		<h2 class="rowHeader">ENTRY 3</h2>
		<<p>works and stuff ...</p>
	  </div> <!-- CLOSE col-sm-4 -->
	</div> <!-- CLOSE row -->
</div> <!-- CLOSE container -->

<!-- MODAL -->
<div class="modal fade" id="" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4></h4>
        <div class="modal-body">
          <p></p>
        </div> <!-- END modal-body -->
        <div class="model-footer">
          <a class="btn btn-primary" data-dismiss="modal">Close</a>
        </div> <!-- END modal-footer -->
      </div> <!-- END modal-header -->
    </div> <!-- END modal-content-->
  </div> <!-- END modal-dialog -->
</div> <!-- END modal -->

<?php
	require_once('/tmpl/footer.php');
?>
