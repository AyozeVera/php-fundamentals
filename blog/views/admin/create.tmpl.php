<h1>Create a new Post</h1>
<form action="" method="post">
  <ul>
    <li>
      <label for="title">Title:</label>
      <input type="text" name="title" value="">
    </li>
    <li>
      <label for="body">Body:</label>
      <textarea name="body" id="body"></textarea>
    </li>
    <li>
      <input type="submit" name="send" value="Crear">
    </li>
  </ul>
  <?php if (isset($status)) : ?>
    <p>
      <?php echo $status; ?>
    </p>
  <?php endif; ?>
</form>
