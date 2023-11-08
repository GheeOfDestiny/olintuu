<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Installation</title>
    <link rel="stylesheet" type="text/css" href="css/design_intro.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
</head>
<body>

<div class="s-layout">
<!-- Sidebar -->
    <div class="s-layout__sidebar"> 
      <a class="s-sidebar__trigger" href="#0">
         <i class="fa fa-bars">☰</i>
      </a>

      <nav class="s-sidebar__nav">

         <ul>
            <li>
              <center>
                <a class="logo" href="#0">
                  <i class="fa fa-home"></i><em><img src="images/oli.png" style="width: 100px;"></em>
               </a>
              </center>
               
            </li>
            <li>
               <a class="s-sidebar__nav-link" href="#0">
                  <i class="fa fa-home"></i><em>Home</em>
               </a>
            </li>

            <li>
              <a class="s-sidebar__nav-link" href="#introduction" style="border-top: 0.5px solid #d0d0d0;">
                <i class="fa fa-user"></i><em><b>Introduction to PHP</b></em>
              </a>
              
             <a class="s-sidebar__nav-link" href="introduction_to_php#features">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">features</h5></em>
             </a>
             <a class="s-sidebar__nav-link" href="introduction_to_php#syntax">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">syntax</h5></em>
             </a>
             <a class="s-sidebar__nav-link" href="introduction_to_php#comments">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">comments</h5></em>
             </a>
             <a class="s-sidebar__nav-link" href="introduction_to_php#sensitive">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">case sensitive</h5></em>
             </a>
             <a class="s-sidebar__nav-link" href="introduction_to_php#variables">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">variables</h5></em>
             </a>
             <a class="s-sidebar__nav-link" href="introduction_to_php#datatypes">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">datatypes</h5></em>
             </a>
             <a class="s-sidebar__nav-link" href="introduction_to_php#consants">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">consants</h5></em>
             </a>
             <a class="s-sidebar__nav-link" href="introduction_to_php#operators">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">operators</h5></em>
             </a>
             <a class="s-sidebar__nav-link" href="introduction_to_php#statements">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">statements</h5></em>
             </a>
             <a class="s-sidebar__nav-link" href="introduction_to_php#loops">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">loops</h5></em>
             </a>
          </li>
           <li>
               <a class="s-sidebar__nav-link" href="php_installation#install" style="border-top: 0.5px solid #d0d0d0;">
                  <i class="fa fa-camera"></i><em><b>PHP Installation</b></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_windows#setup">
                 <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">how to set up PHP</h5></em>
               </a>
            </li>
          <li>
             <a class="s-sidebar__nav-link" href="php_common_use#commonuse" style="border-top: 0.5px solid #d0d0d0;">
               <i class="fa fa-user"></i><em><b>PHP Common Use</b></em>
             </a>
          </li>
         <li>
               <a class="s-sidebar__nav-link" href="php_array#array" style="border-top: 0.5px solid #d0d0d0;">
                  <i class="fa fa-camera"></i><em><b>Introduction to Array</b></em>
               </a>

                <a class="s-sidebar__nav-link" href="php_array#index" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">numeric/index Arrays</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_array#asso" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">associative arrays</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_array#multidimentional" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">multidimensional arrays</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_array#strings" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">strings</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_array#func" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">functions</h5></em>
               </a>
            </li>
          <li>
               <a class="s-sidebar__nav-link" href="php_webconcepts#concept" style="border-top: 0.5px solid #d0d0d0; font-weight: bolder;">
                 <i class="fa fa-user"></i><em><b>Web Concepts</b></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_webconcepts#identify" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">browser & platform</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_webconcepts#forms" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">HTML forms</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_webconcepts#method" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">get and set method</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_webconcepts#inclusion" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">PHP file inclusion</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_webconcepts#inputout" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">PHP file I/O</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_webconcepts#cookies" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">PHP Cookies</h5></em>
               </a>
            </li>
          <li>
               <a class="s-sidebar__nav-link" href="php_advanced#advanced" style="border-top: 0.5px solid #d0d0d0;">
                  <i class="fa fa-camera"></i><em><b>Advanced PHP</b></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_advanced#prevaria" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">predefined variables</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_advanced#regular" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">regular expressions</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_advanced#perl" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">PHP regexp perl</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_advanced#debugging" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">debugging</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_advanced#date" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">date and time</h5></em>
               </a>
            </li>
          <li>
             <a class="s-sidebar__nav-link" href="php_database#database" style="border-top: 0.5px solid #d0d0d0;">
               <i class="fa fa-user"></i><em><b>Database Connection</b></em>
             </a>
              <a class="s-sidebar__nav-link" href="php_database#opening" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Opening Database</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_database#closing" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Closing Database</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_database#insert" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Insert Data</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_database#getting" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Getting Data</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_database#releasing" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Releasing Memory</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_database#paging" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Paging though PHP</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_database#update" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Updating Data</h5></em>
               </a>
               <a class="s-sidebar__nav-link" href="php_database#delete" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Delete Data</h5></em>
               </a>
          </li>
          <li>
             <a class="s-sidebar__nav-link" href="php_oop#oop" style="border-top: 0.5px solid #d0d0d0;">
                <i class="fa fa-camera"></i><em><b>OOP Concept</b></em>
             </a>
             <a class="s-sidebar__nav-link" href="php_oop#class" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Class and Objects</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_oop#objects" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Creating Objects in PHP</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_oop#inheritance" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Inheritance</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_oop#interface" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Interface</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_oop#abstract" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Abstract Classes</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_oop#abstract_vs_interface" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Abstract vs. Interface</h5></em>
               </a>
                <a class="s-sidebar__nav-link" href="php_oop#constructor" >
                  <i class="fa fa-camera"></i><em><h5 style="font-weight: lighter;">Updating Data</h5></em>
               </a>
          </li>
         </ul>
      </nav>
    </div>

<!-- Content -->
            <main id="main-doc" class = "col-md-10 s-layout__content">
                <div >
                    <center style="color: white; background: #0F6735; width: auto; height: 50px; padding: 1px; font-family: Arial;">
                        <h1>SERVER SIDE SCRIPTING</h1>
                    </center>
                </div>
                <div id = "commonuse"></div>
                <section class = "main-section" >
                    <header><h3>Common Uses of PHP</h3></header>
                    <p>PHP performs system functions, from files on a system it can create, open, read, write, and close them. The other uses of PHP are: </p>
                    <ul>
                      <li>PHP can handle forms, i.e. gather data from files, save data to a file, thru email you can send data, return data to the user. </li>
                      <br>
                      <li>You add, delete, modify elements within your database thru PHP.</li>
                      <br>
                      <li>Access cookies variables and set cookies. </li>
                      <br>
                      <li>Using PHP, you can restrict users to access some pages of your website. </li>
                      <br>
                      <li>It can encrypt data. </li>
                    </ul>
                </section>
                    
                <section class = "main-section">
                  <header><h3>PHP File Create/Write/Open/Close</h3></header>
                  <ul>
                    <li>The <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">fopen()</code> function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.</li>
                    <br>
                    <li>The <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">fwrite()</code> function is used to write to a file.</li>
                    <br>
                    <li>Close the file with <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">fclose()</code> function.</li>
                  </ul>
                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                          $myfile = fopen("olintumessage.txt", "r") or die("Unable to open file!");<br>
                          echo fread($myfile,filesize("olintumessage.txt"));<br>
                          fclose($myfile);<br>
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      Hello, Olintu users!
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide20')">try this code</button>
                    <br>
                  <p class = "lead">Note: You must have an existing file in your folder so that you can open, read and close it, just like the example above where the file name is olintumessage.txt</p>
                </section>

                <section>
                    <header><h3>QUIZ TIME And a Quick Survey</h3></header>
                    <br>

                    <center>
                      <p>You should test your knowledge based on the quiz provided</p>
                      <p>This will not take any longer and no time limit it's your chance to remember what you study.</p>
                      <button class="run-buttons" onclick="window.open('quiz/introduction_to_php_quiz')">take this quiz</button>
                    </center>
                </section>
             
            </main>
</div>  
<style>
  table {
              border-collapse: collapse;
              width: 60%;
            }
            th {
              background-color: #eee;
              font-weight: bold;
            }
            th,
            td {
              border: 1px solid #DADADA;
              line-height: 1.5;
              padding: 0.75em;
              text-align: left;
            }
            /* Stack rows vertically on small screens */
            @media (max-width: 30em) {
              /* Hide column labels */
              thead tr {
                position: absolute;
                top: -9999em;
                left: -9999em;
              }
              tr {
                border: 1px solid #DADADA;
                border-bottom: 0;
              }
              /* Leave a space between table rows */
              tr + tr {
                margin-top: 1.5em;
              }
              /* Get table cells to act like rows */
              tr,
              td {
                display: block;
              }
              td {
                border: none;
                border-bottom: 1px solid #DADADA;
              /* Leave a space for data labels */
                padding-left: 50%;
              }
              /* Add data labels */
              td:before {
                content: attr(data-label);
                display: inline-block;
                font-weight: bold;
                line-height: 1.5;
                margin-left: -100%;
                width: 100%;
              }
            }
            /* Stack labels vertically on smaller screens */
            @media (max-width: 20em) {
              td {
                padding-left: 0.75em;
              }
              td:before {
                display: block;
                margin-bottom: 0.75em;
                margin-left: 0;
              }
            }
            .run-buttonss {
   background: gray;
   color: white;
   cursor: pointer;
   border: none;
   width: 150px;
   height: 50px;
   border-radius: 2px;
   font-size: 16px;
}
.run-buttonss:hover {
            background: black;
        }
</style>        
</body>

</html> 
