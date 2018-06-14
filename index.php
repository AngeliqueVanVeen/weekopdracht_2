<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BLOG - 1e versie</title>
  </head>

  <body>
    <h1>Angelique's Blog</h1><br>
    <h3>Alle blogs:</h3>

    <?php
      $file = file_get_contents('blogfile.txt', true);
      echo $file;
    ?>

  </body>
</html>
