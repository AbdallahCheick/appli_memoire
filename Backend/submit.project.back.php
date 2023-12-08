<?php
session_start();

if (isset($_GET['statut'])&& isset($_GET['id'])) {
    include 'connexion.php';

    $statut = $_GET['statut'];
    $id = $_GET['id'];

    // Utilisez une seule requête UPDATE pour mettre à jour les colonnes spécifiées
    $sql = 'UPDATE projet SET projet_statut=? WHERE projet_id=?';

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: project.admin.php?error=sqlerror');
        exit();
    } else {
        // Changez 'ss' à 'isi' car projet_id est un entier
        mysqli_stmt_bind_param($stmt, 'ii', $statut, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        header('Location: ../Frontend/project.page.php?id='.$id.'&edit=success');
        exit();
    }
} else {
    header('Location: dashboard.php');
    exit();
}
?>
