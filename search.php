<?php 
	$titlepage = "Search Books";
	include "./template/header.php";
?>
<div id="searchPage"></div>
<div class="container">

		
		<div class="panel panel-primary">
            <div class="panel-heading">
              Search
            </div><!-- /.box-header -->

            <div class="panel-body">
            <!-- form start -->
            <form role="form" action="search.php" method="get" name="searchBookForm" id="searchBookForm">


				<div class="form-group">
						<input type="text" id="searchBox" name="search" class="form-control" placeholder="Enter book's title or author's name, or leave blank..." required="required">
						<div id="err1"></div>
				</div>
				
				<div class="form-group">
	              <label>Filter:</label>
						Language: <select name="filterLang" id="blang">
								  </select>
						Department:  <select name="filterGen" id="bgenre">
								  </select>
				</div>
            </form>
          </div>
          <div class="panel-footer">
                <button class="btn btn-primary" id="searchsub">Search</button>
              </div>

		</div>	

	

	<br>
	<div id="list"></div>

  <div class="modal fade" id="book" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Book Details</h4>
        </div>
        <div class="modal-body">
			<div id="modalpages"></div>
        
        </div>
      </div>
      
    </div>
 </div>


 <?php

 	if(isset($_GET['q']))
 	{
 		$searchvar = $_GET['q'];
 		
 		echo "
 			<script>
 			$('#searchBox').val('".$searchvar."');
 			$.post('./process.php','option=search&search=".$searchvar."&filterLang=&filterGen=',function(data){
		        $('#list').append(data).hide().fadeIn();
		    });
 			</script>
 		";
 	}

 ?>

<?php include "./template/footer.php"; ?>