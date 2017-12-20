<?php
class Book extends Db{
	
	//GET PRODUCT/.........................
	public function getProductCart($user_name)
	{
		$sql="SELECT
				products.price,
				products.`name`,
				products.images,
				oders_detail.pro_id,
				oders_detail.created_at,
				oders_detail.updated_at,
				products.intro,
				oders.id,
				oders_detail.qty
				FROM
				oders
				INNER JOIN oders_detail ON oders_detail.o_id = oders.id
				INNER JOIN products ON oders_detail.pro_id = products.id 
				WHERE c_id= '$user_name'
				";
			
		return $this->query($sql);
	}

	//GET List like pagination
	public function getListphone($position, $display)
	{
		$sql="select * from products ORDER BY id ASC LIMIT $position, $display";
		
		return $this->query($sql);
	}
	//GET 10 PRODUCTS
	public function getOnlyphone()
	{
		$sql="select * from products  ORDER BY id ASC LIMIT 10";
		return $this->query($sql);
	}
	//LAY NHUNG SAN PHAM LIEN QUAN DEN THONG TIN
	public function get_imgDetailProduct($id)
	{
		$sql="select
			products.`name`,
			products.slug,
			products.intro,
			products.promo1,
			products.promo2,
			products.promo3,
			products.packet,
			products.images,
			products.r_intro,
			products.review,
			products.tag,
			products.price,
			products.`status`,
			pro_details.cpu,
			pro_details.ram,
			pro_details.screen,
			pro_details.vga,
			pro_details.`storage`,
			pro_details.exten_memmory,
			pro_details.cam1,
			pro_details.cam2,
			pro_details.sim,
			pro_details.connect,
			pro_details.pin,
			pro_details.os,
			pro_details.note
			FROM
			products
			INNER JOIN pro_details ON pro_details.pro_id = products.id
			
			WHERE products.id='$id'
			";
		return $this->query($sql);
	}
	//GET ONLY PRODUCT
	public function getOnlyProduct($id)
	{
		$sql="select * from products INNER JOIN pro_details ON pro_details.pro_id = products.id where pro_details.id=$id ";
		return $this->query($sql);
	}
		//GET THE PRODUCT WITH SAME TYPE

	public function getProductSameType($id)
	{
		$sql="select products.id,
		products.cat_id,
		products.user_id,
		products.name,
		products.images,
		products.price
		FROM
		products
		INNER JOIN category ON products.cat_id = category.id
		WHERE products.cat_id=$id ";
		return $this->query($sql);
	}
	//SEARCH products by name
	public function searchProductName($name,$position, $display)
	{
		$sql="select
				products.id,
				products.`name`,
				products.images,
				products.price,
				products.cat_id
				FROM
				products
				INNER JOIN pro_details ON pro_details.pro_id = products.id
				INNER JOIN category ON products.cat_id = category.id
				WHERE products.name like '%$name%'
				 || products.slug like '%$name%' ||
				  category.name like '%$name%' ||
				   category.slug like '%$name%'
				   ORDER BY products.id ASC LIMIT $position, $display
				";
				return $this->query($sql);
	}

}
?>