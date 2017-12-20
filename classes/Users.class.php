<?php
class Users extends Db{

	
	
	public function redirect($url)// chuyen huong den 1 trang url
	{
		header("Location: $url");
	}
	
	
	public function getPassword($email)
	{
		$sql="select password from users where email = :email ";
		$arr = array(":email"=>$email);
		$data = $this->exeQuery($sql,$arr);
		if (Count($data)>0) return $data[0];
		else return array();
		
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