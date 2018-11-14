<?php
include('includes/db_connect.php');

$q_select = "SELECT * FROM products";
$stmt = $conn->query($q_select);
$stmt1 = $conn->query($q_select);
$stmt2 = $conn->query($q_select);

echo 	"<ul class='nav nav-pills nav-fill bg-light' role='tablist'>
		  <li class='nav-item'>
			<a class='nav-link active btn-outline-secondary' data-toggle='tab' href='#frukt' role='tab'>Frukt</a>
		  </li>
		  <li class='nav-item'>
			<a class='nav-link btn-outline-secondary' data-toggle='tab' href='#grönsaker' role='tab'>Grönsaker</a>
		  </li>
		  <li class='nav-item'>
			<a class='nav-link btn-outline-secondary' data-toggle='tab' href='#bär' role='tab'>Bär</a>
		  </li>
		</ul>

		<div class='b p-3 tab-content text-center bg-light'>
			<div class='tab-pane active' id='frukt' role='tabpanel'>
				<p>use <kbd>ctrl+f</kbd> to find product</p>
			  
				<ul class='list-group d-inline-block'>";
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					if($row['categoryid']==0){	echo '<li class="list-group-item">' . $row['name'] . '<img src="img/' . $row['name'] . '.png" onerror="this.style.display=\'none\'"></li>';};
					};
echo	   		"</ul>

			</div>

			<div class='tab-pane text-center' id='grönsaker' role='tabpanel'>
				<p>use <kbd>ctrl+f</kbd> to find product</p>

				<ul class='list-group d-inline-block'>";
					while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
					if($row['categoryid']==1){	echo '<li class="list-group-item">' . $row['name'] . '<img src="img/' . $row['name'] . '.png" onerror="this.style.display=\'none\'"></li>';};
					};
echo	   		"</ul>
				
			</div>

			<div class='tab-pane text-center' id='bär' role='tabpanel'>
				<p>use <kbd>ctrl+f</kbd> to find product</p>

				<ul class='list-group d-inline-block'>";
					while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
					if($row['categoryid']==2){	echo '<li class="list-group-item">' . $row['name'] . '<img src="img/' . $row['name'] . '.png" onerror="this.style.display=\'none\'"></li>';};
					};
echo	   		"</ul>

			</div>

		</div>";
?>