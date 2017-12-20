<?php 
if(isset($_POST['url_r']))
{
	$url_r='../../../config/config.php';
}
include $url_r;

include ROOT."/admins/include/function.php";
spl_autoload_register("loadClass");

 ?>
 
		<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Create Category</h3>
					
				
					
				  <div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						

						<form action="index.php?mod=ins_ca" id="form_ins" method="POST" >
						
											<div class="form-group">
												<label for="">ID_Category</label>
												<input type="text" name="id" value='<?php if(isset( $_POST["id"])) echo $_POST["id"]; ?>' class="form-control" id="id" placeholder="Input ID_Category" required>
											</div>
											<div class="form-group">
												<label for="">Name</label>
												<input type="text" name="name" value='<?php if(isset( $_POST["id"])) echo $_POST["name"]; ?>' class="form-control" id="name" placeholder="Input Name" required>
											</div>
											<div class="form-group">
												<label for="">Slug</label>
												<input type="text" name="slug" class="form-control" id="slug" placeholder="Input Slug">
											</div>
											<div class="form-group">
											<label for="">Parent_id</label>
												<input type="text" name="parent_id" class="form-control" id="parent_id" placeholder="Input Parent_id">
											</div>
											<button type="submit"  name="submit" class="btn btn-primary">Create</button>
						</form>
						
					</div> <!-- End #tab1 -->
					
					     
					
			  </div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			<?php  
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date=date("Y-m-d h:i:sa");

			if(isset($_POST['id']))
				{
					//include(ROOT."/admins/module/validation/val_ins.php");

					$cat=new Book();
					$result=$cat->createCategory($_POST['id'],$_POST['name'],$_POST['slug'],$_POST['parent_id'],$date);
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