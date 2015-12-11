<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
  </head>
  <body>
    <h1>The Blog</h1>
    <?php foreach ($posts as $post) : ?>
      <article>
        <h2><?php echo $post['title']; ?></h2>
        <div class="body">
          <?php echo $post['body']; ?>
        </div>
      </article>
    <?php endforeach; ?>
  </body>
</html>
