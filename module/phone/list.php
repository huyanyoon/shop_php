		
<?php 
if (!defined("ROOT"))
{
	echo "Err!"; exit;	
}

include(ROOT.'/module/pagination/pagination.php');
//list 1
//TOP TEN PRODUCTS...
?>

 <title>Trang chu</title>
<div style="margin-left: -70px;padding-left: 10px; background-color: #F2F2F2; height: 40px; padding-top: 20px;width: 400%"><h3 class="m_3">TOP 10 PRODUCTS</h3></div>
 <ul id="flexiselDemo3">
  			<?php
  			$list1 = $phone->getOnlyphone();
  			foreach ($list1 as $r1) {
  			?>
			<a href="index.php?mod=phone&ac=products_detail&id=<?php echo $r1['id']; ?>&cat_id=<?php echo $r1['cat_id']; ?>"><li>
				<img width="150" height="150" src="image/products/<?php echo $r1["images"]; ?>" /><div class="grid-flex"><?php echo $r1['name']; ?><p><?php echo $r1['price']; ?></p></div></li></a>
			
			
			<?php }  ?>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		<div class="container">
			<div style="margin-left: -70px;padding-left: 10px; background-color: #F2F2F2; height: 40px; padding-top: 20px;width: 400%"><h3 class="m_3">Products</h3></div>
		</div>
<?php  


//list 2
//PRODUCTS TO PAGAINATION
$list = $phone->getListphone($position, $display);

foreach ($list as $r) {
	# code...

?>
  
				   <div class="col_1_of_3 span_1_of_3"><a href="index.php?mod=phone&ac=products_detail&id=<?php echo $r['id'] ?>&cat_id=<?php echo $r['cat_id']; ?>">
				     <div class="view view-fifth">
				  	  <div class="top_box">
					  	<h3 class="m_1"><?php echo $r['id']; ?></h3>
					  	<p class="m_2"><?php echo $r['name']; ?></p>
					    <div class="grid_img">
						   <div class="css3"><img width="220px" height="220px" src="image/products/<?php echo $r['images']; ?>" alt=""/></div>
					          <div class="mask">
	                       		<div class="info">Quick View</div>
			                  </div>
	                    </div>
                       <div class="price"><?php echo $r['price']; ?></div>
					   </div>
					    </div>
					   <span class="rating">
				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
				        <label for="rating-input-1-5" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
				        <label for="rating-input-1-4" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
				        <label for="rating-input-1-3" class="rating-star1"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
				        <label for="rating-input-1-2" class="rating-star"></label>
				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
				        <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
		        	  (45)
		    	      </span>
						 <ul class="list">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul  pid=<?php echo $r['id']; ?> class="cart_id icon1 sub-icon1 profile_img" >
							  <li><a  class="active-icon c1" href="#">Add To Cart</a>

								<ul class="sub-icon1 list">
									<li><h3>sed diam nonummy</h3><a href=""></a></li>
									<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>


<?php } 

					//Pagination list
      	   
      	   			 include(ROOT."/module/pagination/index.php");
?>




 