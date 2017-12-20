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

 ?>
 

<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
				
					
				  <div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
											
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>ID</th>
								   <th>Slug</th>
								   <th>Name</th>
								   <th>Created</th>
								   <th>Update</th>
								   <th>Edit</th>

								</tr>
								
							</thead>
						 
									
							<tfoot>
								
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
								
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<?php
										 if(isset($_POST["page_Number"])) $cr=$_POST["page_Number"]; 
										 else $cr=1;
										 	
											 $category=new Book();
											$list= $category->getCategory_Page();
											$pageno = ceil(count($list)/6);
												for ($i=1; $i <= $pageno; $i++)
												{
													?>
											<a href="#" id='pages' page=<?php echo $i ?> class="number <?php if($cr==$i) echo 'current'; ?>" title="1"><?php echo $i ?></a>
											<?php
												}?>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
											
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
								
							</tfoot>
						 
							<tbody>
								<?php
								$limit = 6;
						        if(isset($_POST["page_Number"])){
						            $pageno = $_POST["page_Number"];
						            $start = ($pageno * $limit) - $limit;
						        }else{
						            $start = 0;
						        }
									
									$list= $category->getCategory($start,$limit);
									foreach ($list as $r) {
										
								 ?>
								<tr>
									<td><input type="checkbox" /></td>
									<td><?php echo $r['id']; ?></td>
									<td><a href="#" title="title"><?php echo $r['name']; ?></a></td>
									<td><?php echo $r['slug']; ?></td>
									<td><?php echo $r['created_at']; ?></td>
									<td><?php echo $r['updated_at']; ?></td>
									<td>
										<!-- Icons -->

										 <a  pid="<?php echo $r['id']; ?>" id="upd_category" href="#"  title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>

										 <a pid="<?php echo $r['id']; ?>" id="del_category" href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 
									</td>
								</tr>
								<?php }; ?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					     
					
			  </div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			