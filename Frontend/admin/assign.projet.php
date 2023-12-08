<?php
session_start();

if (isset($_POST['requestButton'])) {
    include '../../Backend/connexion.php';

    $id_projet = $_POST['projet_id'];
    $statut = 2;
    $inv = $_POST['inv_pro'];

    // Utilisez une seule requête UPDATE pour mettre à jour les colonnes spécifiées
    $sql = 'UPDATE projet SET projet_statut=?, projet_ass=? WHERE projet_id=?';

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: project.admin.php?error=sqlerror');
        exit();
    } else {
        // Changez 'ss' à 'isi' car projet_id est un entier
        mysqli_stmt_bind_param($stmt, 'isi', $statut, $inv, $id_projet);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        header('Location: project.admin.php?edit=success');
        exit();
    }
} else {
    header('Location: dashboard.php');
    exit();
}
?>
