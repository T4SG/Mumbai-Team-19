  
  <?php
  if(isset($_POST['submit']))
  {
  $con = mysql_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("hhf", $con);

  $users_name = $_POST['name'];
  $users_email = $_POST['email'];
  $users_website = $_POST['password'];
  $users_comment = $_POST['repassword'];

  

  echo "1";
  
$q1=mysql_query("insert into `users`(u_id,type,email,password) values('','donor','".$users_email."','".$users_website."')");
  //$str= "insert into users(u_id,type,email,password) values('','donor',$users_email,$users_website);";
                $result=mysql_query($q1);
                if(!$result)
                    die(mysql_error());
                
                $sql= "insert into `donor`(donor_id,u_id,name) values('',mysql_insert_id(),'".$users_name."');"; 
                $res=mysql_query($sql);
                if(!$res)
                    die("error");

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}
?>       
	<form id="contact-form1" method="post" name="register1" action="d1.php">
						
							<div class="form-group">
								<input type="text" placeholder="Your Name" class="form-control" name="name" id="name" required>
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Your Email" class="form-control" name="email" id="email" required>
							</div>
							
							<div class="form-group">
								<input type="password" placeholder="Password" class="form-control" name="password" id="password" required>
							</div>
							<div class="form-group">
                                <input type="password" placeholder="Re-enter password" class="form-control" name="repassword" id="repassword" required>
							</div>
							<div>
								<input type="submit" id="contact-submit" class="btn btn-transparent" name="submit" value="Submit">
                                
							</div>						
							
						</form>
					</div>

