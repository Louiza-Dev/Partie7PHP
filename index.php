<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
// Exooo4
// $_SESSION['pseudo'] = $_POST['pseudo'];
// $_SESSION['password'] = $_POST['password']

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Louiza';
$_SESSION['nom'] = 'Achiche';
$_SESSION['age'] = 37;
echo 'Salam aalykom';
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
    <div class="container">
      <div class="row">
        <h1 class="col-12 text-center border border-dark">Part7</h1>
        <!-- EXooooooooooo11111111111111111111111111111111111111111111111111111 -->
        <div class="col-12 col-md-6 border border-dark">
          <h2 class="text-center"><span class="badge bg-primary">Exo1</span></h2>
          <p class="alert alert-dark text-center" role="alert">Affichez "user_agent", "l'adresse ip" et "le nom" de votre serveur.</p>
            <h3 class="text-center"><span class="badge bg-secondary">Votre user_agent est:</span></h3>
            <p class="text-center"><?= $_SERVER['HTTP_USER_AGENT'] ?></p>
            <h3 class="text-center"><span class="badge bg-secondary">Votre adresse ip est:</span></h3>
            <p class="text-center"><?= $_SERVER['SERVER_ADDR'] ?></p>
            <h3 class="text-center"><span class="badge bg-secondary">Votre nom de serveur est:</span></h3>
            <p class="text-center"><?= $_SERVER['SERVER_NAME'] ?></p>
        </div>
        <!-- EXoooooooooooo2-3/2-3/2-3/2-3/2-3/2-3/2-3/2-3/2-3/2-3/2-3/2-3/2-3/2-3/2-3/2-3/ -->
        <div class="col-12 col-md-6 border border-dark">
          <h2 class="text-center"><span class="badge bg-primary">Exo2-3</span></h2>
              <p class="alert alert-dark text-center" role="alert">Affichez deux variables de session (nom, prénom)Exo2.</p>
              <p class="alert alert-dark text-center" role="alert">Affichez la troisième variable de session (age) sur une autr pageExo3.</p>
              <h5 class="alert alert-danger text-center" role="alert">
                <!-- <span class="badge bg-info"> -->
                  <?= 'Bonjour, chere '. $_SESSION['nom'].' '.$_SESSION['prenom'].'.'; ?>
                  <a href="exo2-3.php">votre àge est:</a><br />
                <!-- </span> -->
              </h5>
        </div>
        <!-- EXooooooooooooo4444444444444444444444444444444444444 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center"><span class="badge bg-primary">Exo4</span></h2>
              <p class="alert alert-dark text-center" role="alert">Affichez le pseudo et mot de passe sur une autre page.</p>
              <form class="" method="post" action="exo4.php">
                <label for="pseudo">Entre un PSEUDO:</label>
                <input type="text" name="pseudo" id="pseudo">
                <label for="password">Et un PASSWORD:</label>
                <input type="password" name="password" id="password">
                <p class="d-flex justify-content-center">
                  <button class="btn btn-info" type="submit">Envoyer</button>
                </p>
              </form>            <!-- justify-content-center -->

        </div>
        <!-- EXooooooooooo444444444444444444444444444444 -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo4</h2>
          <div class="d-flex justify-content-between">
            <div class="">
              <p>Wile</p>
              <?php
              $nmbA = rand(1,15);
              $nmbB = rand(1,15);
              ?>
              <p><?= 'ChoixA: '. $nmbA?></p>
              <p><?= 'ChoixB: '. $nmbB ?></p>
              <?php
              function randCompar($val1, $val2) {
                if ($val1 < $val2) {
                  return "$val1 plus petit que $val2";
                }
                if ($val1 > $val2) {
                  return "$val1 plus grand que $val2";
                }
                return "$val1 égal à $val2";
              }
              echo randCompar($nmbA, $nmbB);
              ?>
            </div>
            <div class="">
              <!-- <p>For</p> -->
            </div>
            <div class="">
              <!-- <p>Tabl</p> -->
            </div>
          </div>
        </div>
          <!-- EXoooooooooo5555555555555555555555555555555555555  -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Exo5</h2>
          <!-- <div class="d-flex justify-content-between"> -->
              <?php
              $numbr = rand(1,15);
              $msg1 = ' est à un chiffre !!';
              $msg2 = ' est à deux chiffres !!';
              ?>
              <p><?= 'Nombre est: '. $numbr ?></p>
              <?php
              function randChfr($int, $stng, $strng1) {
                if ($int < 10) {
                  return  $int. $stng;
                }
                if ($int >= 10) {
                  return  $int. $strng1;
                }
              }
              echo randChfr($numbr, $msg1, $msg2);
              ?>
          <!-- </div> -->
        </div>
        <!-- BONUUUUUUUUUUUUUUUUUSSSSSSSSSSSSSS -->
        <div class="col-12 col-md-4 border border-dark">
          <h2 class="text-center">Bonus</h2>
          <div>
            <?php
            $nmbrA = rand(1,15);
            $nmbrB = rand(1,15);
            $nmbrC = rand(1,15);
            ?>
            <p><?= 'ChoixA: '. $nmbrA?></p>
            <p><?= 'ChoixB: '. $nmbrB ?></p>
            <p><?= 'ChoixC: '. $nmbrC ?></p>
            <?php
            function randCalc($vale1, $vale2, $vale3) {
                return $vale1 + $vale2 + $vale3;
            }
            echo randCalc($nmbrA, $nmbrB, $nmbrC);
            ?>
          </div>
          <div>

          </div>
        </div>
      </div>
    </div>
    <!-- <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
  </body>
</html>
