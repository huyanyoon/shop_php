<?php
class Book extends Db{

	/////////////////////////////////CATEGORY/////////////////
			//public function delCategory1($id)
			//{
			//	$sql="delete from category where id=@id";
			//	$arr =  Array("@id"=>$id);
			//	return $this->exeNoneQuery($sql, $arr);	
			//}
		//second delete from product first
		public function delCategory($id)
		{
			$sql="delete from category where id=$id";
			//$arr =  Array("@id"=>$id);
			return $this->query($sql);	
		}

	
	public function getCategory_Page()
	{
		$sql="select * from category";
		return $this->query($sql);
	}
	//GET ALL CATEGORY
	public function getCategory($start,$limit)
	{
		$sql="select * from category LIMIT $start,$limit";
		return $this->query($sql);
	}
	// GET A CATEGORY
	public function getACategory($id)
	{
		$sql="select * from category where id=$id";
		return $this->query($sql);
	}
	//CREATE CATEFORY
	public function createCategory($id,$name,$slug,$parent_id=1,$created_at=0,$updated_at=0)
	{
		
		
		$sql="insert into category(id, name, slug,parent_id,created_at,updated_at) values(:id, :name, :slug, :parent_id, :created_at, :updated_at) ";
		$arr = array(":id"=>$id, ":name"=>$name,":slug"=>$slug,":parent_id"=>$parent_id,":created_at"=>$created_at,":updated_at"=>$updated_at);
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