<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">

    <title>Fruit-Stop</title>
  </head>
  <body>
	<div class="container">
		<?php include 'header.php';?>
    <header>
      <nav class="navbar navbar-light bg-light">
        <a style="font-size: 30px !important;" class="navbar-brand" href="#">
          <img src="frootstob.png" width="50" height="45" class="d-inline-block align-top" alt="">
        Fruit-Stop
        </a>
        <a class="btn btn-success" href="#" role="button">Login</a>
      </nav>
    </header>

			<ul class="nav nav-pills nav-fill" role="tablist">
			  <li class="nav-item">
				<a class="nav-link active btn-outline-secondary" data-toggle="tab" href="#frukt" role="tab">Frukt</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link btn-outline-secondary" data-toggle="tab" href="#grönsaker" role="tab">Grönsaker</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link btn-outline-secondary" data-toggle="tab" href="#bär" role="tab">Bär</a>
			  </li>
			</ul>

			<div class="b p-3 tab-content">
			  <div class="tab-pane active" id="frukt" role="tabpanel">
          <p class="text-center">use <kbd>ctrl+f</kbd> to find product</p>
          
          <figure class="col-2 figure">
            <img src="strawberry.png" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Strawberries</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="avocado.png" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Avogado))</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="grape.png" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Grapes</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="watermelon.png" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Watermelon</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="orange.png" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Orange</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="banana.png" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Banana</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="abble.png" width="100%" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Apple</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="mango.png" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Mango</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="pineapple.png" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Pineapple</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="cherry.png" width="100%" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Cherries</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

        </div>

        <div class="tab-pane" id="grönsaker" role="tabpanel">
          <p class="text-center">use <kbd>ctrl+f</kbd> to find product</p>

          <figure class="col-2 figure">
            <img src="http://placehold.it/300" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Pineapple</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

          <figure class="col-2 figure">
            <img src="http://placehold.it/300" class="figure-img img-fluid rounded" alt="yes">
            <figcaption class="figure-caption">Pineapple</figcaption>
            <a class="btn btn-danger btn-sm">delete</a>
            <a class="btn btn-success btn-sm">update</a>
          </figure>

			</div>

      <div class="tab-pane" id="bär" role="tabpanel">
        <p class="text-center">use <kbd>ctrl+f</kbd> to find product</p>

        <figure class="col-2 figure">
          <img src="http://placehold.it/300" class="figure-img img-fluid rounded" alt="yes">
          <figcaption class="figure-caption">Pineapple</figcaption>
          <a class="btn btn-danger btn-sm">delete</a>
          <a class="btn btn-success btn-sm">update</a>
        </figure>

        <figure class="col-2 figure">
          <img src="http://placehold.it/300" class="figure-img img-fluid rounded" alt="yes">
          <figcaption class="figure-caption">Pineapple</figcaption>
          <a class="btn btn-danger btn-sm">delete</a>
          <a class="btn btn-success btn-sm">update</a>
        </figure>
      </div>

	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
