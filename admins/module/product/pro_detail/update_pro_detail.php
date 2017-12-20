<?php 

if(!isset($url_r)) 
{
	echo "You don't have this permission! GET OUT!!!";
	exit();
} 


?>

 	<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3 id="headd">Update Product_Details</h3>
					  <div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						
						<form  id="form_ins" action="" method="POST" >
						
											<div class="form-group">
												<label for="">CPU</label>
												
												<input type="text" name="cpu" value='<?php if(isset( $_POST["cpu"])) echo $_POST["cpu"]; ?>' class="form-control" id="id" placeholder="Input CPU" >
											</div>
											<div class="form-group">
												<label for="">RAM</label>
												<input type="text" name="ram" value='<?php if(isset( $_POST["ram"])) echo $_POST["ram"]; ?>' class="form-control" id="name" placeholder="Input Ram" >
											</div>
											<div class="form-group">
												<label for="">SCREEN</label>
												<input type="text" name="screen" value='<?php if(isset( $_POST["screen"])) echo $_POST["screen"]; ?>'  class="form-control" id="slug" placeholder="Input Screen">
											</div>
											<div class="form-group">
											<label for="">VGA</label>
												<input type="text" name="vga" value='<?php if(isset( $_POST["vga"])) echo $_POST["vga"]; ?>' class="form-control" id="parent_id" placeholder="Input VGA">
											</div>
											<div class="form-group">
											<label for="">Storage</label>
												<input type="text" name="storage" value='<?php if(isset( $_POST["storage"])) echo $_POST["storage"]; ?>' class="form-control" id="parent_id" placeholder="Input Storage">
											</div>
											<div class="form-group">
											<label for="">Exten_memmory</label>
												<input type="text" name="exten_memmory" value='<?php if(isset( $_POST["exten_memmory"])) echo $_POST["exten_memmory"]; ?>' class="form-control" id="parent_id" placeholder="Input exten_memmory">
											</div>
											<div class="form-group">
											<label for="">Cam1</label>
												<input type="text" name="cam1" value='<?php if(isset( $_POST["cam1"])) echo $_POST["cam1"]; ?>' class="form-control" id="parent_id" placeholder="Input Cam1">
											</div>
											<div class="form-group">
											<label for="">Cam2</label>
												<input type="text" name="cam2" value='<?php if(isset( $_POST["cam2"])) echo $_POST["cam2"]; ?>' class="form-control" id="parent_id" placeholder="Input Cam2">
											</div>
											<div class="form-group">
											<label for="">Sim</label>
												<input type="text" name="sim" value='<?php if(isset( $_POST["sim"])) echo $_POST["sim"]; ?>' class="form-control" id="parent_id" placeholder="Input sim">
											</div>
											<div class="form-group">
											<label for="">Connect</label>
												<input type="text" name="connect" value='<?php if(isset( $_POST["connect"])) echo $_POST["connect"]; ?>' class="form-control" id="parent_id" placeholder="Input connect">
											</div>
											<div class="form-group">
											<label for="">Pin</label>
												<input type="text" name="pin" value='<?php if(isset( $_POST["pin"])) echo $_POST["pin"]; ?>' class="form-control" id="parent_id" placeholder="Input pin">
											</div>
											<div class="form-group">
											<label for="">OS</label>
												<input type="text" name="os" value='<?php if(isset( $_POST["os"])) echo $_POST["os"]; ?>' class="form-control" id="parent_id" placeholder="Input OS">
											</div>
											<div class="form-group">
											<label for="">Note</label>
												<input type="text" name="note" value='<?php if(isset( $_POST["note"])) echo $_POST["note"]; ?>' class="form-control" id="parent_id" placeholder="Input Note">
											</div>
											<input type="hidden" name="pro_id" value="<?php if(isset( $_POST['pro_id']))  echo $_POST['pro_id']; ?>">
											<button type="submit" id="cre_d"  name="upd_pr_de-id" class="btn btn-primary">Update</button>
						</form>
						
					</div> <!-- End #tab1 -->
					
					     
					
			  </div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			<?php  
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$date=date("Y-m-d h:i:sa");
			//CHUA LAM NHE
			if(isset($_POST['upd_pr_de-id']))
				{
					$pro_det=new ProductDetail();
					
					$result=$pro_det->updateProduct_Detail($_POST["cpu"],$_POST["ram"],$_POST["screen"],$_POST["vga"],$_POST["storage"],$_POST["exten_memmory"],$_POST["cam1"],$_POST["cam2"],$_POST["sim"],$_POST["connect"],$_POST["pin"],$_POST["os"],$_POST["note"],$_POST["pro_id"],0,$date);
					//////////////SHOW RESULT//////////////
						if($result!=1) 
						{
							echo '<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>SQL Error!</strong> Invalid Data!
								</div>';
						}
						
						else 
						{

							echo '<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Create Success!</strong> Good Job!
									</div>';
									?>
									 
								<?php
						}
					}?>
				