<?php 
    include 'DB_Connection.php';
    $cne= $_GET['cne'];
    $sql = "DELETE FROM etudiant WHERE cne='".$_GET['cne']."'";
    $result = mysqli_query($conn, $sql);
    header("location: liste.php");
    