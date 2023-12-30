<?php
 include('inc_header.php');
if(isset($_POST['full_name'])){
	
	$full_name = mysqli_escape_string($conn, $_POST['full_name']);
	$email = mysqli_escape_string($conn, $_POST['email']);
	$message = mysqli_escape_string($conn, $_POST['message']);
	
	$sql_insert = "INSERT INTO kamal (full_name,email,message,date_submitted) VALUES ('$full_name','$email','$message', now())";
	$result_insert = mysqli_query($conn, $sql_insert) or die(mysqli_error($conn));
	if($result_insert){
		$msg = '<p align="center">Thank you for completing the form</p>';
	}
	
}
?>

 

 
 
 
 
 
 
 <div class="container py-5" id="featured-3">
  <h2 class="pb-2 ">contact us on</h2>
  
  <?php
  if(isset($msg)){
	  print $msg;
  }
  ?>
 
 <br>
 📞 : 08089421166
 <br>
 📧 : salubritychatbintkamal@gmail.com
        </p>
		scan for whatsapp contact:</p>
		<img  class="mb-4 " src="images/qr.jpg" alt="" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" Placeholder="li.jpg" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>
       </p>
	   for wellness line:
	   </p>
	   <img  class="mb-4 " src="images/rq.jpg" alt="" width="300" height="300" xmlns="http://www.w3.org/2000/svg" role="img" Placeholder="li.jpg" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em"></text></img>

</p>



 
	   <h2>comment's section</h2>

 <form method="POST" action='contact_us.php'>
			  <div class="row g-3">
				
				<div class="col-7">
				  <label for="username" class="form-label">Fullname</label>
				  <div class="input-group">                
					<input type="text" class="form-control" placeholder="Fullname" name="full_name" required>             
				  </div>
				</div>
				
				<div class="col-7">
				  <label for="username" class="form-label">Email</label>
				  <div class="input-group">                
					
					<input type="text"  placeholder="email" name="email" class="form-control" required>
				  </div>
				</div>
				
				<div class="col-7">
				  <label for="username" class="form-label">Message/questions</label>
				  <div class="input-group">                
					
					<textarea name="message" required cols="20" rows="5" class="form-control"></textarea>
				  </div>				
			 </div>

			<br/>
			<div class="col-7">
         <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
		  
        </form>
		
		<?php		
		
			$sql = "SELECT * FROM kamal ORDER BY id DESC";
			$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			
			while($info = mysqli_fetch_array($result)){
				$id=$info['id'];
				$full_name=$info['full_name'];
				$email=$info['email'];
				$message=$info['message'];
				
				echo "<br/>$full_name
				<br/>$email<br/>
				 <br/>$message <br/>";
				

			}


		?>	
      </div>
 </div>
  </div>


 
 





<?php include('footer.php');
 ?>