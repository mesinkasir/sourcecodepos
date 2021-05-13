<?php require "assets/function.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php require "assets/autoloader.php" ?>
	<style type="text/css">
	<?php include 'css/customStyle.css'; ?>
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-12  col-md-3"></div>
<div class="col-12 col-md-6 p-3 p-md-5">
	<div class="login-box text-center p-3 p-md-5">
  <img class="img-fluid text-center" src="https://mesinkasironline.web.app/img/createwebsiteusingangular.png"/>
  	<h3 class="text-center">Login</h3>

  <!-- /.login-logo -->
 
    <p class="login-box-msg">Use email : admin@admin.com / password : 123456748</p>
    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
    
          <button type="submit" name="login" class="btn btn-primary btn-block btn-lg">Log In</button>
    </form>
  </div>
  <br>
  <div class="alert alert-danger" id="error"  style="width: 25%;margin: auto;display: none;"></div>
<?php 

if (isset($_POST['login'])) 
{
	$user = $_POST['email'];
    $pass = $_POST['password'];
    $con = new mysqli('localhost','root','','spectre');

    $result = $con->query("select * from users where email='$user' AND password='$pass'");
    if($result->num_rows>0)
    {	
    	session_start();
    	$data = $result->fetch_assoc();
    	$_SESSION['userId']=$data['id'];
      $_SESSION['bill'] = array();
    	header('location:index.php');
      }
    else
    {
     	echo 
     	"<script>
     		\$(document).ready(function(){\$('#error').slideDown().html('Login Error! Try again.').delay(3000).fadeOut();});
     	</script>
     	";
    }
}

 ?>
</div>
<p class="text-center"><a href="index.php">home page</a></p>
  <p><marquee>
Axcora spectre restaurant web apps , free and open source code present by axcora technology , download and visit we blog on <a href="https://www.hockeycomputindo.com/2010/12/blog-post.html">https://www.hockeycomputindo.com/2010/12/blog-post.html</a>
</marquee></p>

</div>
</body>
</html>
