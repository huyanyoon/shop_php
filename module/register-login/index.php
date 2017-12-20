<?php 

 			ob_start();
			include "config/config.php";
			include ROOT."/include/function.php";
			spl_autoload_register("loadClass");

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet"  type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style_register.css">

<script type="text/javascript">
	$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>
<?php
//SHOW REGISTER...........................
 if(isset($register)){  ?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$("#register-form-link").addClass('active');
		$("#register-form").addClass('active');
		
	});
</script>
<?php }
//SHOW LOGIN................................
	else if(isset($login))
	{
		?>
		<script type="text/javascript">
			$(document).ready(function() {
			
			$("#login-form").delay(100).fadeIn(100);
	 		$("#register-form").fadeOut(100);
			$('#register-form-link').removeClass('active');
			$('#login-form-link').addClass('active');
			$("#login-form").addClass('active');
			
				})
		</script>
<?php
	}

 ?>


</head>
<div id="alert"></div>
<body>

	<div class="container-fluid">
		<div class="text-center" style="margin-bottom: 10px"><button value="<?php echo BASE_URL; ?>" id="home" type="button" class=" btn btn-default">Home</button></div>
		<div class="ale alert alert-danger" style="display: none;">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>You failed!</strong> Try Again!!
		</div>
		<script>
			$("#home").click(function(event) {
				var h=$(this).val();
				location.replace(h);
			});
		</script>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
    						<div class="row">
							<div class="col-xs-6">
								<a href="#"   id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  action="index.php?register" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="lg_username" id="lg_username" tabindex="1" class="form-control" placeholder="Username" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="lg_password" id="lg_password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember" >
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a id="f_pass" href="#">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="index.php?register" method="post" role="form" style="display: none;" >
									<div class="form-group">
										<input type="text" name="usernames" id="usernames" tabindex="1" class="form-control" placeholder="Username" value="" required>
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="r_password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
									</div>
									<div class="form-group">
										<input type="text" name="phone" id="phone" tabindex="1" class="form-control" placeholder="Phone" value="" required>
									</div>
									<div class="form-group">
										<input type="text" name="address" id="address" tabindex="1" class="form-control" placeholder="Address" value="" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>

								
								<form id="forgot-pass" action="#"  method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="s_email" id="s_email" tabindex="1" class="form-control" placeholder="Email" value="" required>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input style="background-color: #ff4d4d" type="submit" name="forgot-submit" id="forgot-submit" tabindex="4" class="form-control btn btn-login" value="Send">
											</div>
										</div>
									</div>
									
								</form>
								



							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
	<script>
		//FORGOT PASSWORD//////////////////////
		//SHOW
		$("#f_pass").click(function(event) {
			$("#forgot-pass").toggle();
		});

	</script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>js/validation_register.js"></script>
	
	<?php 
	
	//BUTTON REGISTER////////////////
	 if(isset($_POST['register-submit']))
	{

			$re=new Register();
		
			{	
				$upass = strip_tags($_POST['password']);
				$password=md5($upass);
				$usernames = strip_tags($_POST['usernames']);
				$email = strip_tags($_POST['email']);
				$phone = strip_tags($_POST['phone']);
				$address = strip_tags($_POST['address']);
				date_default_timezone_set("Asia/Ho_Chi_Minh");
				$date=date("Y-m-d h:i:sa");
				$re->createUser($usernames,$email,$password,$phone,$address,1,"",$date,0);

				echo '<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Insert Complete!</strong> Ready to Shopping...
				</div>';
			}
		} 
		//BUTTON LOGIN//////////////
		else if(isset($_POST['login-submit']))
		{
			

			$usernames=$_POST['lg_username'];
			$passwords=md5(strip_tags($_POST['lg_password']));
			echo $usernames;
			echo "<br>";
			echo $passwords;
			$re=new Register();
			$user=$re->getUser($usernames,$passwords);
			if(isset($user['id']))
			{
				//DO BEFORE LOG IN
				//READY DATA
				$ip_add = getenv("REMOTE_ADDR");
				//$ip_add ="102.124.1.1";
				//CHECK CART
				$ca=new Cart;
				
				$_SESSION['id_session'] = $user['id'];
				$_SESSION['user_session'] =$user['name'];
				//do checking cart
				include("check_cart.php");
				//
				//GO HOME
				//if(isset($a))
				{
					//INTO USER HOME START SESSION
					
					$d=BASE_URL;
					header("Location:$d");
				}
			}
			else{
				?>
				<script>
					//ALERT ERROR
					$(".ale").removeAttr('style');
				</script>
				<?php
			}
			?>	
			
			<?php
			//print_r($_SESSION);
		}
		//BUTTON FORGOT//////////////////................
		if(isset($_POST['s_email']))
		{
			//$user =new Users();
			//$pass=$user->getPassword($_POST['s_email']);

			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
			$result = '';
		    for ($i = 0; $i < 6; $i++)
		        $result .= $characters[mt_rand(0, 61)];
		    echo $result;

		    $flag=0;
		    include ("module/forgot_password/index.php");	
		    if($flag==1)
		    {

		    }
			
		}	
		ob_end_flush(); 
	?>
	