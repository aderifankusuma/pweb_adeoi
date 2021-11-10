<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>SPP</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	body {
	
 margin: 0;

 padding: 0;

 font-family: sans-serif;

 background-color: #191919; 

 background-repeat: no-repeat;

 background-size: cover;

}

.box{

 width: 300px;

 padding: 50px;

 position: absolute;

 top: 50%;

 left: 50%;

 transform: translate(-50%,-50%);

 background: #191919;

 text-align: center;

}

.box h1{

 color: white;

 text-transform: uppercase;

 font-weight: 500;

}

.box input[type = "text"], .box input[type = "password"]{

 border: 0;

 background: none;

 display: block;

 margin: 20px auto;

 text-align: center;

 border: 2px solid #12bcde;

 padding: 14px 10px;

 width: 300px;

 outline: none;

 color: white;

 border-radius: 24px;

 transition: 0.25s;

}

.box input[type = "text"]:focus,.box input[type = "password"]:focus{

 width: 300px;

 border-color: #ffff00;

}



.box input[type = "submit"]

{

  border: 0;

 background: none;

 display: block;

 margin: 20px auto;

 text-align: center;

 border: 2px solid #00ff6e;

 padding: 14px 40px;

 outline: none;

 color: white;

 border-radius: 24px;

 transition: 0.25s;

 cursor: pointer;

}



.box input[type = "submit"]:hover

{

 background: #ffff00;

}
	</style>
	
</head>

  <body>

    <div class="container">
	<?php
	include "koneksi.php";
	
	if( isset( $_REQUEST['submit'] ) ){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		$sql = mysqli_query($koneksi,"SELECT iduser,username,admin,fullname FROM user WHERE username='$username' AND password=md5('$password')");
		
		if( mysqli_num_rows($sql) > 0 ){
			list($iduser,$username,$admin,$fullname) = mysqli_fetch_array($sql);
			
			//session_start();
			$_SESSION['iduser'] = $iduser;
			$_SESSION['username'] = $username;
			$_SESSION['admin'] = $admin;
			$_SESSION['fullname'] = $fullname;
			
			header("Location: ./admin.php");
			die();
		} else {
			//$err = '<strong>ERROR!</strong> Username dan Password tidak ditemukan.';
			//header('Location: ./?err='.urlencode($err));
			
			$_SESSION['err'] = '<strong>ERROR!</strong> Username dan Password tidak ditemukan.';
			header('Location: ./');
			die();
		}
		
	} else {
	?>
      <form class="box" method="post">
		<?php
		if(isset($_SESSION['err'])){
			$err = $_SESSION['err'];
			echo '<div class="alert alert-warning alert-message">'.$err.'</div>';
		}
		?>
        <h1>Login</h1>

        <input type="text" name="username" placeholder="Username">

        <input type="password" name="password" placeholder="Password">
          <input type="submit" name="submit" value="Login">
        <p>&nbsp;</p>
      </form>
	<?php
	}
	?>
    </div> <!-- /container -->
	
	<!-- Bootstrap core JavaScript, Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
		$(".alert-message").alert().delay(3000).slideUp('slow');
	</script>
  </body>
</html>