<?php
  
  include 'libs/database.php';
  include 'libs/config.php';
  include 'functions/functions.php';

  //creating new object of databse class
  $db = new database();

  if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = "SELECT * FROM posts where id='$id'";

    $post = $db->select($query);

    $row = $post->fetch_array();
    
  }


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>PhpBlog</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">
    
    <!-- Bootstrap core CSS -->
<link href="bootstrap/bootstrap.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .readmore {
        float: right;
        margin-right: 20px;
        background: silver;
        color: white;
        padding: 6px;
        text-decoration: none;

      }

      .readmore:hover {
        color: white;
        background: black;
        text-decoration: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap/custom.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
      <div class="text-center">
        <a class="blog-header-logo text-dark" href="#">Large</a>
      </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#">Home</a>
      <a class="p-2 text-muted" href="#">All Posts</a>
      <a class="p-2 text-muted" href="#">Services</a>
      <a class="p-2 text-muted" href="#">About Us</a>
      <a class="p-2 text-muted" href="#">Contact Us</a>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">PHP Tutorials Blogs</h1>
      <p class="lead my-3">It's all about PHP programming and Web Development.</p>
    </div>
  </div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
        <p class="blog-post-meta"><?php echo formatDate($row['date']);?> by <a href="#"><?php echo $row['author']; ?></a></p>

        <p><?php echo $row['content'];?></p>
      </div><!-- /.blog-post -->

<?php include 'includes/footer.php'; ?>
