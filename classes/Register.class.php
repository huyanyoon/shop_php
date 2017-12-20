<?php
class Register extends Db{
	
	public function is_loggedin() // can be ->kiem tra dung phai user k
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
		//else return false;
	}
	
	public function redirect($url)// chuyen huong den 1 trang url
	{
		header("Location: $url");
	}
	
	public function doLogout()// ham thoat khoi trang dang nhap
	{
		session_destroy();
		unset($_SESSION['user_session']);
		unset($_SESSION['id_session']);
		return true;
	}
	//Login
	public function getUser($name,$password)
	{
		$sql="select * from users where name = :name && password = :password ";
		$arr = array(":name"=>$name,":password"=>$password);
		$data = $this->exeQuery($sql,$arr);
		if (Count($data)>0) return $data[0];
		else return array();
		
	}
	
	

	//Register THONG TIN USER 
	public function createUser($name,$email,$password,$phone,$address,$status=1,$remember_token="",$created_at,$updated_at=0)
	{
		
		$sql="insert into users(name, email,password,phone,address,status,remember_token,created_at,updated_at) values(:name, :email,:password,:phone,:address,:status,:remember_token,:created_at,:updated_at) ";
		$arr = array(":name"=>$name,":email"=>$email,":password"=>$password,":phone"=>$phone,":address"=>$address,":status"=>$status,":remember_token"=>$remember_token,":created_at"=>$created_at,":updated_at"=>$updated_at);
		return $this->exeNoneQuery($sql, $arr);
		
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