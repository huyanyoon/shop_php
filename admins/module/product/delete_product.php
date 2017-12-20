<?php 

if(isset($_POST['pro_id']))
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

$del_p=new Product();
$pro_id=$_POST['pro_id'];
$p_img=$_POST['p_img'];
$d="";
$l= count($pro_id);

	for ($i=0; $i < $l; $i++)
	 { 
	 	$d.="pro_id=".$pro_id[$i]["id"];
		if($i<$l-1)
			$d.="||";
	 } 

$del_p->delProduct($pro_id);
unlink("../../../image/products/".$p_img);
$del_dp=new ProductDetail();
$del->delProduct_Det($pro_id,$d);
$del_p->delDetail_img($pro_id,$d);
//header("module/category/show_category.php");
 ?>