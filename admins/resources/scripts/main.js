$(document).ready(function(){
    //SHOW CATEGORY
	//category_show();

    ///////////////////////////START CATEGORY///////////////////
    function category_show(){
        $.ajax({url: "module/category/show_category.php", success: function(result){
            $(".tex").html(result);
        }});
    };
    //CLICK CATEGORY SHOW
     $("#category_show").click(function(event) {
         
        var purl_r=1;//VALUE FAKE TO USING CONFIG
        $.post("module/category/show_category.php", {url_r:purl_r}, function(result){
        $(".tex").html(result);
        window.location.hash = 'show_category';
       });
    });
   
     //////////LOAD REQUEST BY PHP
   //INSERT CATEGORY
     $("#insert_category").click(function(event) {
         event.preventDefault();
        var purl_r=1;//VALUE FAKE TO USING CONFIG
        $.post("module/category/insert_category.php", {url_r:purl_r}, function(result){
        $(".tex").html(result);
        window.location.hash = 'insert_category';

       });
    });
     
     //UPDATE CATEGORY
     $("body").delegate("#upd_category","click",function(event){
        event.preventDefault();
        var pid = $(this).attr('pid');
        $.post("module/category/update_category.php", {cat_id:pid}, function(result){
          $(".tex").html(result);
        window.location.hash = 'update_category';
         });
    });

    
   //DELETE CATEGORY
    $("body").delegate("#del_category","click",function(event){
		//$("#insert_category").html("<h3>Loading...</h3>");
		event.preventDefault();
		var pid = $(this).attr('pid');

		$.post("module/category/delete_category.php", {cat_id: pid}, function(result){
        //SHOW CATEGORY AFTER DELETE
        var purl_r=1;//VALUE FAKE TO USING CONFIG
        $.post("module/category/show_category.php", {url_r:purl_r}, function(result){
        $(".tex").html(result);
       });

   		 });
	});
     ///////////////////////////END_CATEGORY///////////////////

     ////////////////////////////START PRODUCT/////////////////////
     
     //CLICK PRODUCT SHOW
     $("#product_show").click(function(event) {
         
            var purl_r=1;//VALUE FAKE TO USING CONFIG
        $.post("module/product/show_product.php", {url_r:purl_r}, function(result){
        $(".tex").html(result);
         window.location.hash = 'show_product';

       });
        
    });

     //INSERT PRODUCT
      $("#insert_pro").click(function(event) {
       
        event.preventDefault();
        $(".cr_pro").addClass('hidden');
         var purl_r=1;//VALUE FAKE TO USING CONFIG
        $.ajax({
             async: true, 
            url :   "module/product/insert_product.php",
            method: "POST",
            data    :   {url_r:purl_r},
           
            success :   function(data){


                     $(".tex").html(data);
                
                    setTimeout(function(){
                         $(".cr_pro").removeClass('hidden');

                    }, 1200); 
                
               
            }

        });
       
            
    });
     
      //UPDATE PRODUCT 
      $("body").delegate("#upd_products","click",function(event){
        event.preventDefault();
        var pid = $(this).attr('pid');
        
        $.post("module/product/update_product.php", {pro_id:pid}, function(result){
          $(".tex").html(result);
        window.location.hash = 'update_product';
         
         });
    });
     //DELETE PRODUCT
     $("body").delegate("#del_product","click",function(event){
        event.preventDefault();
        var pid = $(this).attr('pid');
        var pimg=$(this).attr('pimg');
        $.post("module/product/delete_product.php", {pro_id: pid,p_img: pimg}, function(result){
        //SHOW PRODUCT AFTER DELETE
        var purl_r=1;//VALUE FAKE TO USING CONFIG
        $.post("module/product/show_product.php", {url_r:purl_r}, function(result){
        $(".tex").html(result);
       });

         });
    });
   

     ////////////////DETAIL PRODUCT//////////////////
     //SHOW ONE OF ALL=> INSERT OR UPDATE DETAIL
    $("body").delegate("#ins-upd","click",function(event){
        event.preventDefault();
        var pid = $(this).attr('pid');
         var purl_r=1;//VALUE FAKE TO USING CONFIG
        $.post("module/product/pro_detail/index.php", {pro_id: pid,url_r:purl_r}, function(result){
       
        $(".tex").html(result);
        
         });
    })
    //WHEN CLICK UPDATE AFTER CREATED===INDEX.PHP(DETAIL_PRODUCT)-->UPDATE
    $("body").delegate("#upd_pro_det","click",function(event){
        event.preventDefault();
        var pid = $(this).attr('pid');//GET VALUE FROM BUTTON CLICKED
         var purl_r=1;//VALUE FAKE TO USING CONFIG

        $.post("module/product/pro_detail/index.php", {pro_id: pid,url_r:purl_r}, function(result){
       
        $(".tex").html(result);
                
         });
    })
       
       ///////////////PAGINATION/////////////////
       //CATEGORY/////////////////
    $("body").delegate("#pages","click",function(event){
        var pn = $(this).attr("page");
        //alert(pn);
         var purl_r=1;
        $.post("module/category/show_category.php", {url_r:purl_r,page_Number: pn}, function(result){
        $(".tex").html(result);
        window.location.hash = 'show_category';
    });
        
    });
       
    ///////////////////VALIDATE JQUERY////////////////////
    //FORM INSERT//
    //window.location.replace("");//REDIRECT--URL
    ///////////////NOT WORKING/////////////////
      //SAVE DATA=====>METHOD 2 SET DATA BY AJAX =======>RELACE BY INCLUDE===IT S NOT WORKING NOW
     /*
     $("body").delegate("#save","click",function(event)
     {
        var pid=$("#id").val();
        var pname=$("#name").val();
        var pslug= $("#slug").val();
        var pparent_id=$("#parent_id").val();
        $.post("module/category/insert_category.php", {id: pid,name:pname,slug:pslug,parent_id:pparent_id}, function(result){
        $("#tex").html(result);
       });

     });
     */
      
     //////////////////INSERT PRODUCT BY AJAX////////===>NOT WORKING BECAUSE CKEDITOR WILL BE NOT SHOWED SECOND CLICK

     


});
