<?php require_once('database/database.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Mineralogical Database Manager</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/mystyle.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
        <a class="navbar-brand" href="index.php">WebMineral</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <span class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="mineral_list.php">Mineral List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="contact.php">Contact Us</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="random_mineral.php">Random Mineral</a>
                </li>
            </ul>
                <form class="d-flex mx-3 h-25" method="POST" action="search.php">
                    <input type="text" class="form-control mx-4" name="name" placeholder="Search for mineral species">
                    <input type="submit" class="btn btn-info" value="Submit">
                </form>
          </span>
        </div>
    </div>
</nav>
