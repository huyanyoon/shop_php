<?php
if (!defined("ROOT"))
{
	echo "Err!"; exit;	
}
	$phone = new Book();
	$ac=getIndex("ac");
	
		if ($ac=="")
		{
			//List Products
			include ROOT."/module/phone/list.php";
			
		}
				
		
		if ($ac=="products_detail")
		{
			include ROOT."/module/phone/single.php";	
		}

		/////////////
		if ($ac=="home")
		{
			include ROOT."/module/phone/home.php";
		}
?>