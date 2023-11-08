var editorHTML = ace.edit("editor");
        editorHTML.setTheme("ace/theme/tomorrow");
        editorHTML.session.setMode("ace/mode/html");;


function runPHP() {
    var phpCode = PHPeditor.getValue();
            // Send the PHP code to the server for execution
            // and retrieve the output
            
            // Example using AJAX
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                document.getElementById("output").innerHTML = xhr.responseText;
            }
            else
            {
                document.getElementById("output").innerHTML = "Error occurred.";
            }
         }
    };
    xhr.open("POST", "compiler.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("code=" + encodeURIComponent(phpCode));
}