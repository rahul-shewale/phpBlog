<?php
  
  include '../libs/database.php';
  include '../libs/config.php';
  include '../functions/functions.php';

  //creating new object of databse class
  $db = new database();

  $query = "SELECT * FROM posts";

  $posts = $db->select($query);

  $query = "SELECT * FROM categories";

  $cats = $db->select($query);
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
<link href="../bootstrap/bootstrap.css" rel="stylesheet">

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
    <link href="../bootstrap/custom.css" rel="stylesheet">
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
      <a class="p-2 text-muted" href="index.php">Dashboard</a>
      <a class="p-2 text-muted" href="add_post.php">Add Post</a>
      <a class="p-2 text-muted" href="add_category.php">Add Category</a>
      <a class="p-2 text-muted" href="localhost/phpblog">View Blog</a>
      <a class="p-2 text-muted" href="logout.php">Logout</a>
    </nav>
  </div>

<main role="main" class="container">
  <div class="row">
    <div class="col-sm-12 blog-main">
      <?php 

        if(isset($_GET['msg'])) {
          echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
        }
      ?>
      <br/>
     <table class="table table-striped">
      <tr align="center">
        <td colspan="4"><h3>Manage Post:</h3></td>
      </tr>
       <tr>
         <th>Post ID</th>
         <th>Post Title</th>
         <th>Post Author</th>
         <th>Post Date</th>
       </tr>
       <?php while($row = $posts->fetch_array()):?>
       <tr>
         <td><?php echo $row['id'];?></td>
         <td><a href="edit_post.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></td>
         <td><?php echo $row['author'];?></td>
         <td><?php echo formatDate($row['date']);?></td>
       </tr>
     <?php endwhile;?>
     </table>
     <table class="table table-striped">
      <tr align="center">
        <td colspan="4"><h3>Manage Categoties:</h3></td>
      </tr>
       <tr>
         <th>Categoty ID</th>
         <th>Category Title</th>
       </tr>
       <?php while($row1 = $cats->fetch_array()):?>
       <tr>
         <td><?php echo $row1['id'];?></td>
         <td><a href="edit_cat.php?id=<?php echo $row1['id'];?>"><?php echo $row1['title'];?></a></td>
       </tr>
     <?php endwhile;?>
     </table>