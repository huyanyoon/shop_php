<?php 
include "../../config/config.php";
	include ROOT."/include/function.php";
	spl_autoload_register("loadClass");

	$ca=new Cart();
	$ca->deleteOrders($_POST['o_id']);
	echo '<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Deleted!</strong> 
	</div>';
 ?>