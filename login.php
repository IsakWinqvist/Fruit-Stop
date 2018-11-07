<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
      header('LOCATION:index.php'); die();
    }
?>
<!doctype html>
<html lang="en">
<?php include 'head.php';?>
  <body>
	<div class="container">
		<?php include 'header.php';?>
  <div class="container">
    <h3 class="text-center">Login</h3>
    <?php
      if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
          $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
        } {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }

      }
    ?>
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
  </div>
		<?php include 'footer.php';?>
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
