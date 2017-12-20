<?php 
if(isset($_POST['cat_id']))
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

//////////////////LOAD CATEGORY//////////////


//RECEIVE DATA===>SHOW DATA
				if(isset($_POST['upd_pro-id']))
				{
					$pro_id=$_POST['upd_pro-id'];
					
					$product=new Product();
					$pro=$product->getAProduct($pro_id);
					//////////////TEST////////
						//echo "<pre>";
						//print_r($pro);
					
				}
//XU LY DATA
				else if(isset($_POST['id_in']))
				{
					date_default_timezone_set("Asia/Ho_Chi_Minh");
					$date=date("Y-m-d h:i:sa");
					if($_FILES['fileUpload']['name']!="")
					{
						$image=$_FILES['fileUpload']['name'];
						$tmp=$_FILES['fileUpload']['tmp_name'];
					}
					else
					{
						$image=$_POST['t_img'];
					}
					
				//	$random_name=rand();
				//	$type = explode('.',$image);// tách type khỏi file
				//	$type = end($type);//ngắt
				//	$rn=$random_name.".".$type;
$result=$product->updateProduct($_POST['id_in'],$_POST['name'],$_POST['slug'],$_POST['intro'],$_POST['promo1'],$_POST['promo2'],$_POST['promo3'],$_POST['packet'],$image,$_POST['r_product'],$_POST['r_intro'],$_POST['tag'],$_POST['price'],1,$_POST['category'],1,$date);
					//if($result==-1) echo '<span class="label label-danger">Label</span>';
					if($result!=1) 
					{
						//$false=0;
						echo '<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>SQL Error!</strong> Invalid Data!
							</div>';
							$success=0;
					}
					else 
					{
						
						if(isset($tmp))
						{
							move_uploaded_file($tmp, ROOT.'/image/products/'.$image);
						}
						$success=1;
						echo '<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Create Success!</strong> Good Job!
								</div>';
					}
					

				}
 ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Admin</title>
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

		<div class="content-box">
				
				<div class="content-box-header">
					
					<h3>Update Product</h3>
					  <div class="clear"></div>
					<!-- checkbox-box -->
					<label class="switch">
					  <input type="checkbox" name="check" checked>
					  <span class="slider"></span>
					</label><br><br>
				</div> 
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1">
						<form  id="formDemo" enctype="multipart/form-data" action="" method="POST" >
						<input type="hidden" name="ins_pro">
						<input type="hidden" name="t_img" value="<?php if(isset($image)) echo $image; ?>">
						<div class="uploader" >

									<input id="file-upload" type="file" name="fileUpload" accept="image/*" />
								<label for="file-upload" id="file-drag">
									    <img id="file-image" src="<?php if(isset( $image)) echo '../image/products/'.$image; ?>"  alt="Preview" class="hidden" >
									    <div id="start">
									      <i class="fa fa-download" aria-hidden="true"></i>
									      <div id="selectfile">Select a file or drag here</div>
									      <div id="notimage" class="hidden">Please select an image</div>
									     <?php if(!isset( $image)) echo '<span id="file-upload-btn" class="btn btn-primary">Select a file</span>'; ?>
									    </div>
									    <div id="response" class="hidden">
									      <div id="messagess"><?php if(isset( $image)) echo $image; ?></div>
									      <progress class="progress"  id="file-progress" value="0">
									        <span></span>%
									      </progress>
									    </div>
									  </label>

							 </div><div class="clear" style="padding-top:20px"></div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
												<label for="">ID_Product</label>
												<input type="text" name="id_in" value='<?php echo $pro[0]["id"]; ?>' class="form-control" id="id" placeholder="Input ID_product" required>
											</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="form-group">
												<label for="">Name</label>
												<input type="text" name="name" value='<?php echo $pro[0]['name'];  ?>' class="form-control" id="name" placeholder="Input Name" required>
											</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="">Slug</label>
												<input type="text" value='<?php echo $pro[0]['slug']; ?>' name="slug" class="form-control"  placeholder="Input Slug">
											</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group">
											<label for="">Price</label>
												<input type="text" value='<?php echo $pro[0]['price']; ?>' name="price" class="form-control" placeholder="Input Promo1">
											</div>
						</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
								<label for="">Cateogry</label>
								<select class="form-control" name="category" id="sel1">
								<?php
								$category=new Book();
								$cat=$category->getCategory();
								 foreach ($cat as $r) {

								?>
							    <option <?php if(isset($_POST['category']))
							    {
							    	if($r['id'] === $_POST['category']) echo "selected='selected'";
							    } ?> ><?php echo $r['id']; ?></option>
							    <?php } ?>
							  </select>
							</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-group">
											<label for="">Intro</label>
												<input value='<?php  echo $pro[0]['intro']; ?>' type="text" name="intro" class="form-control"  placeholder="Input Intro">
											</div>
							</div>
						<div class="clear" style="padding-top:20px"></div>
						
					  </div> 	
					</div>
				<hr>

							<div style="padding-left: 20px"><h3>Review Product</h3></div>
							<div class="content-box-content" style="border: 0">
							<div class="tab-content default-tab"  id="tab1">		
							<textarea class="ckeditor"  name="r_product">qwewsdasasdsadasdasdda</textarea>
							<hr>
							<div class="clear" style="padding-top:20px"></div>

							<div style="padding-left: 20px"><h3>Review Intro</h3></div>
							<div class="content-box-content" style="border: 0">
							<div class="tab-content default-tab"  id="tab1">		
							<textarea class="ckeditor" name="r_intro"><?php echo $pro[0]["r_intro"]; ?></textarea>

							<hr>
										<div><h3>Review Product</h3></div>
										<div class="tab-content default-tab"  id="tab1">
											<div class="form-group">
												<input type="text" value="<?php echo $pro[0]["promo1"]; ?>" name="promo1" class="form-control" placeholder="Input Promo1">
											</div>
											<div class="form-group">
												<input type="text" value="<?php echo $pro[0]["promo2"]; ?>" name="promo2" class="form-control" placeholder="Input Promo2">
											</div>
											<div class="form-group">
												<input type="text" value="<?php echo $pro[0]["promo3"]; ?>" name="promo3" class="form-control" placeholder="Input Promo3">
											</div>
											<div class="form-group">
												<input type="text" value="<?php echo $pro[0]["packet"]; ?>" name="packet" class="form-control" placeholder="Input Packet">
											</div>
											<div class="form-group">
												<input type="text" value="<?php echo $pro[0]["tag"];?>" name="tag" class="form-control" placeholder="Input Tag">
											</div>
											</div>
											<div class="text-center form-group" style="padding-top: 20px">
												<button  type="submit"  name="submit" class="btn btn-primary">Create</button>
											</div>
						</form>
						
					</div> <!-- End #tab1 -->	
			  </div> 
			</div> <!-- End .content-box -->
			<script src="resources/scripts/box.js" type="text/javascript" charset="utf-8" async defer></script>

								<?php 
									  	if(isset($image))
									  	{
									  	?>
									  	<script>
									  			$(".fa").remove('i');
									  			$("#selectfile").remove('div');;
									  			$("#response").removeClass('hidden');
									  			$("#file-image").removeClass('hidden');

										</script>

								 <?php	
								 	if(($success)==1)
								 	{
								 		echo '<script>$("#file-progress").css("background-color", "green");</script>';
								 	}
								 	else
								 	{
								 		echo '<script>$("#file-progress").css("background-color", "silver");</script>';
								 	}

								}
								 	
								 ?>
