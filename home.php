<!DOCTYPE html>
<html>
<head>
	<?php 
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 60)) 
	{
    // last request was more than 30 minutes ago
    session_unset($_SESSION['LAST_ACTIVITY']);     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
  
	}
	//TIEU DE////////////
	include ("include/header.php"); ?>
</head>


<body <?php if(!isset($_SESSION['id_session'])) echo 'onbeforeunload="return ctime_Cart()"'; ?>>

  
       <?php //HEAD BANNER//////////////// 
       include ("module/banner/index.php");
     //  print_r($_COOKIE["pro_list"]);
        ?>

			
             <div class="main">
               
                <div class="wrap">
             	  <div class="content-top">
             		<div class="lsidebar span_1_of_c1">
					  <p>Make your life is better!</p>
					</div>
					<div class="cont span_2_of_c1">
					  <div class="social">	
					     <ul>	
						  <li class="facebook"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"><a href="#"> </a></div><div class="border hide"><p class="num">1.51K</p></div></li>
						 </ul>
			   		   </div>
					   <div class="social">	
						   <ul>	
							  <li class="twitter"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
						  </ul>
			     		</div>
						 <div class="social">	
						   <ul>	
							  <li class="google"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
						   </ul>
			    		 </div>
						 <div class="social">	
						   <ul>	
							  <li class="dot"><a href="#"><span> </span></a><div class="radius"> <img src="images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
						  </ul>
			     		</div>
						<div class="clear"> </div>
					  </div>
					  <div class="clear"></div>			
				   </div>


				  <div class="content-bottom">
				  
				 
			  <?php 
			  //PRODUCT//////////////////
			  $mod = getIndex("mod","phone");
			  
			  	//Module product+detail
			  		if($mod=="phone")
			  		{
			  			include('module/phone/index.php');	
			  		}
			  		
				  //Module regiter
			  		//if($mod=="sign_up")
			  		{
			  			//header('Location:'.ROOT.'module/register-login/index.php');
			  			//header("Location: module/register-login/index.php");
			  			?>
			  			<script>
			  				
			  				//window.location.replace("module/register-login/");


			  			</script>
			  			<?php

			  		}
			  	//Module Search
			  		if($mod=="search")
			  		{
			  			include('module/search/index.php');
			  		}
			  		 ?>
			 </div>
        </div>

     
  <div class="clear"></div>		
      
</body>
<script>
function ctime_Cart() {
    $.post("s.php", {}, function(result){
		         });return true;  
}

</script>
<?php      include('include/footer.php'); ?>
</html>