<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
</head>

<body>
  <h2>Your Input:</h2>

  <?php
  echo "Name:" . htmlspecialchars($_POST["name"]) . "<br>";
  echo "Email:" . htmlspecialchars($_POST["email"]) . "<br>";
  ?>

</body>

</html>