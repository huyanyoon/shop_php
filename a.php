<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js" type="text/javascript"></script> 
	
	
</head>
<body>
	<hr>
<?php
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $result = '';
    for ($i = 0; $i < 5; $i++)
        $result .= $characters[mt_rand(0, 61)];
    echo $result;
?>
<hr>
<form onclick="return false" method="POST" role="form">
	<legend>Form title</legend>
	
	<div class="form-group">
		<label for="">label</label>
		<input type="text" class="form-control" name="a" placeholder="Input field">
		<input type="text" class="form-control" name="b" placeholder="Input field">
	</div>
<?php if(isset($_POST['home']))
{
	echo "opkaaaaa";
} ?>
	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<div class="ha">
	
	<form action="" method="POST" role="form"  >
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">label</label>
			<input type="text" class="form-control" id="" placeholder="Input field">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<input id="222" type="text">
</body>
	<script>


$(document).ready(function() {

$(document.body).on("keydown", this, function (event) {
    if (event.keyCode == 116) {
        alert('F5 pressed!');
        $.post('a.php', {home: 'value1'}, function(data, textStatus, xhr) {
        	$(".ha").html(data);
        });
    }
});

$("#222").focus(function(event) {
	$(".ha").addClass('hidden').fadeOut(2000);
	// $(".ha").css("display", "inline").fadeOut(2000);
});
$("#222").focusout(function(event) {
	$(".ha").removeClass('hidden').fadeIn(2000);
});

});
</script>


<time datetime="2017-12-11 22:17+0700">TIME</time>
</html>
<hr>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(function(){
    var message = 'Học Web Chuẩn';
    $('div.test').bind('click',{msg: message},function(event){
        $('span').text('Đã click ' + event.data.msg);
    });
});
</script>
</head>


<div class="test">Click me</div>
<span></span>