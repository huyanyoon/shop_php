<?php
$page_url = ""; // địa chỉ truy cập file index. $page_url = "localhost/pagi_php/index.php";
 
$display = 9; // số món ăn (số hàng) hiển thị trên 1 trang
 
$num_links = 2; // Số link muốn hiển thị (2 link bên trái và 2 link bên phải của trang hiện tại)

 $mod = getIndex("mod");
  $pagination = new Pagination();

 //paginatinon by SEARCH
 if($mod=="search")
{
  $name=postIndex('search');
   $pagination->paginatinonSearch($name);
}
else
{
  //paginatinon BY DEFAULT LIST
  $pagination->list_default();//ready
}

//$phone->query("select * from products");


$total_rows=$pagination->getRowCount();// den ket qua thuc thi
//========OR===========
//$result = $records->fetchAll(PDO::FETCH_OBJ);
//$total_rows =count($result);

if(isset($_GET['page']) && is_numeric($_GET['page']))
{
      $curr_page = $_GET['page'];
}
 
else
{
     //nếu không tồn tại trang thì mặc nhiên sẽ là trang 1
     $curr_page = 1;
}


$position = ($curr_page - 1)*$display;
 
$total_pages = ceil($total_rows / $display);

if($curr_page > $num_links)
{
   $start = $curr_page - ($num_links - 1);
}
else
{
   $start = 1;
}


if(($curr_page + $num_links ) < $total_pages)
{
     $end = $curr_page + $num_links;
}
else
{
    $end = $total_pages;
}


?>


