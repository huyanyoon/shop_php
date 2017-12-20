<?php
class Product extends Db{

	/////////////////////////////////PRODUCT/////////////////
	
		//second delete from product first	
	//GET ALL PRODUCT
	public function getProduct()
	{
		$sql="select * from products";
		return $this->query($sql);
	}
	// GET A PRODUCT
	public function getAProduct($id)
	{
		$sql="select * from products where id=$id";
		return $this->query($sql);
	}
	//CREATE PRODUCT
	public function createProduct($id,$name,$slug,$intro,$promo1,$promo2,$promo3,$packet,$images,$r_intro,$review,$tag,$price,$status=1,$cat_id,$user_id=1,$created_at,$updated_at=0)
	{
		$sql="insert into products(id, name, slug,intro,promo1,promo2,promo3,packet,images,r_intro,review,tag,price,status,cat_id,user_id,created_at,updated_at)
		values (:id, :name, :slug,:intro,:promo1,:promo2,:promo3,:packet,:images,:r_intro,:review,:tag,:price,:status,:cat_id,:user_id,:created_at,:updated_at)";

		$arr = array(":id"=>$id, ":name"=>$name,":slug"=>$slug,":intro"=>$intro,":promo1"=>$promo1,":promo2"=>$promo2,":promo3"=>$promo3,":packet"=>$packet,":images"=>$images,":r_intro"=>$r_intro,":review"=>$review,":tag"=>$tag,":price"=>$price,":status"=>$status,":cat_id"=>$cat_id,":user_id"=>$user_id,":created_at"=>$created_at,":updated_at"=>$updated_at);	

		return $this->exeNoneQuery($sql, $arr);
	}
	//UPDATE CATEFORY
	public function updateProduct($id,$name,$slug,$intro,$promo1,$promo2,$promo3,$packet,$images,$r_intro,$review,$tag,$price,$status=1,$cat_id,$user_id=1,$created_at,$updated_at=0)
	{

		$sql="update products set id=:id,name= :name,slug= :slug,intro= :intro,promo1= :promo1,promo2= :promo2,promo3= :promo3,packet= :packet,images= :images,r_intro=:r_intro,review=:review,tag=:tag,price=:price,status=:status,cat_id=:cat_id,user_id=:user_id,created_at=:created_at,updated_at=:updated_at where id= :id ";
		$arr = array(":id"=>$id, ":name"=>$name,":slug"=>$slug,":intro"=>$intro,":promo1"=>$promo1,":promo2"=>$promo2,":promo3"=>$promo3,":packet"=>$packet,":images"=>$images,":r_intro"=>$r_intro,":review"=>$review,":tag"=>$tag,":price"=>$price,":status"=>$status,":cat_id"=>$cat_id,":user_id"=>$user_id,":created_at"=>$created_at,":updated_at"=>$updated_at);
		return $this->exeNoneQuery($sql, $arr);

	}
	//DELETE PRODUCT
	public function delProduct($id)
	{
		$sql="delete  from  products where id='$id'";
		return $this->query($sql);
	}
	/////////////JOIN DATE TO PRODUCT DETAIL
	public function get_ProductDetail($id)
	{
		$sql="select
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
		pro_details.note,
		products.id,
		pro_details.pro_id
		FROM
		products
		INNER JOIN pro_details ON pro_details.pro_id = products.id where products.id='$id'";
		return $this->query($sql);
	}
	

	

/////////////////////DETAIL_IMG/////////////////
	//DELETE DETAIL_IMG
	public function delDetail_img($id,$d)
	{
		$sql="delete  from  pro_details where ".$d;
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
	public function getDetailProduct($cat_id)
	{
		$sql="select * from products  where cat_id=$cat_id";
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
		category.id,
		category.parent_id,
		products.name,
		category.name,
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
				*
				FROM
				products
				INNER JOIN pro_details ON pro_details.pro_id = products.id
				INNER JOIN category ON products.cat_id = category.id
				WHERE products.name like '$name'
				 || products.slug like '$name' ||
				  category.name like '$name' ||
				   category.slug like '$name'
				   ORDER BY products.id ASC LIMIT $position, $display
				";
				return $this->query($sql);
	}

}
?>