 <?php
include('inc_header.php');
?>


<?php

$detail_id = mysqli_escape_string($conn, $_GET['detail_id']);

$sql = "SELECT * FROM kamal WHERE id='$detail_id'";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	$info = mysqli_fetch_array($result);
		
		$full_name=$info['full_name'];
		$email=$info['email'];
		$message=$info['message'];
		$date=$info['date_submitted'];
		


print "		
			<b>Full name:</b> $full_name<br/>			
			<b>Email:</b> $email<br/>			
			<b>Message:</b> $message<br/>
			<br/>
			<b>Date_submitted:</b> $date<br/>
			
		";
	

?>


	<?php
include('footer.php');
?>
</body>
</html>