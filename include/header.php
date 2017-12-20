<?php

include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");

?>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<link href="css/search.css" rel="stylesheet" type="text/css" media="all" />
<!-->
</!-->
 <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
    <div class="header-top">
     <div class="wrap"> 
        <div class="logo">
            <a href="index.php"><img style="float: left;" wigth="182" height="71" src="images/logo-main.png" alt=""/></a>
     
        </div>
      
        <div  class="cssmenu" style="float: right; padding-top: 20px;padding-right: 100px">
           <ul>
           
             <li><a href="index.php?cart"><img width=24 height=22 src="images/cart.png" alt="tata">Cart<span class="badge"> </span></a></li>
            <?php if(isset($_SESSION['user_session'])) 
            {
                ?><li><a href=""><img width=20 height=18 src="images/iconman.png" alt="tata"> Hello <?php echo $_SESSION["user_session"]; ?></a></li>
                    <li><a  href="index.php?log_out=true"><img width=20 height=18 src="images/exit.png" alt="tata"> Thoát</a></li>
                <?php
             }
            else
            {
                echo '<li class="active"><a href="index.php?register"><img width=20 height=18 src="images/register.png" alt="tata"> Sign up & Save</a></li>';
            }
             ?>
            
            
           </ul>
        </div>
    
        <div class="clear"></div>
    </div>
   </div>
   <div class="header-bottom">
    <div class="wrap">
        <!-- start header menu -->
        <ul class="megamenu skyblue">
            <li><a class="color1" href="#">Home</a></li>
            <li class="grid"><a class="color2" href="#">ĐIỆN THOẠI</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Hãng sản xuất</h4>
                                <ul>
                                    <li><a href="module/shop/">Apple (iPhone)</a></li>
                                    <li><a href="module/shop/">Samsung</a></li>
                                    <li><a href="module/shop/">OPPO</a></li>
                                    <li><a href="module/shop/">Sony</a></li>
                                    <li><a href="module/shop/">Vivo</a></li>
                                    <li><a href="shop.php">MEIZU</a></li>
                                    <li><a href="module/shop/"> Xiaomi</a></li>
                                    <li><a href="module/shop/">HTC</a></li>
                                    <li><a href="module/shop/"> Mobiistar</a></li>
                                    <li><a href="module/shop/">kids</a></li>
                                    <li><a href="module/shop/">Wiko</a></li>
                                </ul>   
                            </div>

                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Mức giá</h4>
                                <ul>
                                    <li><a href="shop.html">Dưới 1 triệu</a></li>
                                    <li><a href="shop.html"> Từ 3 - 6 triệu</a></li>
                                    <li><a href="shop.html">Từ 6 - 10 triệu</a></li>
                                    <li><a href="shop.html"> Từ 10 - 15 triệu</a></li>
                                    <li><a href="shop.html">Trên 15 triệu</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <img src="images/nav_img.jpg" alt=""/>
                    </div>
                </div>
                </li>
               <li class="active grid"><a class="color4" href="#">LAPTOP</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Hãng sản xuất</h4>
                                <ul>

                                    <li><a href="shop.html"> Apple (Macbook)</a></li>
                                    <li><a href="shop.html">Asus</a></li>
                                    <li><a href="shop.html">Acer</a></li>
                                    <li><a href="shop.html">HP</a></li>
                                    <li><a href="shop.html">Lenovo</a></li>
                                    <li><a href="shop.html">MSI</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Mức giá</h4>
                                <ul>
                                    <li><a href="shop.html">Dưới 5 triệu</a></li>
                                    <li><a href="shop.html"> Từ 6 - 9 triệu</a></li>
                                    <li><a href="shop.html">Từ 9 - 15 triệu</a></li>
                                    <li><a href="shop.html"> Từ 15 - 20 triệu</a></li>
                                    <li><a href="shop.html">Trên 20 triệu</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        
                        <div class="col1">
                         <div class="h_nav">
                           <img src="images/nav_img1.jpg" alt=""/>
                         </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col2"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                    </div>
                    </div>
                </li>               
                <li><a class="color5" href="#">APPLE</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>popular</h4>
                                <ul>
                                    <li><a href="shop.html">new arrivals</a></li>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">women</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">login</a></li>
                                </ul>   
                            </div>
                            <div class="h_nav">
                                <h4 class="top">man</h4>
                                <ul>
                                    <li><a href="shop.html">new arrivals</a></li>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">women</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>style zone</h4>
                                <ul>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">women</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">brands</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <img src="images/nav_img2.jpg" alt=""/>
                    </div>
                </div>
                </li>
                <li><a class="color6" href="#">SAMSUNG</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>shop</h4>
                                <ul>
                                    <li><a href="shop.html">new arrivals</a></li>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">women</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">brands</a></li>
                                </ul>   
                            </div>  
                            <div class="h_nav">
                                <h4 class="top">TABLET</h4>
                                <ul>
                                    <li><a href="shop.html">trends</a></li>
                                    <li><a href="shop.html">sale</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>                                              
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>man</h4>
                                <ul>
                                    <li><a href="shop.html">new arrivals</a></li>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">women</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>                      
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>help</h4>
                                <ul>
                                    <li><a href="shop.html">trends</a></li>
                                    <li><a href="shop.html">sale</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>account</h4>
                                <ul>
                                    <li><a href="shop.html">login</a></li>
                                    <li><a href="shop.html">create an account</a></li>
                                    <li><a href="shop.html">create wishlist</a></li>
                                    <li><a href="shop.html">my shopping bag</a></li>
                                    <li><a href="shop.html">brands</a></li>
                                    <li><a href="shop.html">create wishlist</a></li>
                                </ul>   
                            </div>                      
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>my company</h4>
                                <ul>
                                    <li><a href="shop.html">trends</a></li>
                                    <li><a href="shop.html">sale</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>popular</h4>
                                <ul>
                                    <li><a href="shop.html">new arrivals</a></li>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">women</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col2"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                    </div>
                </div>
                </li>
                <li><a class="color7" href="#">PHỤ KIỆN</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>shop</h4>
                                <ul>
                                    <li><a href="shop.html">new arrivals</a></li>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">women</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">brands</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>help</h4>
                                <ul>
                                    <li><a href="shop.html">trends</a></li>
                                    <li><a href="shop.html">sale</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>my company</h4>
                                <ul>
                                    <li><a href="shop.html">trends</a></li>
                                    <li><a href="shop.html">sale</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>                                              
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>account</h4>
                                <ul>
                                    <li><a href="shop.html">login</a></li>
                                    <li><a href="shop.html">create an account</a></li>
                                    <li><a href="shop.html">create wishlist</a></li>
                                    <li><a href="shop.html">my shopping bag</a></li>
                                    <li><a href="shop.html">brands</a></li>
                                    <li><a href="shop.html">create wishlist</a></li>
                                </ul>   
                            </div>                      
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>my company</h4>
                                <ul>
                                    <li><a href="shop.html">trends</a></li>
                                    <li><a href="shop.html">sale</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>popular</h4>
                                <ul>
                                    <li><a href="shop.html">new arrivals</a></li>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">women</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col2"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                    </div>
                    </div>
                </li>
                <li><a class="color8" href="#">MÁY ĐỔI TRẢ</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>style zone</h4>
                                <ul>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">women</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">brands</a></li>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>popular</h4>
                                <ul>
                                    <li><a href="shop.html">new arrivals</a></li>
                                    <li><a href="shop.html">men</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">login</a></li>
                                </ul>   
                            </div>
                            <div class="h_nav">
                                <h4 class="top">man</h4>
                                <ul>
                                    <li><a href="shop.html">new arrivals</a></li>
                                    <li><a href="shop.html">accessories</a></li>
                                    <li><a href="shop.html">kids</a></li>
                                    <li><a href="shop.html">style videos</a></li>
                                </ul>   
                            </div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                    </div>
                </div>
                </li>

               
                <li><div class="color9" >
                    
                         <form action="index.php?mod=search" method="POST" class="search-wrapper cf">
                            <input type="text" name="search" placeholder="Search here..." required="">
                            <button type="submit" name="sub">Search</button>
                         </form>
                            
                        </div></li>
           </ul>
           <div class="clear"></div>
        </div>
       </div>
   

       
      

