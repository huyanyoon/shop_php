<?php 

if(!isset($_SESSION['user_session']))
{
	header("location:index.php?login");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cart</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css" media="screen">
	.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}
</style>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
	<div id="res"></div>
	<div class="container">
	<div class="text-center" style="padding-top: 10px;float: left;"><button value="<?php echo BASE_URL; ?>" id="home" type="button" class=" btn btn-default">Home</button></div>
	<script>
			$("#home").click(function(event) {
				var h=$(this).val();
				location.replace(h);
			});
	</script>

	<table id="cart" class="table table-hover table-condensed">
		
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody id="tex">
						
					</tbody>
					<tfoot>
						
						
					</tfoot>
					
				</table>
</div>
</body>
</html>
	
<script>
	jQuery(document).ready(function($) {
		//LOAD CART
		list();
		function list()
		{
			$.post("module/cart/list.php", {url_r:1}, function(result)
			{
      		 $("#tex").html(result);
			});
		}
		//DELTE CART
		 $("body").delegate("#del_cart","click",function(event){
			
			var o=$(this).attr('pid');
			$.post("module/cart/del-upd_cart.php", {o_id: o}, function(result){
       				$("#res").html(result);
		     			 $.post("module/cart/list.php", {url_r:1}, function(result){
					        $("#tex").html(result);

							});
		                
		         });
		});

		 //

		 /////////CHANGE PRICE AFTER KEY UP QUANLITY
		 $("body").delegate(".qty","keyup",function(event){
			event.preventDefault();
			var row = $(this).parent().parent();
			var price  = row.find('.pricess').attr('value');
			var qty = row.find('.qty').val();
			//alert(price);
			if (isNaN(qty)) {
				qty = 1;
			};
			if (qty < 1) {
				qty = 1;
			};
			var total = price * qty;
			row.find('.total').html(total);

			var net_total=0;
			$('.total').each(function(){
				net_total += ($(this).html()-0);
			})
			$('.net_total').html(net_total);

		})
		

	
	});
</script>

