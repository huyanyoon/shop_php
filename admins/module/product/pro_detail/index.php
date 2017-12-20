<?php 
if(isset($_POST['url_r'])) 
{
	$url_r="../../../../config/config.php";
}
if(!isset($url_r)) 
{
	echo "You don't have this permission! GET OUT!!!";
	exit();
}
include $url_r;
include ROOT."/admins/include/function.php";
spl_autoload_register("loadClass");


//////////////////LOAD Deatail Product//////////////
$pid=$_POST['pro_id'];
$product=new Product();
$pro=$product->get_ProductDetail($pid);
if(isset($pro[0])) //ALREADY DATA ===>UPDATE
	{
		
		$_POST=$pro[0];
		//print_r($_POST);
		?>
		<script>
			window.location.hash = 'update_pro_detail';
		</script>
		<?php
		include (ROOT."/admins/module/product/pro_detail/update_pro_detail.php");
	}
else //NO DATE
{
	?>
		<script>
			window.location.hash = 'insert_pro_detail';
		</script>
		<?php
	include (ROOT."/admins/module/product/pro_detail/insert_pro_detail.php");
}

 ?>