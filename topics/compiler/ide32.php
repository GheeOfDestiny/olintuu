<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online PHP IDE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Load the Ace editor library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0px;
        }

        body {
            background: #E7E9EB;
        }

        #editorContainer {
            position: relative;
            width: 100%;
            height: 500px;
            border: 3px solid grey;
        }

        #output {
            min-height: 150px;
            width: 100%;
            background-color: #1E1E1E;
            font-family: monospace;
            color: white;
            padding: 5px;
            border: 3px solid grey;
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

        .switch-container {
            display: flex;
            align-items: center;
            margin: 3px;
            margin-left: 10px;
        }

        .switch-label {
            font-size: 16px;
            margin-right: 10px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 20px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #57a958;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #57a958;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(20px);
            -ms-transform: translateX(20px);
            transform: translateX(20px);
        }

        .slider.round {
            border-radius: 20px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .run-button {
            background: #57a958;
            color: white;
            cursor: pointer;
            border: none;
            width: 70px;
            height: 30px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            margin: 2px;
            margin-left: 10px;
        }

        .run-button:hover {
            background: #449c44;
        }

        @media screen and (min-width: 768px) {
            #editorContainer {
                width: 100%;
            }
            .header {
                justify-content: space-between;
                padding: 5px;
            }
            #output {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    
    <div class="header">
        <center>Olintu Online IDE</center>
    </div>

    <div class="switch-container">
        <span class="switch-label">Change Mode</span>
        <label class="switch">
            <input type="checkbox" onclick="toggleTheme()">
            <span class="slider round"></span>
        </label>
        <button class="run-button" onclick="runCode()">Run</button>
    </div>
    <div style="overflow: auto;">
        <div id="editorContainer"></div>
        <div id="output"></div>
    </div>
    

    <script>
        let editor;
        let currentTheme = 'tomorrow_night';

        // Load the Ace Editor
        window.onload = function() {
            editor = ace.edit("editorContainer");
            editor.session.setMode("ace/mode/php");
            editor.setValue(`<?php echo '<?php
 function getBrowser() {
 $u_agent = $_SERVER[\'HTTP_USER_AGENT\'];
 $bname = \'Unknown\';
 $platform = \'Unknown\';
 $version = "";
 
 //First get the platform?
 if (preg_match(\'/linux/i\', $u_agent)) {
 $platform = \'linux\';
 }elseif (preg_match(\'/macintosh|mac os x/i\', $u_agent)) {
 $platform = \'mac\';
 }elseif (preg_match(\'/windows|win32/i\', $u_agent)) {
 $platform = \'windows\';
 }
// Next get the name of the useragent yes seperately and for good reason
 if(preg_match(\'/MSIE/i\',$u_agent) && !preg_match(\'/Opera/i\',$u_agent)) {
 $bname = \'Internet Explorer\';
 $ub = "MSIE";
 } elseif(preg_match(\'/Firefox/i\',$u_agent)) {
 $bname = \'Mozilla Firefox\';
 $ub = "Firefox";
 } elseif(preg_match(\'/Chrome/i\',$u_agent)) {
 $bname = \'Google Chrome\';
 $ub = "Chrome";
 }elseif(preg_match(\'/Safari/i\',$u_agent)) {
 $bname = \'Apple Safari\';
 $ub = "Safari";
 }elseif(preg_match(\'/Opera/i\',$u_agent)) {
 $bname = \'Opera\';
 $ub = "Opera";
 }elseif(preg_match(\'/Netscape/i\',$u_agent)) {
 $bname = \'Netscape\';
 $ub = "Netscape";
 }
 
 // finally get the correct version number
 $known = array(\'Version\', $ub, \'other\');
 $pattern = \'#(?<browser>\' . join(\'|\', $known) . \')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#\';
 
 if (!preg_match_all($pattern, $u_agent, $matches)) {
 // we have no matching number just continue
 }
 
 // see how many we have
 $i = count($matches[\'browser\']);
 
 if ($i != 1) {
 //we will have two since we are not using \'other\' argument yet
 
 //see if version is before or after the name
 if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
 $version= $matches[\'version\'][0];
 }else {
 $version= $matches[\'version\'][1];
 }
 }else {
 $version= $matches[\'version\'][0];
 }
 
 // check if we have a number
 if ($version == null || $version == "") {$version = "?";}
 return array(
 \'userAgent\' => $u_agent,
 \'name\' => $bname,
 \'version\' => $version,
 \'platform\' => $platform,
 \'pattern\' => $pattern
 );
 }
 
 // now try it
 $ua = getBrowser();
 $yourbrowser = "Your browser: " . $ua[\'name\'] . " " . $ua[\'version\'] .
 " on " .$ua[\'platform\'] . " reports: <br >" . $ua[\'userAgent\'];
 
 print_r($yourbrowser);
 ?>'; ?>`);
            editor.setOption("wrap", true); // Enable word wrap
            setTheme(currentTheme); // Call setTheme to apply initial theme
        };

        function runCode() {
    const code = editor.getValue();

    // Send the code to the server for execution
    fetch('editor1.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'code=' + encodeURIComponent(code),
    })

    .then(response => response.text())
    .then(data => {
        document.getElementById('output').innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


        function toggleTheme() {
            currentTheme = currentTheme === 'tomorrow_night' ? 'tomorrow' : 'tomorrow_night';
            setTheme(currentTheme);
        }

        function setTheme(theme) {
            editor.setTheme(`ace/theme/${theme}`);
            document.getElementById('output').style.backgroundColor = theme === 'tomorrow_night' ? '#25282C' : 'white';
            document.getElementById('output').style.color = theme === 'tomorrow_night' ? 'white' : 'black';
        }
    </script>
</body>
</html>
