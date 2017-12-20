<?php
    //goi thu vien
    require 'lib/PhpMailer/PHPMailerAutoload.php';
    include('lib/PhpMailer/class.smtp.php');
    include ('lib/PhpMailer/class.phpmailer.php'); 
    
    $nFrom = "3EWebsite";    //mail duoc gui tu dau, thuong de ten cong ty ban
    $mFrom = 'website.threee@gmail.com';  //dia chi email cua ban 
    $mPass = '#^*site.368';       //mat khau email cua ban
    $nTo = 'dpi'; //Ten nguoi nhan
    $mTo = 'clickbyme@gmail.com';   //dia chi nhan mail
    $mail             = new PHPMailer();
    $body             = 'Kính gửi người dùng 3EWebsite!

Chúng tôi nhận được yêu cầu truy cập vào Tài khoản 3EWebsite của bạn clickbyme@gmail.com thông qua địa chỉ email của bạn. Mã xác minh 3EWebsite của bạn là:
<br>
<h2><strong>'.$result.'</strong></h2>
<br>
Nếu bạn không yêu cầu mã này thì có thể là ai đó đang cố truy cập vào Tài khoản 3EWebsite clickbyme@gmail.com. Đừng chuyển tiếp hoặc cung cấp mã này cho bất kỳ ai.

Bạn nhận được thông báo này vì địa chỉ email này được liệt kê là email khôi phục cho tài khoản 3EWebsite clickbyme@gmail.com. Nếu điều đó là không chính xác, vui lòng nhấp vào đây để xóa địa chỉ email của bạn khỏi Tài khoản 3EWebsite đó.

Trân trọng!

Nhóm tài khoản 3EWebsite';   // Noi dung email
    $title = ' Mã xác minh 3EWebsite ';   //Tieu de gui mail
    $mail->IsSMTP();             
    $mail->CharSet  = "utf-8";
    $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;    // enable SMTP authentication
    $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";    // sever gui mail.
    $mail->Port       = 465;         // cong gui mail de nguyen
    // xong phan cau hinh bat dau phan gui mail
    $mail->Username   = $mFrom;  // khai bao dia chi email
    $mail->Password   = $mPass;              // khai bao mat khau
    $mail->SetFrom($mFrom, $nFrom);
    $mail->AddReplyTo('clickbyme@gmail.com', 'google'); //khi nguoi dung phan hoi se duoc gui den email nay
    $mail->Subject    = $title;// tieu de email 
    $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
    $mail->AddAddress($mTo, $nTo);
    // thuc thi lenh gui mail 
    if(!$mail->Send()) {
        
         echo '<div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Error! </strong>Check your data. Please!
            </div>';
    } else {
        $flag=1;
    }
?>
