<?php
session_start();
include "../../config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");

   $p_id = $_POST["pro_id"];
 	$ca=new Cart();
 	$ip_add = getenv("REMOTE_ADDR");
   if(isset($_SESSION["id_session"]))//USER
		{
			
			//$_SESSION['user_session'] =$user['name'];
			$user_id = $_SESSION['id_session'];
			$user_name = $_SESSION['user_session'];
			//CHECK ALREADY PRODUCT
			$od=$ca->checkpro_User($user_id,$p_id);
			
			if($od[0]['c']>0){
				//echo "
				//	<div class='alert alert-warning'>
				//			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				//			<b>Product is already added into the cart Continue Shopping..!</b>
				//	</div>";
				echo ("Product is already added into the cart Continue Shopping");
				exit();
			}
			 else {
			 	date_default_timezone_set("Asia/Ho_Chi_Minh");
				$date=date("Y-m-d h:i:sa");
				$last_id =$ca->createOrders_User($user_id,$ip_add);
				$ca->createOrders_Detail($p_id,1,$last_id,$date,0);
			}
		}
	else{//NOT USER///////////////

			if(!isset($_SESSION["fid_user"]))
			{

				$_SESSION["fid_user"]=range(1, 200);;
				$_SESSION["fid_cart"]=array();
				
				
			}
			for ($i=0; $i < count($_SESSION["fid_cart"]); $i++) { 
				if($_SESSION["fid_cart"][$i]==$p_id)
				{
					exit();
				}
			}
			$_SESSION["fid_cart"][]=$p_id;
			//echo $_SESSION["fid_user"];
			print_r($_SESSION["fid_cart"]);

			//$od=$ca->checkpro_NoUser($ip_add,$p_id);
			//print_r($od);
			//if($od[0]['c']>0){
				//echo "
				//	<div class='alert alert-warning'>
				//			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				//			<b>Product is already added into the cart Continue Shopping..!</b>
				//	</div>";
				//echo ("Product is already added into the cart Continue Shopping");
				//exit();
			//}
			
			//date_default_timezone_set("Asia/Ho_Chi_Minh");
			//$date=date("Y-m-d h:i:sa");
			// $last_id =$ca->createOrders_Nouser(0,$ip_add);
			
			//$ca->createOrders_Detail($p_id,1,$last_id,$date,0);
			
			
		}