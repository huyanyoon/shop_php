
<?php
            include "../../config/config.php";
            include ROOT."/include/function.php";
            spl_autoload_register("loadClass");

           if(isset($_POST['s_email']))
           {
                 $c=$_POST['s_email'];
                 $sql = "SELECT email FROM users WHERE email like '$c' ";
                 $ck=new Book();
                 $r=$ck->exeNoneQuery($sql);
                if($r==1)
                {
                    //echo "already!!";
                    echo "true";
                }
                else
                {
                    //echo "ok";
                    echo "false";
                }
           }
          
           
