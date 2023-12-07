<?php

$file = $_FILES['dp'];

if (!empty($_FILES['dp']['name'])) {
    $fileName = $_FILES['dp']['name'];
    $fileTmpName = $_FILES['dp']['tmp_name'];
    $fileSize = $_FILES['dp']['size'];
    $fileError = $_FILES['dp']['error'];
    $fileType = $_FILES['dp']['type'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = ['pdf', 'docx'];
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 10000000) {
                $FileNameNew = uniqid('', true) . '.' . $fileActualExt;
                $fileDestination = '../Frontend/uploads/' . $FileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            } else {
                header(
                    'Location: ../Frontend/create.project.php?error=imgsizeexceeded'
                );
                exit();
            }
        } else {
            header(
                'Location: ../Frontend/create.project.php?error=imguploaderror'
            );
            exit();
        }
    } else {
        header(
            'Location: ../Frontend/create.project.php?error=invalidimagetype'
        );
        exit();
    }
}
