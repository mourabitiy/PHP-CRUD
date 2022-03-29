<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ajouter étudiant</title>
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
            <?php if(isset($_POST['ajouter']))
                {
                    echo '<div class="alert alert-primary" role="alert">Etudiant N°'.$_POST["cne"].' a été ajouté.</div>';
                }
            ?>
            <h2 class="text-center">Ajouter étudiant</h2>
            <div class="mb-3"><input class="form-control" type="text" name="cne" placeholder="CNE"></div>
            <div class="mb-3"><input class="form-control" type="text" name="nom" placeholder="Nom"></div>
            <div class="mb-3"><input class="form-control" type="text" name="prenom" placeholder="Prenom"></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="email" rows="14"></div>
            <div class="mb-3"><button name = "ajouter" class="btn btn-primary" type="submit">Ajouter</button></div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php
    include 'DB_Connection.php';
    if (isset($_POST['ajouter']) == "POST") {
        $cne= $_POST["cne"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $sql = "INSERT INTO etudiant (cne,nom,prenom,email) 
                VALUES('$cne','$nom','$prenom','$email')";
        //Executing the query
        if ($conn->query($sql) === TRUE) {
          } else {
            echo "Erreur de base de données: " . $sql . "<br>" . $conn->error;
          }
    }

    ?>
</body>

</html>