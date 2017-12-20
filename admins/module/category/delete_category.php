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

$cat=new Book();


$cat_id=$_POST['cat_id'];
$cat->delCategory($cat_id);/////////DELETE CATERORY

//DETAIL PRODUCT///////////////
$pd=new ProductDetail();
$pro_id=$pd->getProduct_pro_id($cat_id);
if(!isset($pro_id[0])) 
	{
		//header("module/category/show_category.php");
		exit();
	}

$d="";
$l= count($pro_id);

	for ($i=0; $i < $l; $i++)
	 { 
	 	$d.="pro_id=".$pro_id[$i]["id"];
		if($i<$l-1)
			$d.="||";
	 } 
//echo "delete  from  pro_details where ".$d;

////PRODUCT///////
$p=new Product();
$p->delProduct($cat_id);///////DELETE PRODUCT
$pd->delProduct_Det($cat_id,$d);/////////DELETE DETAIL

///////////PRODUCT IMAGE
//$cat->delDetail_img($cat_id,$d);
//header("module/category/show_category.php");
 ?>