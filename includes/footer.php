
<?php
  
    $query = "SELECT * FROM categories";

    $cats = $db->select($query);

?>
      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Previous</a>
        <a class="btn btn-outline-primary" href="#">Next</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Categories</h4>
        <ol class="list-unstyled mb-0">
          <?php while($rows = $cats->fetch_array()): ?>
          <li><a href="category.php?id=<?php echo $rows['id'];?>"><?php echo $rows['title']; ?></a></li>
          <?php endwhile;?>
        </ol>
      </div>

    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>Made with love by <a href="https://github.com/rahul-shewale">Rahul Shewale</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<script src="bootstrap/bootstrap.js"></script>
</body>
</html>
