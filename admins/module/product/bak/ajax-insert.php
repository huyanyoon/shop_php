<?php 
if(isset($_POST['url_r']))
{
	$url_r='../../../config/config.php';
}
if(!isset($url_r)) 
{
	echo "You don't have this permission! GET OUT!!!";
	exit();
}
include $url_r;

include ROOT."/admins/include/function.php";
spl_autoload_register("loadClass");

//LIST CATEGORY
 

 ?>

 		<script type="text/javascript">

 			$(document).ready(function(){
			$("#formDemo").validate({
				rules: {
					id_in: {
						required: true,
					},
					name: {
						required: true,
					},
				
				},
				messages: {
					id_in: {
						required: "Bạn chưa nhập ID",
					},
					name: {
						required: "Bạn chưa nhập tên",
					},
				},
			
			});
		});

 		</script>
 		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
 			
 		
 	<form  id="form_ins"  method="POST" action="a.php" >

		<div class="content-box" style="border: 0"><!-- Start Content Box -->
				
				<div class="content-box-header" style="border: 0"><h3>Main Product</h3><div class="clear"></div></div> 
				<div class="content-box-content" style="border: 0" >
					

					<div class="tab-content default-tab" id="tab1"> 
							<div class="uploader" >
									<input id="file-upload" type="file" name="fileUpload" accept="image/*" />

									  <label for="file-upload" id="file-drag">
									    <img id="file-image" src="#" alt="Preview" class="hidden">
									    <div id="start">
									      <i class="fa fa-download" aria-hidden="true"></i>
									      <div>Select a file or drag here</div>
									      <div id="notimage" class="hidden">Please select an image</div>
									      <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
									    </div>
									    <div id="response" class="hidden">
									      <div id="messagess"></div>
									      <progress class="progress" id="file-progress" value="0">
									        <span>0</span>%
									      </progress>
									    </div>
									  </label>
							 </div>
						<script  src="resources/scripts/box.js"></script>
						   
						<div class="clear" style="padding-top:20px"></div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
												<label for="">ID_Product</label>
												<input type="text" name="id_in" value='<?php if(isset( $_POST["id_ins"])) echo $_POST["id_ins"]; ?>' class="form-control" id="id" placeholder="Input ID_product" required>
											</div>
						</div>
						


						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
												<label for="">Name</label>
												<input type="text" name="name" value='<?php if(isset( $_POST["name"])) echo $_POST["name"]; ?>' class="form-control" id="name" placeholder="Input Name" required>
											</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="">Slug</label>
												<input type="text" name="slug" class="form-control"  placeholder="Input Slug">
											</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label for="">Price</label>
												<input type="text" name="promo1" class="form-control" placeholder="Input Promo1">
											</div>
						</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
								<label for="">Cateogry</label>
								<select class="form-control" id="sel1">
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
							  </select>
							</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
											<label for="">Intro</label>
												<input type="text" name="intro" class="form-control"  placeholder="Input Intro">
											</div>
							</div>
				
							 
					</div>

						<div class="clear"></div>
					</div> 
			  </div> 
				
			</div>

			<div class="content-box" style="border: 0"><!-- Start Content Box -->
				
				<div class="content-box-header" ><h3>Review Product</h3><div class="clear"></div></div> 
				<div class="content-box-content" style="border: 0">
					<div class="tab-content default-tab"  id="tab1">
								
					<textarea class="ckeditor" name="r_product"></textarea>

					</div> 

			  </div> 
				
			</div>
			<div class="content-box" style="border: 0"><!-- Start Content Box -->
				
				<div class="content-box-header" ><h3>Review Intro</h3><div class="clear"></div></div> 
				<div class="content-box-content" style="border: 0">
					<div class="tab-content default-tab"  id="tab1">
								
					<textarea class="ckeditor" name="r_intro"></textarea>

					</div> 

			  </div> 
				
			</div>

			<div class="content-box" style="border: 0">
				<div class="content-box-header" ><h3>Promo</h3><div class="clear"></div></div> 
				<div class="content-box-content" style="border: 0">
					<div class="tab-content default-tab"  id="tab1">
					
											<div class="form-group">
											
												<input type="text" name="promo1" class="form-control" placeholder="Input Promo1">
											</div>
											<div class="form-group">
											
												<input type="text" name="promo2" class="form-control" placeholder="Input Promo2">
											</div>
											<div class="form-group">
											
												<input type="text" name="promo3" class="form-control" placeholder="Input Promo3">
											</div>
											<div class="form-group">
											
												<input type="text" name="packet" class="form-control" placeholder="Input Packet">
											</div>
											
											<div class="form-group">
											
												<input type="text" name="tag" class="form-control" placeholder="Input Tag">
											</div>
											<div class="text-center form-group">
												<button  type="submit"  name="submit" class="btn btn-primary">Create</button>
											</div>
					
					</div> 

			  </div> 
				
			</div>
				
			</form>
			
			<?php  
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date=date("Y-m-d h:i:sa");

			if(isset($_POST['id_ins']))
				{
					//include(ROOT."/admins/module/validation/val_ins.php");

					$cat=new Book();

					$result=$cat->createCategory($_POST['id_ins'],$_POST['name'],$_POST['slug'],$_POST['parent_id'],$date);
					//if($result==-1) echo '<span class="label label-danger">Label</span>';
					if($result!=1) 
					echo '<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>SQL Error!</strong> Invalid Data!
							</div>';
					else 
						echo '<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Create Success!</strong> Good Job!
								</div>';
					

				}?>

