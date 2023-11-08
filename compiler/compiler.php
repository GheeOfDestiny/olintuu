<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];

    // Save the code to a temporary file
    $tempFile = tempnam(sys_get_temp_dir(), 'php_compiler');
    file_put_contents($tempFile, $code);

    // Execute the PHP code and capture the output
    ob_start();
    include $tempFile;
    $output = ob_get_clean();

    // Delete the temporary file
    unlink($tempFile);

    // Return the output
    echo $output;
}
?>
