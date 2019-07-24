<?php
$conn=mysqli_connect("localhost","root","","test");
$message='';
$count=0;


if(isset($_POST["upload"]))
{
	if($_FILES['file']['name'])
	{
		$filename=explode(".",$_FILES['file']['name']);
		if(end($filename)== "csv")
		{
			$handle=fopen($_FILES['file']['tmp_name'],"r");
			while($data=fgetcsv($handle))
			{
				$email=mysqli_real_escape_string($conn,$data[0]);
				$first_name=mysqli_real_escape_string($conn,$data[1]);
				$last_name=mysqli_real_escape_string($conn,$data[2]);
				$title=mysqli_real_escape_string($conn,$data[3]);
				$password=mysqli_real_escape_string($conn,$data[4]);
				$phone_number=mysqli_real_escape_string($conn,$data[5]);
				$roleid=mysqli_real_escape_string($conn,$data[6]);
				$AssistUser =0;
                $AssistEmployers=0; 
                $AssistJobSeekers=0;
	
				 
				$first_name_length=strlen($first_name);
				$email_length=strlen($email);
				$last_name_length=strlen($last_name);
				$roleid_length=strlen($roleid);
				$password_length=strlen($password);
				
if(((!preg_match("/^[a-zA-Z0-9'-]+$/",$first_name)) ||($first_name_length<2)||($first_name_length>30))&& $count!=0)
{ 
 header("location:admin.php?INVALID_FIRSTNAME");
 exit();
}
else if(((!preg_match("/^[a-zA-Z0-9'-]+$/",$last_name)) ||($last_name_length<1)||($last_name_length>30)) && $count!=0)
{
	header("location:admin.php?INVALID_LASTNAME");
    exit();
}
else if(((!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))||($email_length>50)) && $count!=0)
{ 
   header("location:admin.php?INVALID_EMAIL");
 exit();						
}
else if((!preg_match('/^\d{10}$/', $phone_number))&& $count!=0) 
{
     header("location:admin.php?INVALID_PHONE_NUMBER");
     exit();	
} 
else if(((!preg_match("/^[1-7'-]+$/",$roleid)) || $roleid_length!=1) &&$count!=0)
{
	 header("location:admin.php?INVALID_ROLEID");
     exit();	
}
else if($title!='Mr.' && $title!='Mrs.' && $title!='Miss' && $title!='Ms' && $count!=0)
{
	header("location:admin.php?INVALID_TITLE");
	exit();
}
else if(($password_length<8 || $password_length>20)&& $count!=0)
{
	header("location:admin.php?INVALID_PASSWORD");
	exit();
}
else{
	 while ($roleid!=0)
					 {
					  $AssistJobSeekers = intdiv($roleid,4) ;
					  $roleid = $roleid%4 ;
					  $AssistEmployers = intdiv($roleid,2) ;
				      $roleid = $roleid%2 ;
				      $AssistUser = intdiv($roleid,1) ;
				      $roleid = $roleid%1 ;
					 
					 }

                   $passSalt = substr(md5(rand()), 0, 8) ;

                   $c = $password.$passSalt;

                   $hashed = hash('sha512', $c) ;

                   $encoded = base64_encode($hashed);

                   $passHash = substr($encoded,0,87) ;

				$sql="select EmailAddress from details where EmailAddress='$email'";
		$d1=mysqli_query($conn,$sql);
		$e1=mysqli_num_rows($d1);
		if($e1==0)
		{
			if($count!=0)
			{
           $query="INSERT INTO 
		   details(EmailAddress,FirstName,LastName,Title,PasswordHash,PasswordSalt,PhoneNumber,AssistRole,JobseekerRole,EmployerRole)
		   VALUES('$email','$first_name','$last_name','$title','$passHash','$passSalt','$phone_number','$AssistUser','$AssistJobSeekers','$AssistEmployers')";
			}

		}
		else
		{
				$query="
				UPDATE details 
				SET FirstName='$first_name',
				LastName='$last_name',
				Title='$title',
				PasswordHash='$passHash',
				PasswordSalt='$passSalt',
				PhoneNumber='$phone_number',
				AssistRole='$AssistUser',
				JobseekerRole='$AssistJobSeekers',
				EmployerRole='$AssistEmployers'
				WHERE EmailAddress='$email'";
				
		}
		$count++;
		mysqli_query($conn,$query);
}
		}
			fclose($handle);
			header("location:admin.php?updation=1");
		}
		else
		{
			$message='<label class="text-danger">Please select CSV file only!!</label>';
			
			
		}
	}
	else
	{
	        $message='<label class="text-danger">Please select a file!!</label>';	
	
	
	}
}
if(isset($_GET["updation"]))
{
	$message='<label class="text-success"> Updation done</label>';
	
}
$query="SELECT * FROM focus";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="titleIcon.png" rel="icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
    <style type="text/css">
      body{
		background-image: url("bg.jpg");
      }
      .form{
        margin: 150px auto;
        padding: 25px 20px;
        background: #8D5188;
		background-image: url("bg.jpg");
        box-shadow: 15px 15px 25px #a5a5a5;
        border-radius: 15px;
        color: #fff;
		text-align: center;
		      }
		
	.form .btn btn-info btn-lg {
		position: absolute;
		top: 50%;
		}

      .form h2{
        margin-top: 0px;
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-radius: 10px;
		color: #FAD02C;
      }
	  .form h4{
		  color: #C41432;
	  }
	  .navbar-inverse .navbar-nav>li>a {
		color: #F39B1C;
		}
      .footer{
        padding: 10px;
		background: #F39B1C;
      }
	  .navbar-inverse{
		background:#BCECE0;
		}
	 
    </style>
  </head>
  <body>
    <nav class="navbar-inverse">
      <div class="container-fluid"> 
        <div class="navbar-header"> 
           <a href="index.php"><img src="bgt.png" alt="Smiley face" height="50%" width="50%"></a>
        </div> 
		 
       </div>
    </nav>
	

	<div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-offset-3 ">
          <div class="bslf form">
		  <h2>Welcome Admin!!</h2>
		  	<form method="post" enctype='multipart/form-data'>
				<h4>Upload a User Detail File(only CSV)</h4>
				<div class="file btn btn-lg btn-success" style="position: relative; overflow: hidden;">Choose a file
					<input style="  position: absolute; font-size: 50px;opacity: 0; right: 0; top: 0;"type="file" name="file"/>
				</div>
				<!--<input type="file" name="file" class="btn btn-info btn-lg">-->
				<input type="submit" name="upload" class="btn btn-info btn-lg" value="Upload">
			</form>
				<br />
				<?php echo $message; ?>
		   </div>
		</div>
		</div>
	</div>
    <div class="navbar-default navbar-fixed-bottom">
      <div class="text-center footer">Copyright © 2019 BGT. All Rights Reserved.</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>







