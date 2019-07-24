<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="titleIcon.png" rel="icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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
      }
      .form h2{
        margin-top: 0px;
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-radius: 10px;
		color: #FAD02C;
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
          <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"> 
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
          </button> 
          <a href="index.php"><img src="bgt.png" alt="Smiley face" height="50%" width="50%"></a>
        </div> 
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse"> 
          <ul class="nav navbar-nav"> 
            <li>
              <a href="index.php"><h4 style="font-weight: bolder;">Login</h4></a>
            </li> 
            <li>
             <a href="admin.php"><h4 style="font-weight: bolder;">Admin</h4></a>
            </li>
          </ul> 
        </div> 
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-offset-3 ">
          <div class="bslf form">
            <form action="formaction.php" method="post">
              <h2 class="text-center">LOGIN</h2>       
              <div class="form-group">
                 <input type="text" class="form-control" placeholder="Username" required="required" name="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="required" name="password">
              </div>
              <div class="form-group clearfix">
                 <button type="submit" class="btn btn-primary">Log in</button>
              </div>
                   </form>
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