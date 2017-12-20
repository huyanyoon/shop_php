<?php 
session_start(); 
	include "../../config/config.php";
	include ROOT."/include/function.php";
	spl_autoload_register("loadClass");

						$pro =new Book();
						$product= $pro->getProductCart($_SESSION['id_session']);
					//	print_r($product);
						if(!isset($product[0]))  return;
						
						foreach ($product as $r) {
						 ?>
						<tr >
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="image/products/<?php echo $r['images']; ?>" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $r['name']; ?></h4>
										<p><?php echo $r['intro'];?></p>
									</div>
								</div>
							</td>
							<td data-th="Price" class="pricess" value="<?php echo $r['price']; ?>"><?php echo $r['price']; ?></td>
							<td data-th="Quantity">
								<input type="number" class="qty form-control text-center" value="<?php echo $r['qty']; ?>">
							</td>
							<td data-th="Subtotal" class="total text-center"></td>
							<td class="actions" data-th="">
								<button pid="<?php echo $r['id']; ?>" id="upd_cart" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button pid="<?php echo $r['id']; ?>" id="del_cart" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
						
						<?php } ?>
							<tr><td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center net_total"><strong></strong></td>
							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td></tr>
						
						
	<script>
		//COUNT PRICE
	net_total();
	function net_total(){
		var net_total = 0;
		$('.qty').each(function(){
		var row = $(this).parent().parent();
		//row.css('background-color', 'red');
		//var price  = row.find('.price').val();
		var price  = row.find('.pricess').attr('value');
		//alert(price);
		var total = price * $(this).val()-0;
		row.find('.total').html(total);

		

		})
		$('.total').each(function(){
			net_total += ($(this).html()-0);

			});
		
		$('.net_total').html(net_total);
	}
	</script>						