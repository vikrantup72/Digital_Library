<?php 
	$titlepage = "Home";
	include "./template/header.php";
?>

<div id="homepage"></div>

<div class="wrapper">

<div class= "main col-md-9">
         

	<div class="panel panel-warning">
		<div class="panel-heading">Books Collection</div>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="pill" href="#menu1">Computer Science</a></li>
				<li><a data-toggle="pill" href="#menu2">Maths</a></li>
				<li><a data-toggle="pill" href="#menu3">English</a></li>
				<li><a data-toggle="pill" href="#menu4">Commerce</a></li>
		  </ul>
		  
		 <div class="panel-body">
		 
			<div class="tab-content">

				<div id="menu1" class="tab-pane fade in active">
					<div class="row">
							<div id="listNewestHistory"></div>
						</div>
				</div>

				<div id="menu2" class="tab-pane fade">
					<div class="row">
							<div id="listNewestSciFi"></div>
						</div>
				</div>
				
				<div id="menu3" class="tab-pane fade">
					<div class="row">
							<div id="listNewestMystery"></div>
						</div>
				</div>
				
				<div id="menu4" class="tab-pane fade">
					<div class="row">
							<div id="listNewestRomance"></div>
						</div>
				</div>
				
			</div>
		<br>
		</div> 
	</div>
	
	<br><br><br><br><br><br><br>

	</div>
	<div class="sidebar col-md-3 hidden-sm hidden-xs">
         <div class="panel panel-primary">
			<div class="panel-heading">Search</div>
				<div class="panel-body">
					
					<form method="get" action="./search.php">
						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Search Books..." id="searchTextBox" name="q" required="required">
						  <span class="input-group-btn">
							<button class="btn btn-success" type="submit" id="searchBookBut" name="searchSub"><i class="glyphicon glyphicon-search" style="font-size:20px;"></i></button>
						  </span>
						</div>
					</form>
					<span style="float:right;"><a href="./search.php">Advanced Search</a></span>
				</div>
		 </div>
   </div>
   <div class="sidebar col-md-3 hidden-sm hidden-xs">
         <div class="panel panel-info">
			<div class="panel-heading">Read E-Paper Online</div>
					
					<a href="./admin/uploads/demo.pdf"><img src="./images/daily-thanthi.png" width="100%" title="Read News Paper"/></a>
					
		 </div>
   </div>
   <div class="sidebar col-md-3 hidden-sm hidden-xs">
         <div class="panel panel-primary">
			<div class="panel-heading">Upcoming Books</div>
				<div class="panel-body">
					
					<div id="listUpcomingBookHomepage"></div>
					
				</div>
		 </div>
   </div>
	

</div> 

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


<?php include "./template/footer.php"; ?>