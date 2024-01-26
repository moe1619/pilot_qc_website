<?php
$directory = "multiqc"; // Path to the directory containing HTML files
$htmlFiles = [];

if (is_dir($directory)) {
    $files = scandir($directory);

    foreach ($files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'html') {
            $htmlFiles[] = $file;
        }
    }
}

echo json_encode($htmlFiles);
?>

