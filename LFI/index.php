<?php require_once "config.php"; ?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>My Simple Blog</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=page1.php">Page 1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=page2.php">Page 2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=page3.php">Page 3 <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<main role="main" class="flex-shrink-0">
  <div class="container">
    <?php 
    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    else 
    { ?>
    <h1 class="mt-5">Ini Halaman Home</h1>
    <p class="lead">A home, or domicile, is a living space used as a permanent or semi-permanent residence for an individual, family, household or several families in a tribe. It is often a house, apartment, or other building, or alternatively a mobile home, houseboat, yurt or any other portable shelter. A principle of constitutional law in many countries, related to the right to privacy enshrined in article 12 of the Universal Declaration of Human Rights is the inviolability of the home as an individual's place of shelter and refuge.</p>
    <p>Referensi : <a href="https://en.wikipedia.org/wiki/Home">Home - Wikipedia</a></p>
    <?php } ?>
  </div>
</main>

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">&copy; UNP Kediri 2019</span>
  </div>
</footer>
</html>