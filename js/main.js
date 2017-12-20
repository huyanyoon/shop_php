   $(document).ready(function() {
   			//HEADER
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
            //BODY//////////////////////////////////////////////////
            count_item();
			function count_item(){

				 $.post("module/cart/count.php", {url_r:1}, function(result){
       			 $(".badge").html(result);
       			});
				
			}
            //CLIK ADD TO BAG
            $(".cart_id").click(function(event) {
                event.preventDefault();
               //$(window).bind('scroll');
            	var pid=$(this).attr('pid');
            	//alert(pid);
            	$.post("module/cart/ins_cart.php", {pro_id: pid}, function(result){
       
		     		 count_item();
					 alert(result);
		             //  return false;
		         });
            	


           

            });


        });