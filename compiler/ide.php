<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online IDE Compiler</title>
    <style>
        *{
            margin: 0;
            box-sizing: border-box;

        }
        body{
            background: #c8E6C9;
        }
        #editor-php {
            width: 98%;
            height: 300px;
            margin: 10px;

        }
        #php-output {
            min-height: 150px;
            width: 98%;
            resize: none;
            background-color: #f5f5f5;
            font-family: monospace;
            margin: 10px;
        }
        .header {
            margin: 0;
            background: #57a958;
            text-align: left;
            font-size: 20px;
            font-weight: bold;
            color: white;
            padding: 4px;
            font-family: sans-serif;
        }
        @media screen and (min-width: 768px) {
            .header{
                justify-content: space-between;
            }
            #php-output {
                width: 98%;
                margin: 10px;
            }
            #editor-php {
                width: 98%;
                margin: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <center>Olintu Online IDE</center> </div>
        
        <div class="coder" >

            <div id="editor-php">&lt;?php
    echo "Hello, Olintu users!";
    <br>
    echo "Welcome to Online Intelligent Tutoring";
?&gt;
            </div>

            <center>
                <button onclick="runPHP()"
                style="
                background: #57a958;
                color: white;
                cursor: pointer;
                border: none;
                width: 100px;
                height: 50px;
                border-radius: 5px;">Run PHP</button>
            </center>
            
            <div id="php-output"></div>
        </div>
    </div>
   
    
    <!-- Load Ace Editor -->
    <script src="js/lib/ace.js"></script>
    
    <script>


        var editorPHP = ace.edit("editor-php");
        editorPHP.setTheme("ace/theme/tomorrow");
        editorPHP.session.setMode("ace/mode/php");
        
        function runPHP() {
            var phpCode = editorPHP.getValue();


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
            xhr.open("POST", "compiler.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("code=" + encodeURIComponent(phpCode));
        }
    </script>
</body>
</html>
