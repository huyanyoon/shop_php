<?php
class Pagination extends Db{
	
	public function paginatinonSearch($name)
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
				";
				return $this->query($sql);
	}
	public function list_default()
	{
			$sql="select * FROM products";
			return $this->query($sql);
	}

}
?>