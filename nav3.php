<?php
include('includes/db_connect.php');
echo 	"<ul class=\"nav nav-pills nav-fill bg-light\" role=\"tablist\">
		  <li class=\"nav-item\">
			<a class=\"nav-link active btn-outline-secondary\" data-toggle=\"tab\" href=\"#frukt\" role=\"tab\">Frukt</a>
		  </li>
		  <li class=\"nav-item\">
			<a class=\"nav-link btn-outline-secondary\" data-toggle=\"tab\" href=\"#grönsaker\" role=\"tab\">Grönsaker</a>
		  </li>
		  <li class=\"nav-item\">
			<a class=\"nav-link btn-outline-secondary\" data-toggle=\"tab\" href=\"#bär\" role=\"tab\">Bär</a>
		  </li>
		</ul>

		<div class=\"b p-3 tab-content text-center\">
			<div class=\"tab-pane active\" id=\"frukt\" role=\"tabpanel\">
				<p>use <kbd>ctrl+f</kbd> to find product</p>
			  
			  <figure class=\"col-2 figure\">
				<img src=\"img/strawberry.png\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"strawberry\">
				<figcaption class=\"figure-caption\">Strawberries</figcaption>
			  </figure>

			  <figure class=\"col-2 figure\">
				<img src=\"img/avocado.png\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"avocado\">
				<figcaption class=\"figure-caption\">Avocado</figcaption>
			  </figure>

			  <figure class=\"col-2 figure\">
				<img src=\"img/grape.png\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"grapes\">
				<figcaption class=\"figure-caption\">Grapes</figcaption>
			  </figure>

			  <figure class=\"col-2 figure\">
				<img src=\"img/watermelon.png\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"watermelon\">
				<figcaption class=\"figure-caption\">Watermelon</figcaption>
			  </figure>

			  <figure class=\"col-2 figure\">
				<img src=\"img/orange.png\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"orange\">
				<figcaption class=\"figure-caption\">Orange</figcaption>
			  </figure>

			  <figure class=\"col-2 figure\">
				<img src=\"img/banana.png\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"banana\">
				<figcaption class=\"figure-caption\">Banana</figcaption>	
			  </figure>

			  <figure class=\"col-2 figure\">
				<img src=\"img/abble.png\" width=\"100%\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"apple\">
				<figcaption class=\"figure-caption\">Apple</figcaption>	
			  </figure>

			  <figure class=\"col-2 figure\">
				<img src=\"img/mango.png\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"mango\">
				<figcaption class=\"figure-caption\">Mango</figcaption>	
			  </figure>

			  <figure class=\"col-2 figure\">
				<img src=\"img/pineapple.png\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"pineapple\">
				<figcaption class=\"figure-caption\">Pineapple</figcaption>
			  </figure>

			  <figure class=\"col-2 figure\">
				<img src=\"img/cherry.png\" width=\"100%\" class=\"figure-img img-fluid rounded\" alt=\"cherry\">
				<figcaption class=\"figure-caption\">Cherries</figcaption>	
			  </figure>

			</div>

        <div class=\"tab-pane text-center\" id=\"grönsaker\" role=\"tabpanel\">
			<p>use <kbd>ctrl+f</kbd> to find product</p>

          <figure class=\"col-2 figure\">
            <img src=\"http://placehold.it/300\" class=\"figure-img img-fluid rounded\" alt=\"yes\">
            <figcaption class=\"figure-caption\">Pineapple</figcaption>
          </figure>

          <figure class=\"col-2 figure\">
            <img src=\"http://placehold.it/300\" class=\"figure-img img-fluid rounded\" alt=\"yes\">
            <figcaption class=\"figure-caption\">Pineapple</figcaption>       
          </figure>

		</div>

      <div class=\"tab-pane text-center\" id=\"bär\" role=\"tabpanel\">
        <p>use <kbd>ctrl+f</kbd> to find product</p>

        <figure class=\"col-2 figure\">
          <img src=\"http://placehold.it/300\" class=\"figure-img img-fluid rounded\" alt=\"yes\">
          <figcaption class=\"figure-caption\">Pineapple</figcaption>
        </figure>

        <figure class=\"col-2 figure\">
          <img src=\"http://placehold.it/300\" class=\"figure-img img-fluid rounded\" alt=\"yes\">
          <figcaption class=\"figure-caption\">Pineapple</figcaption>
        </figure>
      </div>

	</div>";
?>