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
                <div id = "install"></div>
                <section class = "main-section" >
                    <header><h3>PHP Installation</h3></header>
                    <p>There are many ways to install PHP on your local machine.</p>
                    <p>XAMPP is freely available for all the Operating Systems. It is a package that gives you all the tools you need to get up and running.</p>
                    <p>PHP is run by a HTTP Server, which is responsible for responding to HTTP requests, the ones made by the browser. When access a URL with your browser, the HTTP server responds with some HTML content.</p>
                    <p>The server is typically Apache or NGINX.</p>
                    <b>Why PHP?</b>
                    <p>PHP stands as an open-source scripting language that serves a primary role in web development. Its availability for download and utilization comes without cost, and its file extension ".php" identifies it. The abbreviation PHP represents "PHP Hypertext Preprocessor," and it maintains compatibility with a multitude of databases, including MySQL and Oracle. Initially created by Rasmus Lerdorf in 1994, a programmer of Danish Canadian origin, PHP is instrumental across a spectrum of websites, spanning eCommerce, social platforms, and email hosting, all within the realm of open-source software.</p>
                    <div class = "demo-code " >
                        <code>
                            <span style="color: black">
                                &lt;!DOCTYPE html&gt;<br>
                                &lt;html&gt;<br>
                                &lt;body&gt;<br>

                                &lt;?php<br>
                                   echo "Greetings, Dangal ng Bayan!";<br>
                                ?><br>

                                &lt;/body&gt;<br>
                                &lt;/html&gt;<br>
                            </span>
                        </code>
                    </div>
                    <br>
                    Output: 
                    <br>
                    <div class = "demo-code">
                            <code>
                                    Greetings, Dangal ng Bayan!
                            </code>
                    </div>
                    <br>
                    <button class="run-button" onclick="window.open('compiler/ide1')">try this code</button>
                    <br>
                </section>
                <br>
                <div class = "demo-code" style="color: black;">
                <p>REFERENCES:</p>
                    <div>
                        <p><b>[1]</b> Prof. C. Joseph(2022). Introductin to PHP | Server Side Scripting from Itew3 Subject, PHP module for 3rd year college students.</p>
                        <p><b>[2]</b> GeeksforGeeks(2023). How to install PHP in Windows 10 from https://www.geeksforgeeks.org/how-to-install-php-in-windows-10/</p>
                        <p><b>[3]</b> Installation of PHP XAMPP server in windows from https://www.netzole.com/how-to-download-install-php-step-by-step-guide/</p>
                        <p><b>[4]</b> Jack Llyd(2022) How to Install XAMPP on Linux from https://www.wikihow.com/Install-XAMPP-on-Linux</p>
                        
                    </div> 
                </div>    
            </main>
</div>          
</body>

</html> 
