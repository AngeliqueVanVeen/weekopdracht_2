<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BLOG - Toevoegen</title>
  </head>

  <body>
    <h1>Op deze pagina blogs toevoegen</h1><br>
    <h3>Blog formulier:</h3><br>

    <form id="login" action="blog.php" method="POST">
      Blogtitel:<br>
      <input type="text" name="blogtitel"><br><br>
      Naam:<br>
      <input type="text" name="naam"><br><br>
      Tekst invoer:<br>
      <textarea id="blogtekstinvoer" name="blogtekst" cols=70 rows=10></textarea><br><br><br>
      <input type="submit" value="Verzenden">
    </form>

  </body>
</html>
