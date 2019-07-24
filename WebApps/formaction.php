<?php
$email=trim($_POST['email']);
$email=strip_tags($email);
$email=htmlspecialchars($email);
$pass=trim($_POST['password']);
$pass=strip_tags($pass);
$pass=htmlspecialchars($pass);
$conn=mysqli_connect("localhost","root","","test");
if(isset($_POST))
{

		$sql="select * from details where EmailAddress='$email'";
		$result=mysqli_query($conn, $sql);
		$e=mysqli_num_rows($result);
		if($e==1)
		{
			$row = mysqli_fetch_assoc($result) ;

			$psalt = $row['PasswordSalt'] ;
			$phash = $row['PasswordHash'] ;

			$pass = $pass.$psalt;

			$hashed = hash('sha512', $pass) ;

			$encoded = base64_encode($hashed);

			$passHash = substr($encoded,0,87) ;

			if($phash!=$passHash){
					header("location:index.php?WRONG_PASSWORD ");
			}
			else {
        header("location: login.php") ;
			}

		}
		else
		{
			header("location:index.php?INVALID_USERNAME_OR_PASSWORD");
		}


	}


?>
