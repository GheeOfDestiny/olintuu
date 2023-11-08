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
                <div id = "concepts"></div>
                <section class = "main-section" >
                    <header><h3>Advanced PHP</h3></header>
                    <b>Predefined Variables</b>
                    <p>Any script that uses PHP will have access to a sizable number of predefined variables. Additional preconfigured arrays with variables from the environment, the web server, and user input are made available by PHP. These new arrays are called <b>superglobals</b>.
                    </p>
                    <p>All the following variables are automatically available in every scope.</p>
                    <b>PHP Superglobals</b>
                    <ul>
                      <li><b>PHP Superglobals</b></li>
                    </ul>
                    <center>
                      <table>
                      <thead>
                        <tr>
                          <th>Variables</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>$GLOBALS</td>
                          <td>Contains a reference to every variable which is currently available within the global scope of the script. The keys of this array are the names of the global variables.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER</td>
                          <td>This is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these. See next section for a complete list of all the SERVER variables.
                          </td>
                        </tr>
                        <tr>
                          <td>$_GET</td>
                          <td>An associative array of variables passed to the current script via the HTTP GET method</td>
                        </tr>
                        <tr>
                          <td>$_POST</td>
                          <td>An associative array of variables passed to the current script via the HTTP POST method.</td>
                        </tr>
                        <tr>
                          <td>$_FILES</td>
                          <td>An associative array of items uploaded to the current script via the HTTP POST method.</td>
                        </tr>
                        <tr>
                          <td>$_REQUEST</td>
                          <td>An associative array consisting of the contents of $_GET, $_POST, and $_COOKIE.</td>
                        </tr>
                        <tr>
                          <td>$_COOKIE</td>
                          <td>An associative array of variables passed to the current script via HTTP cookies.</td>
                        </tr>
                        <tr>
                          <td>$_SESSION</td>
                          <td>An associative array containing session variables available to the current script.</td>
                        </tr>
                        <tr>
                          <td>$_PHP_SELF</td>
                          <td>A string containing PHP script file name in which it is called.</td>
                        </tr>
                        <tr>
                          <td>$php_errormsg</td>
                          <td>$php_errormsg is a variable containing the text of the last error message generated by PHP.</td>
                        </tr>
                      </tbody>
                      </table>
                    </center>


                    <br>
                      <ul>
                        <li><b>Server variables: $_SERVER</b></li>
                        <p><code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$_SERVER</code> is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these.</p>
                      </ul>
                      <center>
                      <table>
                      <thead>
                        <tr>
                          <th>Variables</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>$GLOBALS</td>
                          <td>Contains a reference to every variable which is currently available within the global scope of the script. The keys of this array are the names of the global variables.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['PHP_SELF']</td>
                          <td>The filename of the currently executing script, relative to the document root</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['argv']</td>
                          <td>Array of arguments passed to the script. When the script is run on the command line, this gives C -style access to the command line parameters. When called via the GET method, this will contain the query string.</td>
                        </tr>
                       
                        <tr>
                          <td>$_SERVER['argc']</td>
                          <td>Contains the number of command line parameters passed to the script if run on the command line.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['GATEWAY_INTERFACE']</td>
                          <td>What revision of the CGI specification the server is using; i.e. <b>'CGI/1.1'</b>.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['SERVER_ADDR']</td>
                          <td>AThe IP address of the server under which the current script is executing.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['SERVER_NAME']</td>
                          <td>The name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['SERVER_SOFTWARE']</td>
                          <td>Server identification string, given in the headers when responding to requests.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['SERVER_PROTOCOL']</td>
                          <td>Name and revision of the information protocol via which the page was requested; i.e. <b>'HTTP/1.0'</b>;</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['REQUEST_METHOD']</td>
                          <td>Which request method was used to access the page; i.e. <b>'GET', 'HEAD', 'POST', 'PUT'</b>.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['REQUEST_TIME']</td>
                          <td>The timestamp of the start of the request. Available since PHP 5.1.0.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['QUERY_STRING']</td>
                          <td>The query string, if any, via which the page was accessed.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['DOCUMENT_ROOT']</td>
                          <td>The document root directory under which the current script is executing, as defined in the server's configuration file.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['HTTP_ACCEPT']</td>
                          <td>Contents of the Accept: header from the current request, if there is one.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['HTTP_ACCEPT_CHARSET']</td>
                          <td>Contents of the Accept-Charset: header from the current request, if there is one. Example: '<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">iso -8859-1</code>,<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">*</code>,<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">utf-8</code>'.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['HTTP_ACCEPT_ENCODING']</td>
                          <td>Contents of the Accept-Encoding: header from the current request, if there is one. Example: '<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">gzip</code>'.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['HTTP_ACCEPT_LANGUAGE']</td>
                          <td>Contents of the Accept-Language: header from the current request, if there is one. Example: '<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">en</code>'.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['HTTP_CONNECTION']</td>
                          <td>Contents of the Connection: header from the current request, if there is one. Example: '<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">Keep-Alive</code>'.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['HTTP_HOST']</td>
                          <td>Contents of the Host: header from the current request, if there is one.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['HTTP_REFERER']</td>
                          <td>The address of the page (if any) which referred the user agent to the current page.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['HTTP_USER_AGENT']</td>
                          <td>This is a string denoting the user agent being which is accessing the page. A typical example is: <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586)</code>.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['HTTPS']</td>
                          <td>Set to a non-empty value if the script was queried through the HTTPS protocol.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['REMOTE_ADDR']</td>
                          <td>The IP address from which the user is viewing the current page.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['REMOTE_HOST']</td>
                          <td>The Host name from which the user is viewing the current page. The reverse dns lookup is based off the <b>REMOTE_ADDR</b> of the user</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['REMOTE_PORT']</td>
                          <td>The port being used on the user's machine to communicate with the web server.</td>
                        </tr>
                        <tr>
                          <td>$_SERVER['SCRIPT_FILENAME']</td>
                          <td>The absolute pathname of the currently executing script.</td>
                        </tr>
                         <tr>
                          <td>$_SERVERR['SERVER_ADMIN']</td>
                          <td>The value given to the <b>SERVER_ADMIN (for Apache)</b> directive in the web server configuration file.</td>
                        </tr>
                         <tr>
                          <td>$_SERVER['SERVER_PORT']</td>
                          <td>The port on the server machine being used by the web server for communication. For default setups, this will be '<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">80</code>'</td>
                        </tr>
                         <tr>
                          <td>$_SERVER['SERVER_SIGNATURE']</td>
                          <td>String containing the server version and virtual host name which are added to server -generated pages, if enabled.</td>
                        </tr>
                         <tr>
                          <td>$_SERVER['PATH_TRANSLATED']</td>
                          <td>Filesystem based path to the current script.</td>
                        </tr>
                         <tr>
                          <td>$_SERVER['SCRIPT_NAME']</td>
                          <td>Contains the current script's path. This is useful for pages which need to point to themselves</td>
                        </tr>
                         <tr>
                          <td>$_SERVER['REQUEST_URI']</td>
                          <td>The URI which was given in order to access this page; for instance, '<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">/index.html</code>'</td>
                        </tr>
                         <tr>
                          <td>$_SERVER['PHP_AUTH_DIGEST']</td>
                          <td>When running under Apache as module doing Digest HTTP authentication this variable is set to the 'Authorization' header sent by the client.</td>
                        </tr>
                         <tr>
                          <td>$_SERVER['PHP_AUTH_USER']</td>
                          <td>When running under <b>Apache or IIS (ISAPI on PHP 5)</b> as module doing HTTP authentication this variable is set to the <b style="text-decoration: underline;">username</b> provided by the user.</td>
                        </tr>
                         <tr>
                          <td>$_SERVER['PHP_AUTH_PW']</td>
                          <td>When running under <b>Apache or IIS (ISAPI on PHP 5)</b> as module doing HTTP authentication this variable is set to the <b style="text-decoration: underline;">password</b> provided by the user.</td>
                        </tr>
                         <tr>
                          <td>$_SERVER['AUTH_TYPE']</td>
                          <td>When running under Apache as module doing HTTP authenticated this variable is set to the authentication type.</td>
                        </tr>


                      </tbody>
                      </table>
                    </center>
                </section>

                <div id = "regular"></div>
                <section class = "main-section" >
                    <header><h3>Regular Expression</h3></header>
                    <p>Regular expressions are nothing more than a sequence or pattern of characters itself. They provide the foundation for pattern-matching functionality</p>
                    <p>Using regular expression you can search a particular string inside a another string, you can replace one string by another string and you can split a string into many chunk s.</p>
                    <p>PHP offers functions specific to two sets of regular expression functions, each corresponding to a certain type of regular expression. You can use any of them based on your comfort.</p>
                    <ul>
                      <li>POSIX Regulars Expression</li>
                      <br>
                      <li>PERL Style Regular Expressions</li>
                    </ul>
                    <br>
                    <br>
                    <b>POSIX Regulars Expression</b>
                    <p>The structure of a POSIX regular expression is not dissimilar to that of a typical arithmetic expression: various elements (operators) are combined to form more complex expressions.</p>
                    <p>The simplest regular expression is one that matches a single character, such as g, inside strings such as g, haggle, or bag.</p>
                    <p>Let’s give explanation for few concepts being used in POSIX regular expression. After that we will introduce you with regular expression related functions.</p>
                    <b>Brackets</b>
                    <p>Brackets ([]) have a special meaning when used in the context of regular expressions. They are used to find a range of characters.</p>
                    <b>Expression & Description</b>
                     <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Expression</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>[0-9]</td>
                          <td>It matches any decimal digit from 0 through 9.</td>
                        </tr>
                        <tr>
                          <td>[a-z]</td>
                          <td>It matches any character from lower-case a through lowercase z.</td>
                        </tr>
                        <tr>
                          <td>[A-Z]</td>
                          <td>It matches any character from uppercase A through uppercase Z.</td>
                        </tr>
                        <tr>
                          <td>[a-Z]</td>
                          <td>It matches any character from lowercase a through uppercase Z.</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <p class="lead">The ranges shown above are general; you could also use the range <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">[0-3]</code> to match any decimal digit ranging from 0 through 3, or the range <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">[b-v]</code> to match any lowercase character ranging from b through v.</p>
                    <br>
                    <b>Quantifiers</b>
                    <p>The frequency or position of bracketed character sequences and single characters can be denoted by a special character. Each special character having a specific connotation. The <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">+</code>, <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">*</code>, <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">?</code>, <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">{int. range}</code>, and <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$</code> flags all follow a character sequence.</p>
                    <b>Expression & Description</b>
                     <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Expression</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>p+</td>
                          <td>It matches any string containing at least one p.</td>
                        </tr>
                        <tr>
                          <td>p*</td>
                          <td>It matches any string containing zero or more p's.</td>
                        </tr>
                        <tr>
                          <td>p?</td>
                          <td>It matches any string containing zero or one p's.</td>
                        </tr>
                        <tr>
                          <td>p{N}</td>
                          <td>It matches any string containing a sequence of N p's</td>
                        </tr>
                         <tr>
                          <td>p{2,3}</td>
                          <td>It matches any string containing a sequence of two or three p's.</td>
                        </tr>
                        <tr>
                          <td>p{2, }</td>
                          <td>It matches any string containing a sequence of at least two p's.</td>
                        </tr>
                        <tr>
                          <td>p$</td>
                          <td>It matches any string with p at the end of it.</td>
                        </tr>
                        <tr>
                          <td>^p</td>
                          <td>It matches any string with p at the beginning of it.</td>
                        </tr>

                      </tbody>
                  </table>
                    </center>
                    <br>
                    <p class="lead">Following examples will clear your concepts about matching characters.</p>
                    <b>Expression & Description</b>
                     <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Expression</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>[^a-zA-Z]</td>
                          <td>It matches any string not containing any of the characters ranging from a through z and A through Z</td>
                        </tr>
                        <tr>
                          <td>p.p</td>
                          <td>It matches any string containing p, followed by any character, in turn followed by another p.</td>
                        </tr>
                        <tr>
                          <td>^.{2}$</td>
                          <td>It matches any string containing exactly two characters.</td>
                        </tr>
                        <tr>
                          <td>&lt;b&gt;(.*)&lt;/b&gt;</td>
                          <td>It matches any string enclosed within &lt;b&gt; and &lt;/b&gt;.</td>
                        </tr>
                         <tr>
                          <td>p(hp)*</td>
                          <td>It matches any string containing a p followed by zero or more instances of the sequence php.</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <b>Predefined Character Ranges</b>
                    <p>Several predefined character ranges also known as character classes, are available for your programming conveniences. Character classes specify an entire range of characters, for e xample, the alphabet or an integer set.</p>
                    <b>Expression & Description</b>
                     <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Expression</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>[[:alpha:]]</td>
                          <td>It matches any string containing alphabetic characters aA through zZ.</td>
                        </tr>
                        <tr>
                          <td>[[:digit:]]</td>
                          <td>It matches any string containing numerical digits 0 through 9.</td>
                        </tr>
                        <tr>
                          <td>[[:alnum:]]</td>
                          <td>It matches any string containing alphanumeric characters aA through zZ and 0 through 9.</td>
                        </tr>
                        <tr>
                          <td>[[:space:]]</td>
                          <td>It matches any string containing a space.</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <b>PHP's Regexp POSIX Function</b>
                    <p>PHP currently offers seven functions for searching strings using P OSIX -style regular expressions.</p>
                    <b>Function & Description</b>
                    <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Function</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>ereg()</td>
                          <td>The ereg() function searches a string specified by string for a string specified by pattern, returning true if the pattern is found, and false otherwise.</td>
                        </tr>
                        <tr>
                          <td>ereg_replace()</td>
                          <td>The ereg_replace() function searches for string specified by pattern and replaces pattern with replacement if found.</td>
                        </tr>
                        <tr>
                          <td>eregi()</td>
                          <td>The eregi() function searches throughout a string specified by pattern for a string specified by string. The search is not case sensitive.</td>
                        </tr>
                        <tr>
                          <td>eregi_replace()</td>
                          <td>The eregi_replace() function operates exactly like ereg_replace(), except that the search for pattern in string is not case sensitive.</td>
                        </tr>
                        <tr>
                          <td>split()</td>
                          <td>The split() function will divide a string into various elements, the boundaries of each element based on the occurrence of pattern in string</td>
                        </tr>
                        <tr>
                          <td>spliti()</td>
                          <td>The spliti() function operates exactly in the same manner as its sibling split(), except that it is not case sensitive.</td>
                        </tr>
                        <tr>
                          <td>sql_regcase()</td>
                          <td>The sql_regcase() function can be thought of as a utility function, converting each character in the input parameter string into a bracketed expression containing two characters.</td>
                        </tr>
                        <tr>
                          <td>eregi_replace()</td>
                          <td>The eregi_replace() function operates exactly like ereg_replace(), except that the search for pattern in string is not case sensitive.</td>
                        </tr>
                        <tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <ul>
                      <li><b>PERL Style Regular Expressions</b></li>
                    </ul>
                    <p>Perl-style regular expressions are similar to their POSIX counterparts. The POSIX syntax can be used almost interchangeably with the Perl-style regular expression functions. In fact, you can use any of the quantifiers introduced in the previous POSIX section.</p>
                    <p>Lets give explanation for few concepts being used in PERL regular expressions. After that we will introduce you wih regular expression related functions.</p>
                    <b>Meta characters</b>
                    <p>A meta character is simply an alphabetical character preceded by a backslash that acts to give the combination a special meaning.</p>
                    <p>For instance, you can search for large money sums using the '<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">\d</code>' meta character: <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">/([\d]+)000/</code>, Here <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">\d</code> will search for any string of numerical character.</p>
                    <p>Following is the list of meta characters which can be used in PERL Style Regular Expressions</p>
                    <b>Character & Description</b>
                    <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Character</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>. </td>
                          <td>a single character</td>
                        </tr>
                        <tr>
                          <td>\s</td>
                          <td>a whitespace character (space, tab, newline)</td>
                        </tr>
                        <tr>
                          <td>\S </td>
                          <td>non-whitespace character</td>
                        </tr>
                        <tr>
                          <td>\d </td>
                          <td>a digit (0-9)</td>
                        </tr>
                        <tr>
                          <td>\D </td>
                          <td>a non-digit</td>
                        </tr>
                        <tr>
                          <td>\w </td>
                          <td>a word character (a-z, A-Z, 0-9, _)</td>
                        </tr>
                        <tr>
                          <td>\W</td>
                          <td>a non-word character</td>
                        </tr>
                        <tr>
                          <td>[aeiou]</td>
                          <td>matches a single character in the given set</td>
                        </tr>
                         <tr>
                          <td>[^aeiou] </td>
                          <td>matches a single character outside the given set</td>
                        </tr>
                         <tr>
                          <td>(foo|bar|baz)</td>
                          <td>matches any of the alternatives specified</td>
                        </tr>
                        <tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <b>Modifiers</b>
                    <p>Several modifiers are available that can make your work with regexps much easier, like case sensitivity, searching in multiple lines etc.</p>
                    <br>
                    <b>Modifier & Description</b>
                    <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Modifiers</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>i </td>
                          <td>Makes the match case insensitive</td>
                        </tr>
                        <tr>
                          <td>m </td>
                          <td>Specifies that if the string has newline or carriagereturn characters, the ^ and $ operators will nowmatch against a newline boundary, instead of a string boundary</td>
                        </tr>
                        <tr>
                          <td>o </td>
                          <td>Evaluates the expression only once</td>
                        </tr>
                        <tr>
                          <td>s </td>
                          <td>Allows use of . to match a newline character</td>
                        </tr>
                        <tr>
                          <td>x </td>
                          <td>Allows you to use white space in the expression for clarity</td>
                        </tr>
                        <tr>
                          <td>g </td>
                          <td>Globally finds all matches</td>
                        </tr>
                        <tr>
                          <td>cg </td>
                          <td>Allows a search to continue even after a global match fails</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                </section>    


                 <div id = "perl"></div>
                <section class = "main-section" >
                    <header><h3><b>PHP's Regexp POSIX Function</b></h3></header>
                    <p>PHP offers following functions for searching strings using Perl-compatible regular expressions.</p>
                    <b>Function & Description</b>
                    <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Function</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>preg_match()</td>
                          <td>The preg_match() function searches string for pattern, returning true if pattern exists, and false otherwise.</td>
                        </tr>
                        <tr>
                          <td>preg_match_all()</td>
                          <td>The preg_match_all() function matches all occurrences of pattern in string.</td>
                        </tr>
                        <tr>
                          <td>preg_replace()</td>
                          <td>The preg_replace() function operates just like ereg_replace(), except that regular expressions can be used in the pattern and replacement input parameters.</td>
                        </tr>
                        <tr>
                          <td>preg_split()</td>
                          <td>The preg_split() function operates exactly like split(), except that regular expressions are accepted as input parameters for pattern.</td>
                        </tr>
                        <tr>
                          <td>preg_grep()</td>
                          <td>The preg_grep() function searches all elements of input_array, returning all elements matching the regexp pattern.</td>
                        </tr>
                        <tr>
                          <td>preg_quote</td>
                          <td>Quote regular expression characters</td>
                        </tr>
                        <tr>
                          <td>cg </td>
                          <td>Allows a search to continue even after a global match fails</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <b>Error handling</b>
                    <p>Error handling is the process of catching errors raised by your program and then taking appropriate action. If you would handle errors properly then it may lead to many unforeseen consequences.</p>
                    <p>It’s very simple in PHP to handle an errors.</p>
                    <b>Using die() function</b>
                    <p>While writing your PHP program you should check all possible error condition before going ahead and take appropriate action when required.</p>
                    <p>Try following example without having <b>/tmp/test.txt</b> file and with this file.</p>
                    <br>
                    <div class = "demo-code">
                      <code>
                         &lt;?php<br>
                         if(!file_exists("/tmp/test.txt")) {<br>
                         die("File not found");<br>
                         }else {<br>
                         $file = fopen("/tmp/test.txt","r");<br>
                         print "Opend file sucessfully";<br>
                         }<br>
                        ?&gt;<br>
                      </code>
                    </div>
                     <br>
                    <button class="run-button" onclick="window.open('compiler/ide41')">try this code</button>
                    <br>
                    <p class="lead">This way you can write an efficient code. Using above technique you can stop your program whenever it errors out and display more meaningful and user friendly message.</p>
                    <br>
                    <b>Defining Custo m Error Handling Function</b>
                    <p>You can write your own function to handling any error. PHP provides you a framework to define error handling function.</p>
                    <p>This function must be able to handle a minimum of two parameters (error level and error message) but can accept up to five parameters (optionally: file, line-number, and the error context).</p>
                    <b>Syntax:</b>
                    <div class = "demo-code">
                      <code>
                        error_function(error_level,error_message, error_file,error_line,error_context);
                      </code>
                    </div>
                     <b>Function & Description</b>
                    <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Function</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>error_level</td>
                          <td>Required - Specifies the error report level for the user-defined error. Must be a value number.</td>
                        </tr>
                        <tr>
                          <td>error_message</td>
                          <td>Required - Specifies the error message for the user-defined error</td>
                        </tr>
                        <tr>
                          <td>error_file</td>
                          <td>Optional - Specifies the file name in which the error occurred</td>
                        </tr>
                        <tr>
                          <td>error_line</td>
                          <td>Optional - Specifies the line number in which the error occurred</td>
                        </tr>
                        <tr>
                          <td>error_context</td>
                          <td>Optional - Specifies an array containing every variable and their values in use when the error occurred</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <b>Possible Error levels</b>
                    <p>These error report levels are the different types of error the user -defined error handler can be used for. These values can used in combination using | operator</p>
                    <b>Constant & Description</b>
                    <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Constant</th>
                          <th>Description</th>
                          <th>Value</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>.E_ERROR</td>
                          <td>Fatal run-time errors. Execution of the script is halted</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>E_WARNING</td>
                          <td>Non-fatal run-time errors. Execution of the script is not halted</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>E_PARSE</td>
                          <td>Compile-time parse errors. Parse errors should only be generated by the parser.</td>
                          <td>4</td>
                        </tr>
                        <tr>
                          <td>E_NOTICE</td>
                          <td>Run-time notices. The script found something that might be an error, but could also happen when running a script normally</td>
                          <td>8</td>
                        </tr>
                        <tr>
                          <td>E_CORE_ERROR</td>
                          <td>Fatal errors that occur during PHP's initial start-up.</td>
                          <td>16</td>
                        </tr>
                        <tr>
                          <td>E_CORE_WARNING</td>
                          <td>Non-fatal run-time errors. This occurs during PHP's initial start-up.</td>
                          <td>32</td>
                        </tr>
                        <tr>
                          <td>E_USER_ERROR</td>
                          <td>Fatal errors that occur during PHP's initial start-up.</td>
                          <td>256</td>
                        </tr>
                        <tr>
                          <td>E_USER_WARNING</td>
                          <td>Non-fatal user-generated warning. This is like an E_WARNING set by the programmer using the PHP function trigger_error()</td>
                          <td>512</td>
                        </tr>
                        <tr>
                          <td>E_USER_NOTICE</td>
                          <td>User-generated notice. This is like an E_NOTICE set by the programmer using the PHP function trigger_error()</td>
                          <td>1024</td>
                        </tr>
                        <tr>
                          <td>E_STRICT</td>
                          <td>Run-time notices. Enable to have PHP suggest changes to your code which will ensure the best interoperability and forward compatibility of your code.</td>
                          <td>2048</td>
                        </tr>
                         <tr>
                          <td>E_RECOVERABLE_ERROR</td>
                          <td>Catchable fatal error. This is like an E_ERROR but can be caught by a user defined handle (see also set_error_handler())</td>
                          <td>4096</td>
                        </tr>
                         <tr>
                          <td>E_ALL</td>
                          <td>All errors and warnings, except level E_STRICT (E_STRICT will be part of E_ALL as of PHP 6.0)</td>
                          <td>8191</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <p>All the above error level can be set using following PHP built-in library function where level cab be any of the value defined in above table.</p>
                    <div class = "demo-code">
                      <code>
                        int error_reporting ( [int $level] )
                      </code>
                    </div>
                    <br>
                    <p>Following is the way you can create one error handling function.</p>
                    <div class = "demo-code">
                      <code>
                        function handleError($errno, $errstr,$error_file,$error_line) {<br>
                         echo "&lt;b&gt;Error:&lt;/b&gt; [$errno] $errstr - $error_file:$error_line";<br><br>
                         echo "&lt;br /&gt;";<br>
                         echo "Terminating PHP Script"; <br>
                         die();<br>
                         }<br>
                      </code>
                    </div>
                    <br>
                    <p>Once you define your custom error handler you need to set it using PHP built-in library set_error_handler function. Now lets examine our example by calling a function which does not exist.</p>
                    <div class = "demo-code">
                      <code>
                        error_reporting( E_ERROR ); <br>
                         <br>
                        function handleError($errno, $errstr,$error_file,$error_line) { <br>
                        echo "&lt;b&gt;Error:&lt;/b&gt [$errno] $errstr - $error_file:$error_line"; <br>
                        echo "&lt;br /&gt;"; <br>
                        echo "Terminating PHP Script"; <br>
                          <br>
                        die(); <br>
                        } <br>
                          <br>
                        //set error handler <br>
                        set_error_handler("handleError"); <br>
                          <br>
                        //trigger error <br>
                        myFunction(); <br>
                      </code>
                    </div>
                    <br>
                    <b>Exceptions Handling</b>
                    <p>PHP 5 has an exception model similar to that of other programming languages. Exceptions are important and provides a better control over error handling.</p>
                    <p>Lets explain there new keyword related to exceptions.
                    </p>
                    <ul>
                      <li><b>Try</b> − A function using an exception should be in a "try" block. If the e xception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown".</li>
                      <br>
                      <li><b>Throw</b> − This is how you trigger an exception. Each "throw" must have at least one "catch".</li>
                      <br>
                      <li>Catch − A "catch" block retrieves an exception and creates an object containing the exception information.</li>
                    </ul>
                    <p>When an exception is thrown, code following the statement will not be executed, and PHP will attempt to find the first matching catch block. If an exception is not caught, a PHP Fatal Error wi ll be issued with an "Uncaught Exception ...</p>
                    <ul>
                      <li>An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block.</li>
                      <br>
                      <li>Each try must have at least one corresponding catch block. Multiple catch blocks can be used to catch different classes of exceptions.</li>
                      <br>
                      <li>Exceptions can be thrown (or re-thrown) within a catch block.</li>
                    </ul>
                    <p>Following is the piece of code, copy and paste this code into a file and verify the result.</p>
                    <div class = "demo-code">
                      <code>
                         try {<br>
                         $error = 'Always throw this error';<br>
                         throw new Exception($error);<br>
                        // Code following an exception is not executed.<br>
                         echo 'Never executed';<br>
                         }catch (Exception $e) {<br>
                         echo 'Caught exception: ', $e->getMessage(), "\n";<br>
                         }<br>
                         <br>
                         // Continue execution<br>
                         echo 'Hello World';<br>
                      </code>
                    </div>
                     <br>
                    <button class="run-button" onclick="window.open('compiler/ide42')">try this code</button>
                    <br>
                    <p>In the above example <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$e->getMessage</code> function is used to get error message. There are following functions which can be used from <b>Exception</b> class.</p>
                    <ul>
                      <li>getMessage() − message of exception </li>
                      <br>
                      <li>getCode() − code of exception</li>
                      <br>
                      <li>getFile() − source filename</li>
                      <br>
                      <li>getLine() − source line</li>
                      <br>
                      <li>getTrace() − n array of the backtrace()</li>
                      <br>
                      <li>getTraceAsString() − formated string of trace</li>
                    </ul>
                    <p>Creating Custom Exception Handler</p>
                    <p>You can define your own custom exception handler. Use following function to set a user -defined exception handler function.</p>
                    <div class = "demo-code">
                      <code>
                         string set_exception_handler ( callback $exception_handler )

                      </code>
                    </div>
                    <br>
                    <p>Here exception_handler is the name of the function to be called when an uncaught exception occurs. This function must be defined before calling set_exception_handler().</p>
                    <p>Example:</p>
                    <div class = "demo-code">
                      <code>
                         function exception_handler($exception) {<br>
                         echo "Uncaught exception: " , $exception->getMessage(), "\n";<br>
                         }<br>
                         set_exception_handler('exception_handler');<br>
                         throw new Exception('Uncaught Exception');<br>
                         <br>
                         echo "Not Executed\n";<br>
                      </code>
                    </div>
                    <br>
                    <button class="run-button" onclick="window.open('compiler/ide43')">try this code</button>
                    <br>
                </section>

                <div id = "debugging"></div>    
                <section class = "main-section">
                  <header><h3>Debugging</h3></header>
                  <p>Programs rarely work correctly the first time. Many things can go wrong in your program that cause the PHP interpreter to generate an error message. You have a choice about where those error messages go. The messages can be sent along with other program output to the web browser. They can also be included in the web server error log.</p>
                  <p>To make error messages display in the browser, set the display_erro rs configuration directive to On. To send errors to the web server error log, set log_errors to On. You can set them both to On if you want error messages in both places.</p>
                  <p>PHP defines some constants you can use to set the value of <b>error_reporting</b> such that only errors of certain types get reported: E_ALL (for all errors except strict notices), E_PARSE (parse errors), E_ERROR (fatal errors), E_WARNING (warnings), E_NOTICE (notices), and E_STRICT (strict notices).</p>
                  <p>While writing your PHP program, it is a good idea to use PHP -aware editors like BBEdit or Emacs. One of the special special features of these editors is syntax highlighting. It changes the color of different parts of your program based on what those parts are. For example, strings are pink, keywords such as if and while are blue, comments are grey, and variables are black</p>
                  <p>Another feature is quote and bracket matching, which helps to make sure that your quotes and brackets are balanced. When you type a closing delimiter such as }, the editor highlights the opening { that it matches.</p>
                  <p>There are following points which need to be verified while debugging your program.</p>
                  <ul>
                    <li><b>Missing Semicolons</b> − Every PHP statement ends with a semicolon <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">(;)</code>. PHP doesn't stop reading a statement until it reaches a semicolon. If you leave out the semicolon at the end of a line, PHP continues</li>
                    <br>
                    <li><b>Not Enough Equal Signs</b> − When you ask whether two values are equal in a comparison statement, you need two equal signs <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">(==)</code>. Using one equal sign is a common mistake.</li>
                    <br>
                    <li>Misspelled Variable Names − If you misspelled a variable then PHP understands it as a new variable. Remember: To PHP, $test is not the same variable as $Test.</li>
                    <br>
                    <li><b>Troubling Quotes</b> − You can have too many, too few, or the wrong kind of quotes. So check for a balanced number of quotes.</li>
                    <br>
                    <li><b>Missing Parentheses and curly brackets</b> − They should always be in pairs.</li>
                    <br>
                    <li><b>Array Index</b> − All the arrays should start from zero instead of 1.</li>
                  </ul>

                  <p class="lead">Moreover, handle all the errors properly and direct all trace messages into system log file so that if any problem happens then it will be logged into system log file and you will be able to debug that problem.</p>

                </section>  

                <div id = "date"></div>    
                <section class = "main-section">
                  <header><h3>Date and Time</h3></header>
                  <p>Dates are so much part of everyday life that it becomes easy to work with them without thinking. PHP also provides powerful tools for date arithmetic that make manipulating dates easy.</p>
                  <br>
                  <b>Getting the Time Stamp with time()</b>
                  <p>PHP's time() function gives you all the information that you need about the current date and time. It requires no arguments but returns an integer.</p>
                  <p>The integer returned by time() represents the number of seconds elapsed since midnight GMT on January 1, 1970. This moment is known as the UNIX epoch, and the number of seconds that have elapsed since then is referred to as a time stamp.</p>
                    <div class = "demo-code">
                      <code>
                         print time();
                      </code>
                    </div>
                    <br>
                    <button class="run-button" onclick="window.open('compiler/ide44')">try this code</button>
                    <br>
                    <br>
                    <p class="lead">This is something difficult to understand. But PHP offers ex cellent tools to convert a time stamp into a form that humans are comfortable with.</p>
                    <br>
                    <b>Converting a Time Stamp with getdate()</b>
                    <p>The function <b>getdate()</b> optionally accepts a time stamp and returns an associative array containing information about the date. If you omit the time stamp, it works with the current time stamp as returned by time().</p>
                    <p>The function getdate() optionally accepts a time stamp and returns an associative array containing information about the date. If you omit the time stamp, it works with the current time stamp as returned by time().</p>

                    <b>Function & Description</b>
                    <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Key</th>
                          <th>Description</th>
                          <th>Example</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>seconds</td>
                          <td>Seconds past the minutes (0-59)</td>
                          <td>20</td>
                        </tr>
                         <tr>
                          <td>minutes</td>
                          <td>Minutes past the hour (0 - 59)</td>
                          <td>29</td>
                        </tr>

                         <tr>
                          <td>hours</td>
                          <td>Hours of the day (0 - 23)</td>
                          <td>22</td>
                        </tr>
                         <tr>
                          <td>wday</td>
                          <td>Day of the week (0 - 6)</td>
                          <td>4</td>
                        </tr>
                         <tr>
                          <td>mon</td>
                          <td>Month of the year (1 - 12)</td>
                          <td>7</td>
                        </tr>
                         <tr>
                          <td>year</td>
                          <td>Year (4 digits)</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>yday</td>
                          <td>Day of the week</td>
                          <td>Thursday</td>
                        </tr>
                        <tr>
                          <td>weekday</td>
                          <td>Year (4 digits)</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>month</td>
                          <td>Month of the year</td>
                          <td>January</td>
                        </tr>
                        <tr>
                          <td>0</td>
                          <td>Timestamp</td>
                          <td>948370048</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    <p class="lead">Now you have complete control over date and time. You can format this date and time in whatever format you want</p>

                    Example:
                    <div class = "demo-code">
                      <code>
                        $date_array = getdate();<br>
 
                        foreach ( $date_array as $key => $val ){<br>
                        print "$key = $val&lt;br&gt;";<br>
                         }<br>
                         $formated_date = "Today's date: ";<br>
                         $formated_date .= $date_array['mday'] . "/";<br>
                         $formated_date .= $date_array['mon'] . "/";<br>
                         $formated_date .= $date_array['year'];<br>
                         <br>
                         print $formated_date;<br>
                      </code>
                    </div>
                    <br>
                    <button class="run-button" onclick="window.open('compiler/ide45')">try this code</button>
                    <br>

                    <br>
                    <b>Converting a Time Stamp with date()</b>
                    <p>The <b>date()</b> function returns a formatted string representing a date. You can exercise a n enormous amount of control over the format that date() returns with a string argument that you must pass to it.</p>
                    <div class = "demo-code">
                      <code>
                        date(format,timestamp)
                       </code> 
                    </div>
                    <p>The date() optionally accepts a time stamp if omitted then current date and time will be used. Any other data you include in the format string passed to date() will be included in the return value.</p>
                    <p>Following table lists the codes that a format string can contain:</p>
                     <b>Format & Description</b>
                    <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Format</th>
                          <th>Description</th>
                          <th>Example</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>a</td>
                          <td>'am' or 'pm' lowercase</td>
                          <td>pm</td>
                        </tr>
                         <tr>
                          <td>A</td>
                          <td>'AM' or 'PM' uppercase</td>
                          <td>PM</td>
                        </tr>

                         <tr>
                          <td>d</td>
                          <td>Day of month, a number with leading zeroes</td>
                          <td>20</td>
                        </tr>
                         <tr>
                          <td>D</td>
                          <td>Day of week (three letters)</td>
                          <td>Thu</td>
                        </tr>
                         <tr>
                          <td>F</td>
                          <td>Month name</td>
                          <td>January</td>
                        </tr>
                         <tr>
                          <td>h</td>
                          <td>Hour (12-hour format - leading zeroes)</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td>H</td>
                          <td>Hour (24-hour format - leading zeroes)</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td>g</td>
                          <td>Hour (12-hour format - no leading zeroes)</td>
                          <td>12</td>
                        </tr>
                        <tr>
                          <td>G</td>
                          <td>Hour (24-hour format - no leading zeroes)</td>
                          <td>22</td>
                        </tr>
                        <tr>
                          <td>I</td>
                          <td>Minutes ( 0 - 59 )</td>
                          <td>23</td>
                        </tr>
                        <tr>
                          <td>j</td>
                          <td>Day of the month (no leading zeroes</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>l (Lower 'L')</td>
                          <td>Day of the week</td>
                          <td>Thursday</td>
                        </tr>
                        <tr>
                          <td>L</td>
                          <td>Leap year ('1' for yes, '0' for no)</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>m</td>
                          <td>Month of year (number - leading zeroes)</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>M</td>
                          <td>Month of year (three letters)</td>
                          <td>Thu, 21 Dec 2000 16:01:07 +0200</td>
                        </tr>
                        <tr>
                          <td>r</td>
                          <td>The RFC 2822 formatted date</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>n</td>
                          <td>Month of year (number - no leading zeroes)</td>
                          <td>2</td>
                        </tr>
                        <tr>
                        <tr>
                          <td>s</td>
                          <td>Seconds of hour</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>U</td>
                          <td>Time stamp</td>
                          <td>948372444</td>
                        </tr>
                        <tr>
                          <td>y</td>
                          <td>Year (two digits)</td>
                          <td>06</td>
                        </tr>
                        <tr>
                          <td>Y</td>
                          <td>Year (four digits)</td>
                          <td>2006</td>
                        </tr>
                        <tr>
                          <td>z</td>
                          <td>Day of year (0 - 365)</td>
                          <td>206</td>
                        </tr>
                        <tr>
                          <td>Z</td>
                          <td>Offset in seconds from GMT</td>
                          <td>+5</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                    <br>
                    Example:
                    <div class = "demo-code">
                      <code>
                      print date("m/d/y G.i:s&lt;br&gt;", time());<br>
                      echo "&lt;br&gt;";<br>
                      print "Today is ";<br>
                      print date("j of F Y, \a\\t g.i a", time());<br>
                      </code>
                    </div>
                    <br>
                    <button class="run-button" onclick="window.open('compiler/ide46')">try this code</button>
                    <br>
                    <p class="lead">Hope you have good understanding on how to format date and time according to your requirement.</p>
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
              width: 80%;
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
