<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <title>Part7</title>
  </head>
  <body>
      <?php
      if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
      ?>
      <h5 class="alert alert-info text-center" role="alert">
        <p><?= 'Votre pseudo est: '.htmlspecialchars($_POST['pseudo']).' .'; ?></p>
        <p><?= 'Votre mot de pass est: '.htmlspecialchars($_POST['password']).' .'; ?></p>
      </h5>
      <?php
    }else {
    ?>
    <h5 class="alert alert-danger text-center" role="alert">
      <p><?= 'Veuillez remplire les champs svp !!'; ?></p>
    </h5>
    <?php
    }
      ?>

  </body>
</html>
