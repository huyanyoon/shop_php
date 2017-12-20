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
					
					<h3>PRODUCT</h3>
					
				
					
				  <div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
											
						<table>
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>IMG</th>
								   <th>Name</th>
								   <th>Info</th>
								   <th>Price</th>
								   <th>Cat_ID</th>
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
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
								<?php $prod=new Product();
									foreach ($prod->getProduct() as $r) {
										# code...
									$i=0;
								 ?>
								<tr>
									<td><input type="checkbox" name="chk<?php echo $i;?>" value="<?php echo $r['id']; ?>" /></td>
								<td><img width="30" height="30" src="../image/products/<?php echo $r['images']; ?>" alt="preview"></td>
									<td><a pid="<?php echo $r['id']; ?>" id="ins-upd" href="#" title="title"><?php echo $r['name']; ?></a></td>
									<td><?php echo $r['intro']; ?></td>
									<td><?php echo $r['price']; ?></td>
									<td><?php echo $r['cat_id']; ?></td>
									<td>
										
										
										<a  pid="<?php echo $r['id']; ?>" id="upd_products" href="#"  title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
										 <a pid="<?php echo $r['id']; ?>" pimg="<?php echo $r['images']; ?>" id="del_product" href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
										 
									</td>
								</tr>
								<?php }; ?>
								
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					     
					
			  </div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			