<?php
include('includes/db_connect.php');
    session_start();
    if(!isset($_SESSION['login'])) {
        header('LOCATION:login.php'); die();
    }

if(isset($_POST) && !empty($_POST)) {

  $row = [
    ':id' => $_POST['id'],
    ':name' => $_POST['name'],
    ':categoryid' => $_POST['categoryid']
  ];

  $sql = "UPDATE products
          SET name=:name, categoryid=:categoryid
           WHERE id=:id";
  $res = $conn->prepare($sql)->execute($row);

  if($res) {
    $output = "studerande med id " . $_POST['id'] . " uppdaterad!";
  } else {
    $output = "Ups, nånting gick fel..";
  }

}

$q_select = "SELECT * FROM products ORDER BY categoryid ASC";
$stmt = $conn->query($q_select);
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
			
		
<!-- Update product -->
<h1>Update Product</h1>
<table>
<tr>
  <th>product</th>
  <th>category</th>
</tr>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<tr>
<td>
<input type="text" name="name" value="<?php echo $row['name']; ?>">
</td><td>
<input type="text" name="categoryid" value="<?php echo $row['categoryid']; ?>">
</td>
<td>
<button type="submit" name="update">updatera</button>
</td>

</tr>
</form>
<?php } //end tableloop ?>
</table>
	<p>Category 0=Frukt 1=Grönsaker 2=Bär
		<?php if(!empty($output)) { echo '<h3>' . $output . '</h3>'; } ?>
		<?php include 'footer.php';?>
		</div>
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
