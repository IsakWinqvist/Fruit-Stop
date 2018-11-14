<?php
include('includes/db_connect.php');
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); die();
    }
?>
<html>
<?php include 'head.php';?>
    <body>
		<div class="container">
			<?php include 'header.php';?>
			<p>This is admin page viewable only by logged in users.</p>
			
			<a class="btn btn-danger" href="delete.php" role="button">delete product</a>
			<a class="btn btn-primary" href="update.php" role="button">update product</a>
			<a class="btn btn-success" href="add.php" role="button">add product</a>
			
			<!-- logout stuff -->
				<?php
			  if(isset($_POST['logout'])){
				  session_destroy(); header('LOCATION:index.php'); die();
			  }
			?>
			<form action="" method="post">
				<button type="logout" name="logout" class="btn btn-default">Log out</button>
			</form>
		
			<?php include 'footer.php';?>
		</div>
    </body> 
</html>