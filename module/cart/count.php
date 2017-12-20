<?php 
session_start();
if(!isset($_POST['url_r'])) 
{
	echo "You don't have this permission! GET OUT!!!";
	exit();
}
else
{
	$url_r='../../config/config.php';
	include $url_r;

	include ROOT."/include/function.php";
	spl_autoload_register("loadClass");
	$count=new Cart();
	if (isset($_SESSION['id_session']))
	{
		$c=$count->getNumCartUser($_SESSION['id_session']);
		echo  " (".$c[0]['count_i'].")";
	}
	else{
		//$ip_add = getenv("REMOTE_ADDR");
		
		//$c=$count->getNumCartNoUser($ip_add);
		if(!isset($_SESSION["fid_cart"])) echo "(0)";
		else{
			echo " (".count($_SESSION["fid_cart"]).")";
		}
		
	}
}


 ?>