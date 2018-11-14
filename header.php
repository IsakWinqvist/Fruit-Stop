<?php
echo 	"<header>
			<nav class='navbar navbar-light bg-light'>
				<a style='font-size: 30px !important;' class='navbar-brand' href='index.php'>
				  <img src='img/frootstob.png' width='50' class='d-inline-block align-top' alt='Logo'>
				Fruit-Stop
				</a>
				<div class='btn-group' role='group'>";
				
				  if(isset($_POST['logout'])){
					  session_destroy(); header('LOCATION:index.php'); die();
				  }
				
				if(isset($_SESSION['login'])){ echo "<form action='' method='post'>
					<button type='logout' name='logout' class='btn'>Log out</button>
				</form>";
				}
				echo "<a class='btn btn-success' href='admin.php' role='button'>Admin</a>
				</div>
				
			</nav>
		</header>";
?>