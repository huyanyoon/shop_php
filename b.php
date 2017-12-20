<!DOCTYPE html>
<html>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<body onbeforeunload="return ctime_Cart()">

<p>Close this window, press F5 or click on the link below to invoke the onbeforeunload event.</p>

<a href="https://www.w3schools.com">Click here to go to w3schools.com</a>
      


</body>
<script>
function ctime_Cart() {
    $.post("s.php", {}, function(result){
		         });return true;  
}

</script>
</html>
<?php
session_start();
if(isset($_SESSION))
	echo ($_SESSION['LAST_ACTIVITY']);
	echo "<br>";
	echo time();

 ?>