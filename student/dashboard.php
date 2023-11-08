<?php


session_start();

?>


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
                  <i class="fa fa-home"></i><em></em>
               </a>
              </center>
               
            </li>
            <li>
              <br>
              <br>
                  <p style="color: black"></p>
            </li>

            <li>
              <a class="s-sidebar__nav-link" href="#introduction" style="border-top: 0.5px solid #d0d0d0;">
                <i class="fa fa-user"></i><em><b>Introduction to PHP</b></em>
              </a>
              
             <a class="s-sidebar__nav-link" href="introduction_to_php#features">
               <i class="fa fa-user"></i><em><h5 style="font-weight: lighter;">features</h5></em>
             </a>
          </li>
         </ul>
      </nav>
    </div>

<!-- Content -->
            <main id="main-doc" class = "col-md-10 s-layout__content">
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
             
            </main>
</div>        
</body>

</html> 
