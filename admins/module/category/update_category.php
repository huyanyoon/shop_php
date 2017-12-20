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

				if(isset($_POST['cat_id']))
				{
					//include(ROOT."/admins/module/validation/val_ins.php");
					
					$cat=new Book();
					$a_cat=$cat->getACategory($_POST['cat_id']);//get a category 
				}
 ?>
 	<script>
 		$("#form_ins").validate({
            rules: {
                id_upd: "required",
                name: "required"
                
            },
            messages: {
                id_upd: "Vui lòng nhập ID",
                name: "Vui lòng nhập tên loại"
                
            }
        });

 	</script>
		<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Update Category</h3>
					
				
					
				  <div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						

						<form action="" id="form_ins" method="POST" >
						
											<div class="form-group">
												<label for="">ID_Category</label>
												<input type="text" name="id_upd" value='<?php if(isset( $a_cat[0]["id"])) echo $a_cat[0]["id"];
													if(isset($_POST['id_upd'])) echo $_POST['id_upd']; 
												 ?>' class="form-control" id="id" placeholder="Input ID_Category" required>
											</div>
											<div class="form-group">
												<label for="">Name</label>
												<input type="text" name="name" value='<?php if(isset( $a_cat[0]["name"])) echo $a_cat[0]["name"];if(isset($_POST['name'])) echo $_POST['name']; ?>' class="form-control" id="name" placeholder="Input Name" required>
											</div>
											<div class="form-group">
												<label for="">Slug</label>
												<input type="text" name="slug" value='<?php if(isset( $a_cat[0]["slug"])) echo $a_cat[0]["slug"]; if(isset($_POST['slug'])) echo $_POST['slug']; ?>' class="form-control" id="slug" placeholder="Input Slug">
											</div>
											<div class="form-group">
											<label for="">Parent_id</label>
												<input type="text" name="parent_id" value='<?php if(isset( $a_cat[0]["parent_id"])) echo $a_cat[0]["parent_id"];if(isset($_POST['parent_id'])) echo $_POST['parent_id']; ?>' class="form-control" id="parent_id" placeholder="Input Parent_id">
											</div>
											<input type="hidden" name="created_at" value="<?php if(isset( $a_cat[0]["created_at"])) echo $a_cat[0]["created_at"]; ?>">
											<button type="submit"  name="submit" class="btn btn-primary">Update</button>
						</form>
						
					</div> <!-- End #tab1 -->
					
					     
					
			  </div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			<?php  
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date=date("Y-m-d h:i:sa");
			if(isset($_POST['id_upd']))
				{
					//include(ROOT."/admins/module/validation/val_ins.php");
					$cat=new Book();
					
					$result=$cat->updateCategory($_POST['id_upd'],$_POST['name'],$_POST['slug'],$_POST['parent_id'],$_POST['created_at'],$date);
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

				}
			?>