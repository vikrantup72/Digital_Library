<?php include './template/header.php'; ?>

<div id="upEBookPage"></div>

<div class="box box-success">

	<div class="box-header with-border">
		<h3 class="box-title">Upload New Book</h3>
	</div>
	
	<div class="box-body">
		<form method="post" id="upEbookForm" enctype="multipart/form-data" name="upEbookForm" class="form-horizontal">
			
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Title:</label>
						<div class="col-sm-8">
							<input type="text" id="btitle" name="btitle" class="form-control" placeholder="Enter the Book's Title" required="required">
							<div id="err1"></div>
						</div>
					</div>

					<div class="form-group">
                      <label class="col-sm-3 control-label">Author:</label>
						<div class="col-sm-8">
							<input type="text" id="bauthor" name="bauthor" class="form-control" placeholder="Enter the Author's Name" required="required">
							<div id="err2"></div>
						</div>
					</div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Department:</label>
						<div class="col-sm-8">
							<select name='bgenre' id='bgenre' class="form-control" required="required">
							</select>
							<div id="err3"></div>
						</div>
					</div>
					
					<div class="form-group">
                      <label class="col-sm-3 control-label">Book Synopsis:</label>
						<div class="col-sm-8">
							<textarea name="bsyn" rows="5" cols="60" id="bsyn" class="form-control" placeholder="Enter the description for books" required="required"></textarea>
							<div id="charNum">1200 characters left</div>
							<div id="err4"></div>
						</div>
					</div>
						 
					<div class="form-group">
                      <label class="col-sm-3 control-label">Upload E-book (.pdf):</label>
						<div class="col-sm-8">
							<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
							<div id="err5"></div>
						</div>
					</div>	
					
							<input type="text" name="option" value="upebook" style="display:none;">
							<br>
							<br>
		</form>					
					<div class="box-footer">
						<button id="upEbookBut" class="btn btn-success pull-right">Upload E-Book</button>
					</div>
					
			</div>
		
</div>

<div id="listEbookManage"></div>

<div id="resultadd"></div>

<button id="deletebutEbook" class="floatDelBut" title="Delete Data"><i class="fa fa-fw fa-trash"></i></button>

<?php include './template/footer.php'; ?>