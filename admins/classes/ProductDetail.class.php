<?php 
/**
* 
*/
class ProductDetail extends Book
{
	/////////////////////PRODUCT_DETAIL/////////////////
	//SELECT ID PRODUCT ===>DELETE DETAIL FROM PRODUCT
	public function getProduct_pro_id($id)
	{
		$sql="select  products.id
		FROM
		products
		INNER JOIN pro_details ON pro_details.pro_id = products.id
		where cat_id='$id' ";
		return $this->query($sql);
	}
	
	//DELETE PRODUCT_DETAIL
	public function delProduct_Det($id,$d)
	{
		$sql="delete  from  pro_details where ".$d;
		return $this->query($sql);
	}
	//INSERT PRODUCT DETAIL
	public function createProduct_Detail($cpu,$ram,$screen,$vga,$storage,$exten_memmory,$cam1,$cam2,$sim,$connect,$pin,$os,$note,$pro_id,$created_at,$updated_at=0)
	{
		$sql="insert into pro_details(cpu,ram,screen,vga,storage,exten_memmory,cam1,cam2,sim,connect,pin,os,note,pro_id,created_at,updated_at) values (:cpu,:ram,:screen,:vga,:storage,:exten_memmory,:cam1,:cam2,:sim,:connect,:pin,:os,:note,:pro_id,:created_at,:updated_at) ";
		$arr = array(":cpu"=>$cpu, ":ram"=>$ram,":screen"=>$screen,":vga"=>$vga,":storage"=>$storage,":exten_memmory"=>$exten_memmory,":cam1"=>$cam1,":cam2"=>$cam2,":sim"=>$sim,":connect"=>$connect,":pin"=>$pin,":os"=>$os,":note"=>$note,":pro_id"=>$pro_id,":created_at"=>$created_at,":updated_at"=>$updated_at);	
		return $this->exeNoneQuery($sql, $arr);
	}
	//UPDATE PRODUCT DETAIL
	public function updateProduct_Detail($cpu,$ram,$screen,$vga,$storage,$exten_memmory,$cam1,$cam2,$sim,$connect,$pin,$os,$note,$pro_id,$created_at=0,$updated_at=0)
	{
		$sql="update pro_details set cpu= :cpu,ram= :ram ,screen= :screen ,vga= :vga ,storage= :storage,exten_memmory= :exten_memmory ,cam1= :cam1 ,cam2= :cam2 ,sim= :sim ,connect= :connect ,pin= :pin ,os= :os ,note= :note,pro_id= :pro_id ,created_at= :created_at ,updated_at= :updated_at where pro_id= :pro_id";

		$arr = array(":cpu"=>$cpu, ":ram"=>$ram,":screen"=>$screen,":vga"=>$vga,":storage"=>$storage,":exten_memmory"=>$exten_memmory,":cam1"=>$cam1,":cam2"=>$cam2,":sim"=>$sim,":connect"=>$connect,":pin"=>$pin,":os"=>$os,":note"=>$note,":pro_id"=>$pro_id,":created_at"=>$created_at,":updated_at"=>$updated_at);	
		return $this->exeNoneQuery($sql, $arr);

	}

	

	//CHECK UNIQUE
	public function checkuni_pro_detail($id)
	{
		$sql="select id from pro_details where pro_id='$id'" ;
		return $this->query($sql);
	}
}
 ?>