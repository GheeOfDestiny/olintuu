<!DOCTYPE html>
<html>
<head>
    <title>Online IDE Compiler</title>
    <style>
        #code {
            width: 100%;
            height: 300px;
        }
    </style>
    <!-- Include Ace Editor CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.min.css" />
</head>
<body>
    <h1>Online IDE Compiler</h1>
    
    <h2>HTML</h2>
    <div id="html-editor"></div>
    <button onclick="runHTML()">Run HTML</button>
    <h3>Output:</h3>
    <iframe id="html-output"></iframe>
    
    <h2>PHP</h2>
    <div id="php-editor"></div>
    <button onclick="runPHP()">Run PHP</button>
    <h3>Output:</h3>
    <div id="php-output"></div>
    
    <!-- Include Ace Editor JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <script>
        var htmlEditor = ace.edit("html-editor");
        htmlEditor.setTheme("ace/theme/monokai");
        htmlEditor.getSession().setMode("ace/mode/html");

        var phpEditor = ace.edit("php-editor");
        phpEditor.setTheme("ace/theme/monokai");
        phpEditor.getSession().setMode("ace/mode/php");

        function runHTML() {
            var htmlCode = htmlEditor.getValue();
            var iframe = document.getElementById("html-output");
            iframe.srcdoc = htmlCode;
        }
        
        function runPHP() {
            var phpCode = phpEditor.getValue();
            
            // Send the PHP code to the server for execution
            // and retrieve the output
            // You would need to implement the server-side execution of PHP code separately
            
            // Example using AJAX
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        document.getElementById("php-output").innerHTML = xhr.responseText;
                    } else {
                        document.getElementById("php-output").innerHTML = "Error occurred.";
                    }
                }
            };
            // Modify the URL to your PHP execution endpoint
            xhr.open("POST", "execute.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("code=" + encodeURIComponent(phpCode));
        }
    </script>
</body>
</html>
