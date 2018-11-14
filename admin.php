<?php
include('includes/db_connect.php');
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); die();
    }
?>
<!doctype html>
<html lang="en">
<?php include 'head.php';?>
    <body>
		<div class="container">
			<?php include 'header.php';?>
			<div class="bg-light">
			<p>This is admin page viewable only by logged in users.</p>
			
			<div class="btn-group" role="group" aria-label="Basic example">
				<a class="btn btn-danger" href="delete.php" role="button">delete product</a>
				<a class="btn btn-primary" href="update.php" role="button">update product</a>
				<a class="btn btn-success" href="add.php" role="button">add product</a>
			</div>
			</div>
		
			<?php include 'footer.php';?>
		</div>
    </body> 
</html>