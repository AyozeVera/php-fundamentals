<h1>The Blog</h1>

<?php foreach ($posts as $post) : ?>

  <article>
    <h2>
      <a href="blog/single.php?id=<?= $post['id']; ?>"> 
        <?php echo $post['title']; ?>
      </a>
    </h2>
    <div class="body">
      <?php echo $post['body']; ?>
    </div>
  </article>
<?php endforeach; ?>
