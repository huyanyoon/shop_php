<?php
class Banner extends Db{
	public function getHeadBanner()
	{
		$sql="select * from banners";
		return $this->exeQuery($sql);	
	}
	
	
	
}
?>