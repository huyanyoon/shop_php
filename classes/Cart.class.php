<?php
class Cart extends Db{
	
	
	////////////////////////NO USER/////////////////////////

	//TO COUNT NUMBER CART
	public function getNumCartNoUser($ip_add)
	{
		$sql = "SELECT COUNT(*) AS count_i FROM oders WHERE ip_add = '$ip_add' AND c_id = 0";
		return $this->exeQuery($sql);
	}
	//GET ALL CART NO USER
	public function getCartNoUser($ip_add)
	{
		$sql = "SELECT
				oders.c_id,
				oders_detail.pro_id,
				oders_detail.o_id
				FROM
				oders
				INNER JOIN oders_detail ON oders_detail.o_id = oders.id
				WHERE ip_add = '$ip_add' AND c_id = 0";
		return $this->exeQuery($sql);
	}
	//EXIST of USER?
	public function checkpro_NoUser($ip_add,$pro_id)
	{
		$sql = "SELECT COUNT(*) as c
				FROM
				oders
				INNER JOIN oders_detail ON oders_detail.o_id = oders.id
				WHERE  ip_add = '$ip_add' AND pro_id = '$pro_id' AND c_id=0";
		return $this->exeQuery($sql);
	}

	
	
	//TAO ORDER
	public function createOrders_Nouser($c_id=0,$ip_add)
	{
		
		$sql="INSERT INTO oders (c_id,ip_add) VALUES ($c_id,'$ip_add')";
	
		$a=$this->ex($sql);
		
		return $a;
		
	}
	//TAO ORDER DETAIL
	public function createOrders_Detail($pro_id,$qty=1,$lid,$created_at,$updated_at=0)
	{
		
		//$sql="INSERT INTO oders (c_id,ip_add) VALUES ($c_id,'$ip_add')";
	
$sql="INSERT INTO oders_detail (pro_id,qty,o_id,created_at,updated_at) VALUES('$pro_id','$qty','$lid','$created_at',0)";
		
		 return $this->exeQuery($sql);
		
		
	}
	//////////////////////// USER/////////////////////////
	//TO COUNT NUMBER CART
	public function getNumCartUser($id)
	{
		$sql="SELECT COUNT(*) AS count_i FROM oders WHERE c_id = $id";
		return $this->exeQuery($sql);
	}
	//check exist PRODUCT
	public function checkpro_User($user_id,$pro_id)
	{
		$sql = "SELECT COUNT(*) as c
				FROM
				oders
				INNER JOIN oders_detail ON oders_detail.o_id = oders.id
				WHERE  c_id = '$user_id' AND pro_id = '$pro_id' ";
		return $this->exeQuery($sql);
	}
	//check exist PRODUCT to update
	public function checkpro_Users($user_id,$pro_id)
	{
		$sql = "SELECT pro_id as id
				FROM
				oders
				INNER JOIN oders_detail ON oders_detail.o_id = oders.id
				WHERE  c_id = '$user_id' AND pro_id = '$pro_id' ";
		return $this->exeQuery($sql);
	}
	public function getid_Orders($pro_id,$ip_add)
	{
		$sql = "SELECT oders.id
				FROM
				oders
				INNER JOIN oders_detail ON oders_detail.o_id = oders.id
				WHERE  ip_add = '$ip_add' AND pro_id = '$pro_id' AND c_id = 0 ";
		return $this->exeQuery($sql);
	}
	//
	//////////////////
	public function createOrders_User($c_id,$ip_add)
	{
		
		$sql="INSERT INTO oders (c_id,ip_add) VALUES ('$c_id','$ip_add')";
	
		$a=$this->ex($sql);
		
		return $a;
		
	}
	public function updateOrders($user_id,$ip_add)
	{
		$sql="UPDATE oders SET c_id = '$user_id' WHERE ip_add = '$ip_add' AND c_id = 0";
		return $this->exeQuery($sql);
	}
	public function deleteOrders($o_id)
	{
		$sql="DELETE FROM oders WHERE id = '$o_id'";
		return $this->exeQuery($sql);
	}














	//UPDATE CATEFORY
	public function updateCategory($id,$name,$slug,$parent_id=1,$created_at=0,$updated_at=0)
	{
		$sql="update category set id=:id,name= :name,slug= :slug,parent_id= :parent_id,created_at= :created_at,updated_at= :updated_at where id= :id ";
		$arr = array(":id"=>$id, ":name"=>$name,":slug"=>$slug,":parent_id"=>$parent_id,":created_at"=>$created_at,":updated_at"=>$updated_at);
		return $this->exeNoneQuery($sql, $arr);

	}

}
?>