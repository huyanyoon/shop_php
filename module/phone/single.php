

<title>products_Detail</title>
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 260,
								thumb_image_height: 270,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
<!-- top scrolling -->
<style type="text/css" media="screen">
hr{
	
	border-top: 4px  #8c8b8b;
	text-align: center;
}
					
				</style>				

  
  
       <div class="single">
         <div class="wrap">
     	    <div class="rsidebar span_1_of_left">
				   <section  class="sky-form">
                   	  <h4>Occasion</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>
						 </div>
                   	  <h4>Category</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flats (70)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Heels (38)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>
						</div>
					  <h4>Styles</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ballerina (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pumps (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>High Tops (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>
						</div>
				  </section>
		          <section  class="sky-form">
					<h4>Brand</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Adidas by Stella McCartney</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Asics</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch Kids</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Capezio Kids</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
							</div>
						</div>
		         </section>
		         <section  class="sky-form">
					<h4>Heel Height</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flat (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Under 1in(5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1in - 1 3/4 in(5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2in - 2 3/4 in(3)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>3in - 3 3/4 in(2)</label>
							</div>
						</div>
		        </section>
		        <section  class="sky-form">
					<h4>Price</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
							</div>
						</div>
		        </section>
		        <section  class="sky-form">
					<h4>Colors</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Red</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i></label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							</div>
						</div>
		        </section>
		</div>
		<?php 
		$cat_id=$_GET['cat_id']; 
				     	$id=$_GET['id'];
   						$detailproduct=$phone->get_imgDetailProduct($id);
   						if(!isset($detailproduct[0])) 
   						{
   							echo "Data Unknown!";
   							exit();
   						}
   						//echo "<pre>";
						//print_r($detailproduct[0]['images_url']);
					
		 ?>
		<div class="cont span_2_of_3">
			  <div class="labout span_1_of_a1">
				<!-- start product_slider -->
				     <ul id="etalage">
				     	<?php
				     	//show multi images

						foreach ($detailproduct as $r) {
						
				     	 ?>
							<li>
						<img class="etalage_thumb_image" src="image/products/<?php echo $r['images']; ?>" />
						<img  class="etalage_source_image" src="image/products/<?php echo $r['images']; ?>" />
							
							</li>
							
							<?php } 
							//show info products
							// 
   							//$infoproduct=$phone->getOnlyProduct($id);
   							//print_r($infoproduct);
   							// SHOW THE SAME PRODUCTS 
         					$Sameproduct=$phone->getProductSameType($cat_id);
         					 
							?>
						</ul>
					
				
			<!-- end product_slider -->
			</div>
			<?php //if(!isset($infoproduct[0])) 
   								{
   									//echo "<div style='float:right'>";
   									//echo '<img width="450" src="images/404.jpg" alt="Không có hình"></div>';
   									//return ;
   								} ?>
			<div class="cont1 span_2_of_a1">
				<h3 class="m_3"><?php echo $detailproduct[0]['name']; ?></h3>	
				
				<div class="price_single">
							 
							  <span class="actual"><?php echo $detailproduct[0]['price']; ?></span><a href="#">click for offer</a>
							</div>
				<ul class="options">
					<h4 class="m_9">Select a Size</h4>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<div class="clear"></div>
				</ul>
				<div class="btn_form">
				   <form  action="a.php" target="_blank" method="POST">
				   
					 <input type="submit" value="buy now" name="Process" title="buy" style="background-color: #E00000">
					<input type="submit" value="Trả Góp"  name="Process" title="gop">
				  </form>

				</div>
				
				<ul class="add-to-links">
    			   <li><img src="images/wish.png" alt=""/><a href="#">Add to wishlist</a></li>
    			</ul>
    			<h2>THÔNG TIN PREVIEW</h2>
    			<p class="m_desc"><?php echo $detailproduct[0]['intro']; ?></p>
    			
                <div class="social_single">	
				   <ul>	
					  <li class="fb"><a href="#"><span> </span></a></li>
					  <li class="tw"><a href="#"><span> </span></a></li>
					  <li class="g_plus"><a href="#"><span> </span></a></li>
					  <li class="rss"><a href="#"><span> </span></a></li>		
				   </ul>
			    </div>
			</div>
			<div class="clear"></div>
     
     	<h3 class="m_3" style="background-color: #F2F2F2; height: 40px; padding-top: 20px;">SẢN PHẨM TƯƠNG TỰ</h3>

         <ul id="flexiselDemo3">
		<?php foreach ($Sameproduct as $r2) {
			# code...
		?>
		<a href="index.php?mod=phone&ac=products_detail&id=<?php echo $r2['id']; ?>&cat_id=<?php echo $r2['cat_id']; ?>">
			<li><img src="image/products/<?php echo $r2['images']; ?>" /><div class="grid-flex"><?php echo $r2['name']; ?><p><?php echo $r2['price']; ?></p></div></li>
		</a>
			<?php } ?>
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

	 <div class="toogle">
     	<h3 class="m_3" style="background-color: #F2F2F2; height: 40px; padding-top: 20px;">THÔNG SỐ KĨ THUẬT</h3>
     	<div >CPU</div>
     	<div class="m_desc"><?php echo $detailproduct[0]['cpu']; ?></div>
     	<hr>
     	<div>RAM</div>
     	<div><?php echo $detailproduct[0]['ram']; ?></div>
     	<hr>
     	
     	<div>MÀN HÌNH</div>
     	<div><?php echo $detailproduct[0]['screen']; ?></div>
     	<hr>
     	
     	<div>VGA</div>
     	<div><?php echo $detailproduct[0]['vga']; ?></div>
     	<hr>
     	
     	<div>BỘ NHỚ TRONG</div>
     	<div><?php echo $detailproduct[0]['storage']; ?></div>
     	<hr>
     	<div>BỘ NHỚ NGOÀI</div>
     	<div><?php echo $detailproduct[0]['exten_memmory']; ?></div>
     	<hr>
     	<div>CAMERA TRƯỚC</div>
     	<div><?php echo $detailproduct[0]['cam1']; ?></div>
     	<hr>
     	<div>CAMERA SAU</div>
     	<div><?php echo $detailproduct[0]['cam2']; ?></div>
     	<hr>
     	<div>CONNECT</div>
     	<div><?php echo $detailproduct[0]['connect']; ?></div>
     	<hr>
     	<div>SIM</div>
     	<div><?php echo $detailproduct[0]['sim']; ?></div>
     	<hr>
     	<div>PIN</div>
     	<div><?php echo $detailproduct[0]['pin']; ?></div>
     	<hr>
     	<div>HỆ ĐIỀU HÀNH</div>
     	<div><?php echo $detailproduct[0]['os']; ?></div>
     	<hr>
     	<div>THÔNG TIN THÊM</div>
     	<div><?php echo $detailproduct[0]['note']; ?></div>
     	

     	
     	
     	
     	
     </div>					
	 <div class="toogle">
     <h3 class="m_3" style="background-color: #F2F2F2; height: 40px; padding-top: 20px;">ĐIỂM NỔI BẬT</h3>
     	<p class="m_text"><?php echo $detailproduct[0]['r_intro'];?></p>
     </div>
     </div>
     <div class="clear"></div>
	 </div>
     </div>

    <?php 
   	
				     		
     ?>
	 
       
