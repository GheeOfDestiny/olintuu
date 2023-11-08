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
             <a class="s-sidebar__nav-link" href="#0" style="border-top: 0.5px solid #d0d0d0;">
                <i class="fa fa-camera"></i><em><b>OOP Concept</b></em>
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
                <div id = "array"></div>
                <section class = "main-section" >
                    <header><h3>Introduction to Array</h3></header>
                    <p>An <b>array</b> is a container that stores one or more similar type of values of a single type. The length of an array is established when the array is created. <b>Array</b> is a special variable that we use to store or hold more than one value in a single variable without having to create more variables to store those values.</p>
                    <p>To create an array in PHP, we use the array function <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">array( )</code>. By default, an array of any variable starts with the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">0</code> index.</p>
                    <p>There are different types of arrays in PHP. They are:</p>
                    <ul>
                      <li>Numeric/Indexed Arrays</li>
                      <br>
                      <li>Associative Arrays</li>
                      <br>
                      <li>Multidimensional Arrays</li>
                      <br>
                    </ul>
                </section>
                    
                <div id = "index"></div>    
                <section class = "main-section">
                  <header><h3>Numeric or Indexed Arrays</h3></header>
                  <p>A numerical array is a type of array which can store strings, numbers, and objects.</p>
                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                          $animal = array("Cat", "Dog", "Jaguar", "Tiger", "Lion");<br>
                          var_dump($animal);
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      array(5) {<br>
                      [0]=><br>
                      string(3) "Cat"<br>
                      [1]=><br>
                      string(3) "Dog"<br>
                      [2]=><br>
                      string(6) "Jaguar"<br>
                      [3]=><br>
                      string(5) "Tiger"<br>
                      [4]=><br>
                      string(4) "Lion"<br>
                      }
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide21')">try this code</button>
                    <br>
                  <p>The code above create variable of <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">$animal</code> which stores an array of 5 elements. The <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">var_dump($animal)</code> keyword above will show us the </p>

                  <ul>
                      <li>total number of elements we have in the array,</li>
                      <br>
                      <li>index number of each array,</li>
                      <br>
                      <li>length of each element in the array.</li>
                      <br>
                    </ul>

                    <p>You can also choose to display only one element/item of an array by specifying the index of an elemen</p>
                    <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                          $animal = array("Cat", "Dog", "Jaguar", "Tiger", "Lion");<br>
                          echo "$animal[3]";
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      Tiger
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide22')">try this code</button>
                    <br>

                  <p class = "lead">The <code style="background: khaki; border-radius: 4px; padding: 3px;">var_dump( )</code> is a user defined function that gives displays structured information about one or more expressions that includes its type and value.</p>
                </section>

                <div id = "asso"></div>    
                <section class = "main-section">
                  <header><h3>Associative Array</h3></header>
                  <p>A type of array where the key has its own value. In an associative array, we make use of <b>key</b> and <b>value.</b></p>
                  <p><b>key</b> are descriptive captions of the array element used to access the value of the array and <b>value.</b> is the value assigned to the array element</p>

                  <b>Used of Associative Array</b>
                  <br>
                  <ul>
                    <li>When you want to store the age of different students along with their names.</li>
                    <br>
                    <li>When you want to record the salaries of your employees.</li>
                    <br>
                    <li>When you want to store the score of a student in different subjects.</li>
                    
                  </ul>




                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                            $student_age = array (<br>
                            "Marta" => 27,<br>
                            "Allen" => 28,<br>
                            "Pedro" => 26,<br>
                            "Alex" => 27,<br>
                            );<br>
                            echo $student_age ["Marta"]; //this code will display the age of Marta as 27<br>
                            echo $student_age ["Allen"]; //this code will display the age of Allen as 28<br>
                            echo $student_age ["Pedro"]; //this code will display the age of Pedro as 26<br>
                            echo $student_age ["Alex"]; //this code will display the age of Alex as 27<br>
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      27282627
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide23')">try this code</button>
                    <br>
                </section>

                <div id = "multidimentional"></div>    
                <section class = "main-section">
                  <header><h3>Multidimensional Array</h3></header>
                  <p>Is an array of array. This means that every element in the array holds a sub-array within it. This allows you to store multiple arrays in a single variable .</p>
                  <br>
                  <p>We can use multidimensional array to store the Names, Registration Numbers, and Emails of some of the students enrolled in a university. </p>
                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                          $staffs = [<br>
                              [<br>
                                  "Name" => "John Santos",<br>
                                  "Reg_No" => "2012345",<br>
                                  "Email" => "johnsantos@gmail.com"<br>
                              ],<br>
                              [<br>
                                  "Name" => "Edward San Jose",<br>
                                  "Reg_No" => "2254569",<br>
                                  "Email" => "edwardsanjose@gmail.com"<br>
                              ],<br>
                              [<br>
                                  "Name" => "Jojie Gonzales",<br>
                                  "Reg_No" => "2169854",<br>
                                  "Email" => "jojiegonzales@gmail.com"<br>
                              ]<br>
                          ];<br>

                          echo $staffs[2]["Email"];<br>
                          echo "<br>"; // Displays the email of the last staff, which is jojiegonzales@gmail.com<br>
                          echo $staffs[0]["Name"]; // Displays the name of the first staff, which is John Santos<br>
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      jojiegonzales@gmail.com<br>
                      John Santos
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide24')">try this code</button>
                    <br>
                     <p class = "lead">Remember, an array starts counting from <b>index 0</b>. The code above is an example of a multidimensional array because it contains more than one array <b>(an array of arrays)</b> with one single variable of $staff. The <code style="background: khaki; border-radius: 4px; padding: 3px;">echo $staff [2] ["Email"]</code> displays the email of the staff that falls into the <b>index of 2</b>.</p>

                </section> 

                <div id = "strings"></div>    
                <section class = "main-section">
                  <header><h3>Strings</h3></header>
                  <p>The string in PHP is implemented as an array of bytes and an integer indicating the length of the buffer. It has no information about how those bytes translate to characters, leaving that task to the programmer. There are no limitations on the values the string can be composed of; in particular, bytes with value 0(“NUL bytes”) are allowed anywhere in the string</p>
                  <p>A string literal can be specified in four different ways:</p>
                  <ul>
                    <li>single quoted</li>
                    <br>
                    <li>double quoted</li>
                    <br>
                    <li>heredoc syntax</li>
                    <br>
                    <li>nowdoc syntax</li>
                    <br>
                  </ul>
                  <b>single Quoted</b>
                  <br>
                  <p>To specify a literal single quote, escape it with a backslash <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">(\)</code>. To specify a literal backslash, double it <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">(\\)</code>. All other instances of backslash will be treated as a literal backslash: this means that the other escape sequences you might be used to, such as <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">\r</code> or <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">\n</code>, will be output literally as specified rather than having any special meaning</p>
                   <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                          echo 'Dangal greetings';
                      </code>    
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      Dangal greetings
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide25')">try this code</button>
                    <br>
                    <br>

                  <b>Double Quoted</b>  
                  <p>If the string is enclosed in double-quotes ("), PHP will interpret the following escape sequences for special characters:</p>
                   <p>Example:</p>
                  
                  <br>
                  <center>
                      <table>
                      <thead>
                        <tr>
                          <th>Sequence</th>
                          <th>Meaning</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>\n</td>
                          <td>linefeed (LF or 0x0A (10) in ASCII)</td>
                        </tr>
                        <tr>
                          <td>\r</td>
                          <td>carriage return (CR or 0x0D (13) in ASCII)</td>
                        </tr>
                        <tr>
                          <td>\t</td>
                          <td>horizontal tab (HT or 0x09 (9) in ASCII)</td>
                        </tr>
                        <tr>
                          <td>\v</td>
                          <td>vertical tab (VT or 0x0B (11) in ASCII)</td>
                        </tr>
                        <tr>
                          <td>\e</td>
                          <td>escape (ESC or 0x1B (27) in ASCII)</td>
                        </tr>
                        <tr>
                          <td>\f</td>
                          <td>form feed (FF or 0x0C (12) in ASCII)</td>
                        </tr>
                        <tr>
                          <td>\\</td>
                          <td>backslash</td>
                        </tr>
                        <tr>
                          <td>\$</td>
                          <td>dollar sign</td>
                        </tr>
                        <tr>
                          <td>\"</td>
                          <td>double-quote</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                     <p>Example:</p>
                    <div class = "demo-code">
                      <code>
                          echo "Dangal greetings";
                      </code>  
                    </div>  

                      <br>
                      <b>Heredoc syntax</b>  
                      <p>A third way to delimit strings is the heredoc syntax: <<<. After this operator, an identifier is provided, then a newline. The string itself follows, and then the same identifier again to close the quotation.</p>
                    <p>Example:</p>
                    <div class = "demo-code">
                      <code>
                          echo &lt;&lt;&lt;END<br>
                            &nbsp;&nbsp;&nbsp;a<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;b<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c<br>
                            \n<br>
                            END;

                      </code>  
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      a<br>
                      b<br>
                      c<br>
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide26')">try this code</button>
                    <br>
                    <br>

                    <p class="lead">Heredoc text behaves just like a double-quoted string, without the double quotes. This means that quotes in a heredoc do not need to be escaped, but the escape codes listed above can still be used. Variables are expanded, but the same care must be taken when expressing complex variables inside a heredoc as with strings.</p>
                    <br>
                    <b>NowDoc</b>
                    <p>Nowdocs are to single-quoted strings what heredocs are to double-quoted strings. A nowdoc is specified similarly to a heredoc, but <b>no parsing is done</b> inside a nowdoc. The construct is ideal for embedding PHP code or other large blocks of text without the need for escaping. 
                    <br>
                    <br>
                    A nowdoc is identified with the same &lt;&lt;&lt; sequence used for heredocs, but the identifier which follows is enclosed in single quotes, e.g. &lt;&lt;&lt;'EOT'. All the rules for heredoc identifiers also apply to nowdoc identifiers, especially those regarding the appearance of the closing identifier.</p>
                    <p>Example:</p>
                    <div class = "demo-code">
                      <code>
                          echo &lt;&lt;&lt;'EOD'<br>
                          Example of string spanning multiple lines<br>
                          using nowdoc syntax. Backslashes are always treated literally,<br>
                          e.g. \n and \'.<br>
                          EOD;<br>


                      </code>  
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      Example of string spanning multiple lines<br>
                      using nowdoc syntax. Backslashes are always treated literally,<br>
                      e.g. \n and \'.<br>
                    </code>
                  </div>
                   <br>
                    <button class="run-button" onclick="window.open('compiler/ide27')">try this code</button>
                    <br>


                </section>  

               

                <div id = "func"></div>    
                <section class = "main-section">
                  <header><h3>Function</h3></header>
                  <p>The real power of PHP comes from its functions. A function is a piece of code that takes another input in the form of a parameter, processes it, and then returns a value.</p>
                  <br>
                  <p><b>PHP Built Functions</b> PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.</p>
                  <br>
                  <b>PHP User Defined Functions</b>
                  <p>Besides the built-in PHP functions, it is possible to create your own functions.</p>
                  <ul>
                    <li>A function is a block of statements that can be used repeatedly in a program.</li>
                    <br>
                    <li>A function will not execute automatically when a page loads.</li>
                    <br>
                    <li>A function will be executed by a call to the function.</li>
                  </ul>
                  <br>
                  <b>Advantages of PHP Function</b>
                  <br>
                  <ul>
                    <li>Reusability of Code: Unlike other programming languages, PHP Functions are specified only once and can be called multiple times.</li>
                    <br>
                    <li>Less Code: It saves a lot of code because the logic doesn't have to be written several times. You can write the logic only once and reuse it by using functions.</li>
                    <br>
                    <li>Simple to Comprehend: The programming logic is separated using PHP Functions. Since every logic is divided into functions, it is easier to understand the application's flow.</li>
                  </ul>
                  <br>
                  <b>Creating and Calling Function</b>
                  <p>In PHP, the function name is any name that ends in an open and closed parenthesis.</p>
                  <br>
                  <ul>
                    <li>The keyword function is often used to start a function name.</li>
                    <br>
                    <li>To invoke a function, simply type its name followed by the parenthesis.</li>
                    <br>
                    <li>A number cannot be the first character in a feature name. It can begin with a letter or an underscore.</li>
                    <br>
                    <li>The case of a feature name is unimportant.</li>
                  </ul>

                  <p>Syntax:</p>
                  <div class="demo-code">
                    <code>
                      function function_name()<br>
                      { <br>
                      //Statement to be executed <br>
                      } <br>
                    </code>
                  </div>
                  <br>
                  <p>Example</p>
                  <div class="demo-code">
                    <code>
                      function greetings(){<br>
                         echo 'Dangal greetings!!!';<br>
                        }<br>
                        greetings();<br>
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide28')">try this code</button>
                  <br>
                  <br>
                  <b>PHP Function Arguments</b>
                  <p>In PHP Function, arguments may be used to transfer information to functions. A variable is the same as 
                    an argument. Arguments are listed within parentheses after the function name. You can add as many 
                    arguments as you want; just use a comma to divide them.
                    <br>
                    <br>
                    Parameters are the information or variables contained within the function's parenthesis. These are used 
                    to store the values that can be executed at runtime. A user can enter as many parameters as he desires, 
                    separated by the <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">comma (,)</code> operator. During runtime, these parameters are used to accept inputs. 
                    Arguments are used while exchanging values, such as during a function call</p>
                    <br>
                    <p>Example</p>
                  <div class="demo-code">
                    <code>
                      function greetings($msg){<br>
                       echo $msg;<br>
                      }<br>
                      greetings("Dangal greetings");<br>
                      greetings("\nHow's your day");<br>

                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide29')">try this code</button>
                  <br>
                  <br>
                  <b>PHP Functions - Returning Value</b>
                  <p>This means the PHP Function can be called by its name, and when executing the function, it will return some value.</p>
                  <p>example</p>
                  <div class="demo-code">
                    <code>
                     function Sum($n1, $n2){<br>
                       return $n1 + $n2;<br>
                      }<br>
                      echo sum(1,2)<br>
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide30')">try this code</button>
                  <br>
                  <br>
                  <b>Passing Arguments By Reference</b>
                  <p>Arguments are generally passed by value in PHP, which ensures that the function uses a copy of the value and the variable passed into the function cannot be modified. Changes to the argument modify the variable passed in when a function argument is passed by reference. The & operator is used to convert a function argument into a reference.</p>
                  <p>example</p>
                  <div class="demo-code">
                    <code>
                    function addition(&$val) {<br>
                      $val += 10;<br>
                      }<br>
                      $number = 5;<br>
                      addition($number);<br>
                      echo $number;<br>
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide31')">try this code</button>
                  <br>

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
