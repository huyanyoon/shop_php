<?php 
session_start();
 if(isset($_GET['log_out'])&&isset($_SESSION['user_session']))
      {
        if($_GET['log_out']=='true')
        {

        session_destroy();
		unset($_SESSION['user_session']);
		unset($_SESSION['id_session']);
		}
		
      } 

if(isset($_GET['cart']))
{
	include "config/config.php";
	include ROOT."/include/function.php";
	spl_autoload_register("loadClass");
	include("module/cart/cart.php");
	return;
}
else if(isset($_GET['register']))
{
	$register=0; 		
	include("module/register-login/index.php");
	return;
}
else if(isset($_GET['login']))
{
	$login=0; 		
	include("module/register-login/index.php");
	return;
}
else
{

	include ("home.php");
	return;
}


 ?>