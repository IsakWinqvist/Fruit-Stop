<?php
include('includes/db_connect.php');
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); die();
    }
	
if (isset($_POST['categoryid'])){
	if($_POST['categoryid']=="Frukt") {
		$category = 0;
	} elseif($_POST['categoryid']=="Grönsaker") {
		$category = 1;
	} elseif($_POST['categoryid']=="Bär") {
		$category = 2;
	};
};	

if(isset($_POST) && !empty($_POST)) {
		
	$sql ="INSERT INTO products (name, categoryid) VALUES(:name, :categoryid)";
	$result = $conn->prepare($sql);
	$res = $result->execute(
		array(
			':name' => $_POST['name'],
			':categoryid' => $category
		)	
	);
	if($res) {
		$output = "product added";
	} else {
		$output = "big problem";
	}	
}
?>
<!doctype html>
<html lang="en">
<?php include 'head.php';?>
    <body>
		<div class="container">
			<?php include 'header.php';?>
			<p>This is admin page viewable only by logged in users.</p>
			
			<a class="btn btn-danger" href="delete.php" role="button">delete product</a>
			<a class="btn btn-primary" href="update.php" role="button">update product</a>
			<a class="btn btn-success" href="add.php" role="button">add product</a>

			<!-- add product -->
			<h1>Add Product</h1>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="categoryid">
				<p class="font-weight-bold"><label>name</label><br>
					<input size="35" type="text" name="name"</p>
				<p class="font-weight-bold"><label>category</label><br>
					<select name="categoryid"></p>
						<option value="Frukt">Frukt</option>
						<option value="Grönsaker">Grönsaker</option>
						<option value="Bär">Bär</option>
					</select>
						
				<p><button type="submit">Submit</button></p>
					<?php if(!empty($output)) { echo '<h3>' . $output . '</h3>'; }; ?>
					<?php include 'footer.php';?>
			</form>
	
		</div>
    </body> 
</html>