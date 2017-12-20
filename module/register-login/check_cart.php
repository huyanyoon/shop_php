<?php 


 for ($i=0; $i < count($_SESSION["fid_cart"]); $i++) { 
					//After getting user id from database here we are checking user cart item if there is already product is listed or not
 					$pro=$ca->checkpro_Users($_SESSION['id_session'],$_SESSION["fid_cart"][$i]);
 					//echo "<pre>";
 					//print_r($pro);
 					$row= $ca->getRowCount();
 					//echo $row;
 					//echo "<br>";
 					if($row==0)
 					{
 						date_default_timezone_set("Asia/Ho_Chi_Minh");
						$date=date("Y-m-d h:i:sa");
						$last_id =$ca->createOrders_User($_SESSION['id_session'],$ip_add);
						$ca->createOrders_Detail($_SESSION["fid_cart"][$i],1,$last_id,$date,0);
 						//print_r($ca);
 					}
 					//unset($_SESSION["fid_cart"][$i]);
			
				}

unset($_SESSION["fid_cart"]);
unset($_SESSION["fid_user"]);


 ?>