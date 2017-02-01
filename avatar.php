<?php
// Vu qu'on utilise la superglobal $_SESSION nous devons obligatoirement spécifier un session_start() au début du code.
session_start();
    // Si il n'existe pas de $_SESSION['id'], je redirige l'utilisateur vers le fichier connexion.php
    if (!isset($_SESSION['id'])) {
        header('Location: connexion.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
      <head>
        <meta charset="utf-8">
        <title>Changer d'avatar</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
      </head>
      <body>
        <?php include 'include/header.php'; ?>
        <main>
            <div class="container profil">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h1 class="text-center">Changer d'avatar</h1>
                        <hr>
                        <div class="well">
                            <div class="center-block">
                                <img src="" alt="avatar" class="img-circle img-fluid">
                            </div>
                            <form action="avatar.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="avatar" class="form-control-file">
                                <input type="submit" class="btn btn-primary btn-block" value="Changer d'avatar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'include/footer.php' ?>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
