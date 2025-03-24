<?php
$filename = "d:/test.txt";

try {
    $fileContents = file_get_contents($filename);
    echo "File Contents:\n";
    echo $fileContents;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>