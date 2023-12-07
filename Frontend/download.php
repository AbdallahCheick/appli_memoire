<?php

// Vérifie si un fichier a été spécifié pour le téléchargement
if (isset($_GET['file'])) {
    $fileName = $_GET['file'];
    $filePath = 'uploads/' . $fileName;
    echo $fileName;
    // Vérifie si le fichier existe
    if (file_exists($filePath)) {
        // Envoie les entêtes pour forcer le téléchargement

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header(
            'Content-Disposition: attachment; filename="' .
                basename($filePath) .
                '"'
        );
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">
                    <strong>Erreur : </strong> Le fichier demandé n\'existe pas.
                </div>';
    }
} else {
    echo '<div class="alert alert-warning" role="alert">
                <strong>Attention : </strong> Aucun fichier spécifié pour le téléchargement.
            </div>';
} ?>
