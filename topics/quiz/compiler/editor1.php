<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["code"])) {
    $code = $_POST["code"];

    // Convert "\n" to newline and "<br>" to newline
    $code = str_replace(["<br>", "<br/>", "<br />"], "\n", $code);

    // Write the code to a temporary file
    $tempFile = tempnam(sys_get_temp_dir(), 'php_code');
    file_put_contents($tempFile, $code);

    // Use output buffering to capture the output of the executed code
    ob_start();
    include $tempFile;
    $output = ob_get_clean();

    // Delete the temporary file
    unlink($tempFile);

    // Remove leading and trailing whitespace and line breaks from the output
    $output = trim($output);

    // Replace newlines in the output with "<br>" tags
    $output = nl2br($output);

    // Send the output back to the client
    echo $output;
}
?>
