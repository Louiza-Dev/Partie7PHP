<?php
session_start()
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Part7</title>
  </head>
  <body>
    <h5 class="alert alert-info text-center" role="alert">
      <?= $_SESSION['age'].' ans.'; ?>
    </h5>
  </body>
</html>
