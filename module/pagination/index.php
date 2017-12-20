<style>
 
 

   .content
  {
    margin-top: 60px;
  }
  h2{
    color:black;
  }
  tbody tr td{
    text-align:center;
  }
  thead th{
    background-color: #F2F2F2;
    padding:10px;
    border-radius:6px;
    color:black;
  }
  tr:nth-child(even) {
    background-color:#FEBFBC;
  }
  ul{
    list-style:none;
  }
  .navigation{
    margin-top:50px;
  }
  .navigation li.single{
    background-color:#F2F2F2;
    padding: 10px;
    border-radius: 5px;
    color:black;
  }
  .navigation li {
    display: inline-block;
    padding:10px;
  }
  .navigation li a{
    color: black;
    text-decoration:none;
  }
   
  .navigation li a,.navigation li a:hover,.navigation li.active a {
    background-color: #FFFFFF;
    border-radius: 5px;
    border:1px solid #F2F2F2;
    cursor: pointer;
    padding: 10px;
  }
  .navigation li a:hover,.navigation li.active a {
    background-color: #F2F2F2;
    color:black;
  }


</style>

<div class="content" style="clear: both; padding-top: 2px">
  
        

     <div class="navigation" align="center">
    <ul>
    <?php
   
         if(isset($total_pages))
         { 
        //  echo "ok";
           if($total_pages > 1) // nếu tổng số trang > 1 in dòng Page..of..      
           {    
            // echo "ok";

            ///////////NUT TRUOC LINK
                echo '<li class="single">Page '.$curr_page. ' of '.$total_pages.'</li>';
               // nếu trang hiện tại lớn hơn số link muốn hiển thị

                
               if($curr_page > $num_links)  
               {  
                   // thì hiển thị nút 'First'
                   echo '<li><a href="'.$page_url.'?page=1">First</a></li>';
               }
               // nếu trang hiện tại > 1
               if($curr_page > 1)
               {
                  // hiển thị nút 'Previous'
                  echo '<li><a href="'.$page_url.'?page='.($curr_page-1).'">Previous</a> </li>';
               }    




               // hiển thị các link bao gồm trang hiện tại và link trang hiển thị (trái và phải) bắt đầu từ $start, kết thúc là $end
              // $start và $end được tính trong pagination.php
              for($pages = $start ; $pages <= $end ;$pages++)
              {
                  if($pages == $curr_page)
                  {
                      echo '<li class="active"><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>';
                  }
                  else
                  {
                  echo '<li><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>'; 
                  }
              }

              ///////////NUT SAU LINK
              // nếu trang hiện tại < tổng số trang           
             if($curr_page < $total_pages )
             { 
                 // thì hiển thị nút 'Next'
                  echo '<li><a href="'.$page_url.'?page='.($curr_page+1).'">Next</a></li>';
             }
             // nếu trang hiện tại + số link muốn hiển thị (ở đây là + với số link bên phải) > tổng số trang
            if(($curr_page + $num_links) <$total_pages )
            {  
            // thì hiển thị nút 'Last'
            echo '<li><a href="'.$page_url.'?page='.$total_pages.'">Last</a> </li>';
            }  
         } //echo "ok";
       }// echo "end";
   ?>
   </ul></div></div>