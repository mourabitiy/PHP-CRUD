<?php 
    include 'DB_Connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Modifier étudiant</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">

</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg navigation-clean">
        <div class="container"><a class="navbar-brand" href="home.php">CRUD APP</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="ajouter.php">Ajouter Etudiant</a></li>
                    <li class="nav-item"><a class="nav-link" href="liste.php">Liste des étudiants</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="contact-clean">
        <form method="post">
            <?php if(isset($_POST['modifier'])){
                        echo '<div class="alert alert-success" role="alert">
                        Information modifiées. <a href = "liste.php"> Retourner vers la liste.</a>
                      </div>';
            };
            ?>
            <h2 class="text-center">Modification pour <?php echo $_GET['cne'];?></h2>
            <div class="mb-3"><input class="form-control" type="text" name="cne" placeholder="<?php echo $_GET['cne'];?>" disabled></div>
            <div class="mb-3"><input autofocus class="form-control" type="text" name="nom" placeholder="Nouveau nom"></div>
            <div class="mb-3"><input class="form-control" type="text" name="prenom" placeholder="Nouveau Prenom"></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Nouvelle adresse email" rows="14"></div>
            <div class="mb-3"><button name = "modifier" class="btn btn-primary" type="submit">Modifer</button></div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php
        if (isset($_POST['modifier']) == "POST") {
        $cne= $_GET["cne"];    
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email= $_POST["email"];
        $sql = "UPDATE etudiant SET nom = '$nom', prenom = '$prenom', email = '$email' WHERE cne='".$_GET['cne']."'";
        mysqli_query($conn, $sql);

    }

    ?>
</body>
</html>