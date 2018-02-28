<?php
function namesList($path) {
    $fileList = scandir($path);
    $newFileList = [];
    foreach ($fileList as $image) {
        $newFileList[] = $image;
    }
    return $newFileList;
}



if (isset($_FILES['picture'])) {
    if (0 == $_FILES['picture']['error']) {
        move_uploaded_file(
            $_FILES['picture']['tmp_name'],
            __DIR__ . '/images/' . $_FILES['picture']['name']
        );
    }
}