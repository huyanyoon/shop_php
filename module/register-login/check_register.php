
<?php
            include "../../config/config.php";
            include ROOT."/include/function.php";
            spl_autoload_register("loadClass");

           if(isset($_POST['email']))
           {
                 $c=$_POST['email'];
                 $sql = "SELECT email FROM users WHERE email like '$c' ";
                 $ck=new Book();
                 $r=$ck->exeNoneQuery($sql);
                if($r==1)
                {
                    //echo "already!!";
                    echo "false";
                }
                else
                {
                    //echo "ok";
                    echo "true";
                }
           }
           else if (isset($_POST['usernames'])) {
                $cs=$_POST['usernames'];
                 $sql = "SELECT name FROM users WHERE name like '$cs' ";
                 $ck=new Book();
                 $r=$ck->exeNoneQuery($sql);
                if($r==1)
                {
                    //echo "already!!";
                    echo "false";
                }
                else
                {
                    //echo "ok";
                    echo "true";
                }
           }
           
