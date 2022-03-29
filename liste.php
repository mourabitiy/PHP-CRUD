<!DOCTYPE html>
<html lang="en">
<?php include 'DB_Connection.php';
    session_start();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Liste des étudiants</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">

</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">CRUD APP</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="ajouter.php">Ajouter Etudiant</a></li>
                    <li class="nav-item"><a class="nav-link" href="liste.php">Liste des étudiants</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-md-12 search-table-col"><span class="counter pull-right"></span>
        <h3>Liste des étudiants</h3>
        <div class="table-responsive table table-hover table-bordered results">
            <table class="table table-hover table-bordered">
                <thead class="bill-header cs">
                    <tr>
                    <th id="trs-hd-1" class="col-lg-1">CNE</th>
                        <th id="trs-hd-1" class="col-lg-1">Nom</th>
                        <th id="trs-hd-2" class="col-lg-2">Prenom</th>
                        <th id="trs-hd-4" class="col-lg-2">Email</th>
                        <th id="trs-hd-6" class="col-lg-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM etudiant";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                        <td><?php echo $row['cne']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['prenom']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <?php echo '<a href ="modifier.php?cne=' .$row['cne'] . '" class="btn btn-success" style="margin-left: 5px;" ><i class="fa fa-check fa-edit" style="font-size: 15px;"></i></a>'?>
                            <?php echo '<a href = "supprimer.php?cne=' . $row['cne'] . '" class="btn btn-danger" style="margin-left: 5px;"><i class="fa fa-trash" style="font-size: 15px;"></i></a>'?>
                        </td>
                    </tr>
                <?php }
                }
                else{
                    echo '<div class="alert alert-warning" role="alert">
                        Aucun étudiant enregistré dans la base de données !
                        </div>';
                }?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>