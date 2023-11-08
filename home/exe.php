<?php
// Get the combined PHP code and user input from the POST request
if (isset($_POST['code']) && isset($_POST['input'])) {
    $codeWithInput = $_POST['code'];
    $userInput = $_POST['input'];
    executePHPCode($codeWithInput, $userInput);
}

function executePHPCode($codeWithInput, $userInput) {
    // Replace this with the full path to the PHP executable on your shared hosting environment
    $phpExecutable = 'C:\xampp\php\php.exe';

    // Create a temporary directory to store the PHP script and input file
    $tmpDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'php_ide_' . uniqid();
    mkdir($tmpDir);

    // Create the PHP script file
    $phpScriptFile = $tmpDir . DIRECTORY_SEPARATOR . 'script.php';
    file_put_contents($phpScriptFile, $codeWithInput);

    // Create the input file
    $inputFile = $tmpDir . DIRECTORY_SEPARATOR . 'input.txt';
    file_put_contents($inputFile, $userInput);

    // Prepare the command to execute PHP with the PHP script file and read input from the input file
    $command = $phpExecutable . " " . escapeshellarg($phpScriptFile) . " < " . escapeshellarg($inputFile);

    // Open a process handle to execute the PHP script
    $process = proc_open($command, [
        0 => ['pipe', 'r'], // STDIN
        1 => ['pipe', 'w'], // STDOUT
        2 => ['pipe', 'w'], // STDERR
    ], $pipes);

    // Close STDIN to indicate end-of-file to the PHP script
    fclose($pipes[0]);

    // Capture the output from STDOUT and STDERR
    $output = stream_get_contents($pipes[1]);
    $errors = stream_get_contents($pipes[2]);

    // Close the process handle
    proc_close($process);

    // Clean up the temporary directory and files
    foreach ([$phpScriptFile, $inputFile] as $file) {
        if (file_exists($file)) {
            unlink($file);
        }
    }
    rmdir($tmpDir);

    // Check if there were any errors during execution
    if (!empty($errors)) {
        echo "Error occurred while executing the PHP code:\n";
        echo $errors;
    } else {
        // Output the result
        echo $output;
    }
}
?>
