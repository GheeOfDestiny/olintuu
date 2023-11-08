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
                <div id = "setup"></div>
                <section class = "main-section" >
                    <header><h3>How to set up on Windows</h3></header>
                    <b>Download XAMPP in Window</b>
                    <p>You can download latest stable version of XAMPP from the bitnami.com official website <a  onclick="window.open('https://www.apachefriends.org/download.html')" style="color: blue; cursor: pointer; text-decoration: underline;">https://www.apachefriends.org/download.html</a></p>
                    <p>Upon accessing the website, it will automatically identify your operating system and present the appropriate version for your device. For instance, if we accessed the site from a 64-bit Windows system, a downloadable 64-bit XAMPP package is provided. If your system is 32-bit Windows, Linux, or MacOS, the corresponding version will be displayed. Alternatively, various versions can be obtained from the download page at www.apachefriends.org.</p>

                </section>
                <section class = "main-section" >
                    <header><h3>In order to install PHP XAMPP on Windows you have to perform following actions:</h3></header>
                    <br>
                    <p>To start using PHP, you should:</p>
                    <ul>
                      <li>Find a web host with PHP and MySQL support</li>
                      <br>
                      <li>Install a web server on your own PC, and then install PHP and MySQL.</li>
                    </ul>
                    <b> Download the XAMPP Windows Installer Package from the <a  onclick="window.open('https://www.apachefriends.org/download.html')" style="color: blue; cursor: pointer; text-decoration: underline;">https://www.apachefriends.org/download.html</a></p></b>
                    <p>Choose a PHP version</p>
                    <center>
                      <table>
                      <thead>
                        <tr>
                          <th>Version</th>
                          <th>Checksum</th>
                          <th>Bit</th>
                          <th>Size</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>8.0.28 / PHP 8.0.28</td>
                          <td>md5 sha1</td>
                          <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
                          <td>144 Mb</td>
                        </tr>
                        <tr>
                          <td>8.1.17 / PHP 8.1.17</td>
                          <td>md5 sha1</td>
                          <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
                          <td>148 Mb</td>
                        </tr>
                        <tr>
                          <td>8.2.4 / PHP 8.2.4</td>
                          <td>md5 sha1</td>
                          <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
                          <td>149 Mb</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    
                  <br>
                  <br>
                  <b>Steps:</b>
                  <ul>
                      
                      <br>
                      <li>Go to <b>Downloads</b>. You'll see named "xampp-windows(version you chose)-installer"</li>
                      <br>
                      <li>Double click the installer package.</li>
                      <br>
                      <li>Wait until unpacking is done to install XAMPP after that click next.</li>
                      <br>
                      <li><b>To set up:</b> Click on Next button in Select components page, On the Next screen, Accept the terms in the license agreement and click on the Next button.</li>
                      <br>
                      <li>Installation folder in default location at C:\xampp. click Next </li>
                      <br>
                      <li><b>After setting Up:</b> Accept default components (Learn more about Bitnami for XAMPP) with check on it or uncheck then click next. </li>
                      <br>
                      <li><b>Ready to install: </b>Set up is now ready to begin installing XAMPP then when you click next. Installer will ask if you want to start control panel, you can uncheck it if you don't want to open automatically after installing it.</li>
                      <br>
                  </ul>
                  <br>
                  <b>How to verify Installation</b>
                  <ul>
                      <li>You can verify the installation or check the version of xampp by the following steps. And run/start Apache and MYSQL services.</li>
                      <br>
                      <li>Check if the server is working type localhost/phpmyadmin/ in your browser</li>
                  </ul>


                    <br>
                    <b>Running PHP Script from Command Prompt </b>
                    <br>
                    <p>To run your PHP script on your command prompt. Especially for the console projects</p>
                    <p>You need to make a directory path in your environmental variables</p>
                    <br>
                    <ul>
                      <li>Click start menu and search <b>"Edit the system environment variables"</b> then <b> &gt; "Environmental Variables"</b>.</li>
                      <br>
                      <li>Go to <b>System Variables > Path option > add a "New" path</b> put or place your PHP xampp directory > <b>C:\xampp\php</b>. </li>
                      <br>
                      <li>To avoid worries just also add <b>C:\xampp\php\php.exe</b> directory to the path.</li>
                      <br>
                      <li>Restart your device, and open your command prompt and type "<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">php -v</code>"  to check php version.</li>
                      <br>
                      
                  </ul>
                  <ul>
                    <li>You can run your PHP script on your command prompt. Assuming you have the following content in test.php file.
                      </li>
                  </ul>
                  <div class = "demo-code">
                      <code>
                          &lt;?php
                          echo " Dangal Greetings!!!"; 
                          ?&gt;
                      </code>
                  </div>
                  <ul>
                    <li>To run a php in cmd, Run the script at command prompt you need to type  the script below</code></li>
                      <br>
                  </ul>
                  <div class = "demo-code">
                      <code>
                          php test.php
                      </code>
                  </div>
                  <p class = "lead">You should see the PHP version information printed in the terminal. If you still encounter the “php: command not found”, “php not recognize” error, try restarting your terminal or opening a new terminal window and check again.</p>
                </section>
                <section class = "main-section" >
                    <header><h3>How to set up on Linux Ubuntu</h3></header>
                    <p>Head over to this website to download XAMPP. You’ll notice three download options for different platforms: Windows, Linux, and OS X. Click on Linux and choose what's best option in your device.</p>
                    <b> Download the XAMPP Linux Installer Package from the <a  onclick="window.open('https://www.apachefriends.org/download.html')" style="color: blue; cursor: pointer; text-decoration: underline;">https://www.apachefriends.org/download.html</a></p></b>
                    <p>Choose a PHP version</p>
                    <center>
                      <table>
                      <thead>
                        <tr>
                          <th>Version</th>
                          <th>Checksum</th>
                          <th>Bit</th>
                          <th>Size</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>8.0.28 / PHP 8.0.28</td>
                          <td>md5 sha1</td>
                          <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
                          <td>151 Mb</td>
                        </tr>
                        <tr>
                          <td>8.1.17 / PHP 8.1.17</td>
                          <td>md5 sha1</td>
                          <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
                          <td>153 Mb</td>
                        </tr>
                        <tr>
                          <td>8.2.4 / PHP 8.2.4</td>
                          <td>md5 sha1</td>
                          <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
                          <td>150 Mb</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <b>Steps:</b>
                    <ul>
                      <li>Once XAMPP's downloading file finishes</li>
                      <br>
                      <li>Open terminal or type <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">Alt + Ctrl + T</code> to open a new Terminal window.</li>
                    </ul>
                    <p>Move to the Downloads folder by using the following command:</p>
                    <div class = "demo-code">
                      <code>
                          $ cd /home/[username]/Downloads
                      </code>
                    </div>
                    <br>
                    Or
                    <br>
                    <div class = "demo-code">
                      <code>
                          $ cd Downloads
                      </code>
                    </div>
                    <ul>
                      <li>Make sure you capitalize "Downloads".</li>
                      <br>
                      <li>You can run the following <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">chmod</code> command on your terminal shell to give permission. And <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">sudo</code> to install a file.</li>
                      <br>
                    </ul>
                    <div class = "demo-code">
                      <code>
                          $ chmod 755 xampp-linux-x64-[PHP version]-installer.run<br>
                          $ sudo ./xampp-linux-x64-[PHP version]-installer.run
                      </code>
                    </div>
                    <br>
                    Or
                    <br>
                    <div class = "demo-code">
                      <code>
                          $ chmod 755 xampp-linux-x64-*-installer.run<br>
                          $ sudo ./xampp-linux-x64-*-installer.run
                      </code>
                    </div>
                    <br>
                    <p>While installing, in your terminal. Will ask you to select components you want to install. Enter <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">Y</code> two times if YES.</p>
                    <ul>
                      <li>Installation directory to /opt/lampp</li>
                      <br>
                      <li>Click Enter to install</li>
                      <br>
                      <li>Then, it will tell you "Set up is finished".</li>
                    </ul>
                    <br>
                    <p>Or this option after typing <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">chmod</code> and <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">sudo</code> into your terminal.</p>
                    <ul>
                      <li>Enter your password when prompted. Type the password you used to log into your computer, if you don't have a password in your device then no need.</li>
                      <br>
                      <li>Xampp installer will launch</li>
                      <br>
                      <li>Click Next three times.</li>
                      <br>
                      <li><b>After setting Up:</b> Accept default components (Learn more about Bitnami for XAMPP) with check on it or uncheck then click next. </li>
                      <br>
                      <li><b>Ready to install: </b>Set up is now ready to begin installing XAMPP then when you click next. Installer will ask if you want to start control panel, you can uncheck it if you don't want to open automatically after installing it.</li>
                      <br>
                    </ul>
                    <b>How to verify Installation</b>
                  <ul>
                      <li>You can verify the installation or check the version of xampp by the following steps. And run/start Apache and MYSQL services.</li>
                      <br>
                      <li>Or type:</li>
                  </ul>
                    <div class = "demo-code">
                      <code>
                          php -v
                      </code>
                    </div>
                    <br>
                    


                    <br>
                    <b>Running PHP Script from Command Prompt </b>
                    <br>
                    <p>To run your PHP script on your command prompt. Especially for the console projects</p>
                    <p>You need to make a path to your directory</p>
                    <br>
                    <p>If php is not recognized</p>
                    <ul>
                      <li>Type <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">~/</code> means the path to the beginning of a directory.</li>
                      <br>
                      <li>Default directory in linux. <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">/opt/lampp/</code></li>
                      <br>
                    </ul>
                    <p>To path PHP in the direcory use export and <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">php -v</code> to check its version number</p>
                    <br>
                    <div class = "demo-code">
                      <code>
                          export PATH="/opt/lampp/bin:$PATH"<br>
                          php -v
                      </code>
                    </div>
                    <br>
                    <p>Then the output will like this.</p>
                    <br>
                    <div class = "demo-code">
                      <code>
                          PHP 8.2.4 (cli) (built: Apr  6 2023 08:21:45) (NTS)<br>
                          Copyright (c) The PHP Group<br>
                          Zend Engine v4.2.4, Copyright (c) Zend Technologies<br>
                      </code>
                    </div>
                    <br>
                    <ul>
                    <li>You can run your PHP script on your command prompt. Assuming you have the following content in test.php file.
                      </li><br>
                     
                    </ul>
                    <div class = "demo-code">
                      <code>
                          &lt;?php
                          echo " Dangal Greetings!!!"; 
                          ?&gt;
                      </code>
                  </div>
                   <ul>
                         <li>You should be at the inside of the directory.</li><br>
                       <li>To run a php in cmd, Run the script at command prompt you need to type  the script below</li>
                      <br>
                      </ul>
                    <div class = "demo-code">
                      <code>
                         root@localhost:/opt/lampp/htdocs# php index.php
                      </code>
                    </div>
                    <p class = "lead">You should see the PHP version information printed in the terminal. If you still encounter the “php: command not found”, “php not recognize” error, try restarting your terminal or opening a new terminal window and check again.</p>
                </section>

                <section class="main-section">
                  <header><h3>How to set up on OS</h3></header>
                   <p>Head over to this website to download XAMPP. You’ll notice three download options for different platforms: Windows, Linux, and OS X. Click on Linux and choose what's best option in your device.</p>
                    <b> Download the XAMPP OS Installer Package from the <a  onclick="window.open('https://www.apachefriends.org/download.html')" style="color: blue; cursor: pointer; text-decoration: underline;">https://www.apachefriends.org/download.html</a></p></b>
                    <p>Choose a PHP version</p>
                    <center>
                      <table>
                      <thead>
                        <tr>
                          <th>Version</th>
                          <th>Checksum</th>
                          <th>Bit</th>
                          <th>Size</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>8.0.28 / PHP 8.0.28</td>
                          <td>md5 sha1</td>
                          <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
                          <td>149 Mb</td>
                        </tr>
                        <tr>
                          <td>8.1.17 / PHP 8.1.17</td>
                          <td>md5 sha1</td>
                          <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
                          <td>151 Mb</td>
                        </tr>
                        <tr>
                          <td>8.2.4 / PHP 8.2.4</td>
                          <td>md5 sha1</td>
                          <td><button class="run-buttonss" onclick="window.open('https://www.apachefriends.org/download_success.html')">Download (64 bit)</button></td>
                          <td>149 Mb</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <p class = "lead">A Native installer installs MariaDB, PHP, Perl, etc. directly onto your macOS system. It supports intel (x64) or Apple M1 (arm64) CPUs.</p>
                    <br>
                    <b>Steps:</b>
                  <ul>
                      
                      <br>
                      <li>Go to <b>Downloads</b>. You'll see named "xampp-windows(version you chose)-installer.dmg" or dicrect to your browser downloads pop up notification.</li>
                      <br>
                      <li>Open the installer package.</li>
                      <br>
                      <li><b>To set up:</b> Click Next button three times.</li>
                      <br>
                      <li>Wait until unpacking is done to install XAMPP</li>
                      <br>
                      <li>Installation folder in default location at /Application/XAMPP.</li>
                      <br>
                      <li>Installer will ask if you want to start control panel, you can uncheck it if you don't want to open automatically after installing it.</li>
                        <li>Launch <b>control panel > Manage Servers > </b>click <b>Apache Web Server & MySQL Database > </b>click <b>start</b>.</li>
                      <br>
                  </ul>
                  <br>
                  <b>How to verify Installation</b>
                  <br>
                  <ul>
                      <li>You can verify the installation or check the version of xampp by the following steps. And run/start Apache and MYSQL services.</li>
                      <br>
                      <li>Check if the server is working type localhost/phpmyadmin/ in your browser</li>
                      <br>
                      <li>Type <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">php -v</code></li>
                  </ul>
                  <b>Running PHP Script from Command Prompt </b>
                    <br>
                    <p>To run your PHP script on your command prompt. Especially for the console projects</p>
                    <p>You need to make a directory path in your device using terminal</p>
                    <br>
                    <ul>
                      <li>Open a terminal on your macOS.</li>
                      <br>
                      <li>Locate the XAMPP installation directory. By default, it is installed in the “/Applications/XAMPP” directory. If you have installed it in a different location, adjust the path accordingly.</li>
                      <br>
                      <li>Add your PHP to PATH Environment and check the PHP version</li>
                      <br>
                  </ul>
                  <div class = "demo-code">
                      <code>
                          export PATH="/Applications/XAMPP/bin:$PATH"<br>
                          php -v
                      </code>
                  </div>
                  <ul>
                    <li>You can run your PHP script on your command prompt. Assuming you have the following content in test.php file.
                      </li>
                  </ul>
                  <div class = "demo-code">
                      <code>
                          &lt;?php
                          echo " Dangal Greetings!!!"; 
                          ?&gt;
                      </code>
                  </div>
                  <ul>
                    <li>To run a php in cmd, Run the script at command prompt you need to type  the script below</code></li>
                      <br>
                  </ul>
                  <div class = "demo-code">
                      <code>
                          php test.php
                      </code>
                  </div>
                  <p class = "lead">You should see the PHP version information printed in the terminal. If you still encounter the “php: command not found”, “php not recognize” error, try restarting your terminal or opening a new terminal window and check again.</p>
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
