<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		<?php include ("include/header.php") 
		//$url_r="../config/config.php";
		//include $url_r;
?>
	<nav class="navbar navbar-default" role="navigation">
		<div style="padding-left: 210px" class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>


	</head>
  
	<body>
		<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">[Tên admin]</a><br />
				<br />
				<a href="../" title="View the Site">View the Site</a> 
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="#" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>     
                    <ul>
                    	<li><a hef="#">Đổi mật khẩu</a></li>
                        <li><a href="#">Đổi thông tin </a></li>
                        <li><a href="#" title="Sign Out">Thoát</a></li>
                        
                    </ul>  
				</li>
				
				<li> 
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Quản lý sản phẩm
		      </a>
					<ul class="hello">
						<li><a id="category_show" class="current" href="#">Loại sản phẩm</a></li>
						<li><a href="#" id="product_show">Sản phẩm</a></li>
						<li><a href="#">Khác</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Đơn hàng
					</a>
					<ul class="hello">
						<li><a href="#">Đơn hàng mới đặt</a></li>
						<li><a href="#">Đơn hàng đang xử lý</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Quản lý khác
					</a>
					<ul class="hello">
						<li><a href="#">Tin tức</a></li>
						<li><a href="#">Khách hàng</a></li>
						<li><a href="#">Quảng cáo</a></li>
						<li><a href="#">Góp ý</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Events Calendar
					</a>
					<ul>
						<li><a href="#">Calendar Overview</a></li>
						<li><a href="#">Add a new Event</a></li>
						<li><a href="#">Calendar Settings</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						Settings
					</a>
					<ul class="hello">
						<li><a href="#">General</a></li>
						<li><a href="#">Design</a></li>
						<li><a href="#">Your Profile</a></li>
						<li><a href="#">Users and Permissions</a></li>
					</ul>
				</li>      
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					Download From <a href="http://www.exet.tk">exet.tk</a></div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome [admin]</h2>
		  <p id="page-intro">What would you like to do?</p>
			
			<ul class="shortcut-buttons-set">
				
				<li><a  class="shortcut-button" id="insert_category" href="#"><span>
					<img src="resources/images/icons/pencil_48.png" alt="icon" /><br />
					Create Category
				</span></a></li>
				<!-- MEMORY WITH FORM BUTTON<li>
					<form action="" method="post">
						<div><img class="shortcut-button" src="resources/images/icons/paper_content_pencil_48.png" alt="icon" /></div><input type="hidden" name="ins_pro" />
						<button class="btn btn-default" style="margin-bottom: 20px">Create a Product</button>
					</form>
				</li>
				-->
				
				<li><button class="cr_pro shortcut-button" id="insert_pro"  ><a  href="#"><span>
					<img src="resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Create a Product
				</span></a></button></li>

				<li><a id="insert_prossssss" class="shortcut-button" href="#"><span>
					<img src="resources/images/icons/image_add_48.png" alt="icon" /><br />
					Upload an Image
				</span></a></li>
				<li><a class="shortcut-button" href="#"><span>
					<img src="resources/images/icons/clock_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li>
				
				<li><a class="shortcut-button" href="" rel="modal"><span>
					<img src="resources/images/icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>
				
			</ul>
			
			<div class="clear"></div> <!-- End .clear -->
			<div class="tex">
				<?php 
				$url_a="../config/config.php";//URL ADMIN USING CONFIG LOCALHOST
				//Xử lí dữ liệu nhận khi load trang insert by self

				//////////////////////CATEGORY//////////////////////

				//LOAD INSERT RECEIVE
				if(isset($_POST['id_ins']))
				{
					//echo "ok";
					$url_r=$url_a;
					include("module/category/insert_category.php");
				}
				//LOAD INSERT UPDATE 
				else if(isset($_POST['id_upd']))
				{
					//echo "ok";
					$url_r=$url_a;
					include("module/category/update_category.php");

				}


				////////////////PRODUCT//////////////////
				//LOAD INSERT PRODUCT
				else if(isset($_POST['ins_pro']))
				{
					$url_r=$url_a;
					//include $url_r;
					
					include("module/product/insert_product.php");	

				}
				//LOAD UPDATE WHEN CHOOSE EDIT ID AND POST DATA RELOAD UPDATE
				else if(isset($_POST['upd_pro']))
				{
					
					$url_r=$url_a;
					include("module/product/update_product.php");	

				}



				/////////PRODUCT DETAIL////////////
				//LOAD PRODUCT DETAIL 
				else if (isset($_POST['ins_pr_de-id'])) {
					$url_r=$url_a;
					include $url_r;
					include ROOT."/admins/include/function.php";
					spl_autoload_register("loadClass");
					include("module/product/pro_detail/insert_pro_detail.php");
				}
				else if (isset($_POST['upd_pr_de-id'])) {
					$url_r=$url_a;
					include $url_r;
					include ROOT."/admins/include/function.php";
					spl_autoload_register("loadClass");
					include("module/product/pro_detail/update_pro_detail.php");

					
				}

				//LOAD DEFAULT SHOW CATEGORY
				else
				{
					echo "Please choose function!";
					//$url_r=$url_a;
					//include("module/category/show_category.php");
				}

				 ?>
				</div>

			
		</div> <!-- End #main-content -->
		
	</div></body>

<!-- Download From www.exet.tk-->
</html>

<script  type="text/javascript" charset="utf-8" async defer>

		$(".nav-top-item").click(function() {
			$(".nav-top-item").removeClass('current');
			$(this).attr('class', 'nav-top-item current');
		});
		$(".hello li a").click(function() {
			$(".hello li a").removeClass('current');
			$(this).addClass('current');
		});

</script>