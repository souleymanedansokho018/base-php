<!DOCTYPE html>
<html>
<body>

<form method="post">
  <input name="prenom">
  <input type="submit">
</form>

<?php
if ($_POST) echo "Bonjour, " . htmlspecialchars($_POST["prenom"]) . " !";
?>

</body>
</html>