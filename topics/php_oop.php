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

                <div id = "oop"></div>
                <section class = "main-section" >
                    <header><h3>Object Oriented Concepts</h3></header>
                    <p>In this module, we’re going to explain the Object-Oriented Programming concept in PHP with some example s. We can imagine our universe made of different objects like sun, earth, moon etc. Similarly we can imagine our car made of different objects like wheel, steering, gear etc. Same way there is object oriented program ming concepts which assume everything as an object and implement a software using different objects.</p>

                    <b>The Object-Oriented Pro gramming concepts are:</b>
                    <ul>
                      <li>Class</li>
                      <br>
                      <li>Objects</li>
                      <br>
                      <li>Inheritance</li>
                      <br>
                      <li>Interface</li>
                      <br>
                      <li>Abstraction</li>
                    </ul>
                </section>
                    
                <div id = "class"></div>    
                <section class = "main-section">
                  <header><h3>Class and Objects</h3></header>
                  <ul>
                    <li>Class is a programmer-defined data type, which includes local methods and local variables.</li>
                    <br>
                    <li>Class is a collection of objects. Object has properties and attributes.</li>
                  </ul>
                  <p>To define class in php we must have a file whose classname should be same as filename.</p>

                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                          class Students{<br>
                          public function name(){<br>
                           echo "Juan Dela Cruz";<br>
                           }<br>
                           public function grade(){<br>
                           echo "English: 2.75";<br>
                           }<br>
                          }<br>
                          $obj = new Students();<br>
                          $obj->name();<br>
                          echo "&lt;br&gt;";<br>
                          $obj->grade();<br>


                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      Juan Dela Cruz<br>
                      English: 2.75<br>
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide48')">try this code</button>
                    <br>
                    <p class="lead">To create php object we have to use a new operator. Here php object is the object of the Students Class.</p>
                </section>  

                 <div id = "objects"></div>    
                <section class = "main-section">
                  <header><h3>Creating Objects in PHP</h3></header>
                  <p>When class is created, we can create any number of objects in that class. The object is created with the help of the new keyword.</p>
                  <b>Calling Member Function</b>
                  <p>When the object is created we can access the variables and method function of the class with the help of operator '<code style="background: #F0F0F0; border-radius: 4px; padding: 3px;"> -></code>, accessing the method is done to get the information of that method. </p>
                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                          function setPrice($param){<br>
                           $this->price = $param;<br>
                           }<br>
                           function getPrice(){<br>
                           echo $this->price ."&lt;br/&gt;";<br>
                           }<br>
                           function setBrand($param){<br>
                           $this->brand= $param;<br>
                           }<br>
                           function getBrand(){<br>
                           echo $this->brand." &lt;br/&gt;";<br>
                           }<br>
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                      SamsungS8<br>
                      Iphone7s<br>
                      90000<br>
                      65000<br>
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide49')">try this code</button>
                    <br>
                </section> 

                <div id = "inheritance"></div>    
                <section class = "main-section">
                  <header><h3>Inheritance</h3></header> 
                  <p>When the properties and the methods of the parent class are accessed by the child class, we call the concept has inheritance. The child class can inherit the parent method and give own method implementation, this property is called overridden method. When the same method of the parent class is inherited we call as inherited method</p>
                  <b>Types Of Inheritance</b>
                  <ul>
                    <li>Single Level Inheritance</li>
                    <br>
                    <li>Multilevel Inheritance</li>
                  </ul>
                  <p><b>Single Level Inheritance:</b> In Single Level Inheritance the Parent class methods will be extended by the chil d class. All the methods can be inherited.</p>
                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                          $a = new A();<br>
                          $b = new B();<br>
                          $a->printItem('Raju');<br>
                          $a->printPHP(); <br>
                          $b->printItem('savan'); <br>
                          $b->printPHP();<br>
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                     Hi: Pavan<br>
                      I am from valuebound<br>
                      Hi: savan<br>
                      I am from ABC<br>
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide50')">try this code</button>
                    <br>
                    <br>
                    <p><b>MultiLevel Inheritance :</b> In MultiLevel Inheritance, the parent class method will be inherited by child class and again subclass will inherit the child class method.</p>
                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                         public function myHistory() {<br>
                           echo "Class A " .$this->myage();<br>
                           echo "Class B ".$this-> mysonage();<br>
                           echo "Class C " . $this->mygrandsonage();<br>
                           }<br>
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                     Class A age is 80<br>
                     Class B age is 50<br>
                     Class C age is 20<br>
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide51')">try this code</button>
                  <br>

                </section>  

                <div id = "interface"></div>    
                <section class = "main-section">
                  <header><h3>Interface</h3></header>
                  <ul>
                    <li>An interface is a description of the actions that an object can do.</li>
                    <br>
                    <li>Interface is written in the same way as the class the declaration with interface keyword.</li>
                  </ul>
                  <br>
                  <b>Rules of Interfaces:</b>
                  <ul>
                    <li>All methods declared in an interface must be public; this is the nature of an interface.</li>
                    <br>
                    <li>All methods in the interface must be implemented within a class; failure to do so will result in a fatal erro</li>
                    <br>
                    <li>The class implementing the interface must use the exact same method signatures as are defined in the interface</li>
                    <br>
                    <li>Interfaces can be extended like classes using the extends operator.</li>
                  </ul>

                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                         interface A {<br>
                         public function setProperty($x);<br>
                         public function description();<br>
                        }<br>
                        class Mangoes implements A {<br>
                         public function setProperty($x) {<br>
                         $this->x = $x;<br>
                         }<br>
                         public function description() {<br>
                         echo 'Describing' . $this->x . 'tree';<br>
                         }<br>
                        }<br>
                        $Mango = new Mangoes();<br>
                        $Mango->setProperty(" mango ");<br>
                        $Mango->description();<br>
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                         Describing mango tree
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide52')">try this code</button>
                  <br>
                  <p class="lead">Interface can be extended with another interface using extends keyword.</p>
                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                        interface B extends A {<br>
                         public function Divide();<br>
                        }<br>
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                          Quotient of 10/2 is 5<br>
                          Product of 2 * 3 is 6<br>
                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide53')">try this code</button>
                  <br>
                  <br>
                  <b>Note on Interfaces:-</b>
                  <ul>
                    <li>We cannot create objects to interface, but the class implementing the interface can have objects</li>
                    <br>
                    <li>We cannot define a variable in an interface.</li>
                    <br>
                    <li>If we extend interface all the methods of the interface must be implemented in the child clas s.</li>
                  </ul>
                </section>  

                 <div id = "abstract"></div>    
                <section class = "main-section">
                  <header><h3>Abstract Classes:</h3></header>
                  <ul>
                    <li>An abstract class is a class that contains at least one abstract method. The abstract method is function declaration without anybody and it has the only name of the method and its parameters.</li>
                    <br>
                    <li>There can be any number of methods in the class and we have to declare the class as abstract only when there is an abstract method</li>
                  </ul>

                  <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                        $car = new Baleno();<br>
                        $car1 = new Santro();<br>
                        echo $car->getCompanyName();<br>
                        echo $car->getPrice();<br>
                        echo $car1->getCompanyName();<br>
                        echo $car1->getPrice();<br>
                      </code>
                  </div>
                  <br>
                  Output:
                  <br>
                  <div class="demo-code">
                    <code>
                          Maruthi Suzuki<br>
                          720000<br>
                          Hyundai<br>
                          300000<br>

                    </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide54')">try this code</button>
                  <br>
                  <br>
                  <b>Notes on Abstract classes</b>
                  <ul>
                    <li>Objects cannot be created for the abstract classes.</li>
                    <br>
                    <li>If a class has only one method as abstract, then that class must be an abstract class.</li>
                    <br>
                    <li>The child class which extends an abstract class must define all the methods of the abstract class.</li>
                    <br>
                    <li>If the abstract method is defined as protected in the parent class, the function implementation must be defined as either protected or public, but not private.</li>
                    <br>
                    <li>The signatures of the methods must match, optional parameter given in the child class will not be accepted and error will be shown.</li>
                    <br>
                    <li>Abstract classes that declare all their methods as abstract are not interfaces with different names. One can implement multiple interfaces, but not extend multiple classes (or abstract classes).</li>
                  </ul>


                </section> 

                <div id = "abstract_vs_interface"></div>    
                <section class = "main-section">
                  <header><h3>Abstract vs. Interface</h3></header> 
                  <center>
                      <table>
                      <thead>
                         <tr>
                          <th>Abstract class</th>
                          <th>Interface</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>It can have constants, members, method stubs (methods without a body), methods </td>
                          <td>It can only have constants and methods stubs.</td>
                        </tr>
                        <tr>
                          <td>Methods and members can have public or protected visibility</td>
                          <td>Methods of interface should only be public not any other visibility</td>
                        </tr>
                        <tr>
                          <td>The concept of multiple inheritances not supported.</td>
                          <td>An interface can extend or a class can implement multiple other interfaces.</td>
                        </tr>
                        <tr>
                          <td>Child class must implement all the abstract method of parent class when extend keyword is used.</td>
                          <td>No need of implementing methods from parent interface when interface is extending another interface</td>
                        </tr>
                      </tbody>
                  </table>
                    </center>
                </section>  


                <div id = "constructor"></div>    
                <section class = "main-section">
                  <header><h3>Constructor Functions</h3></header> 
                  <p>Constructor Functions are special type of functions which are called automatically whenever an object is created. PHP provides a special function called <code style="background: #F0F0F0; border-radius: 4px; padding: 3px;">__construct()</code> to define a constructor. You can pass as many as arguments you like into the constructor function.</p>
                   <p>Example:</p>
                  <div class = "demo-code">
                      <code>
                         class Books {<br>
                         /* Member variables */<br>
                         var $price;<br>
                         var $title;<br>
                         <br>
                        /* member constructor */<br>
                        function __construct( $par1, $par2 ) {<br>
                         $this->title = $par1;<br>
                         $this->price = $par2;<br>
                        }<br>
                         /* Member functions */<br>
                         function setPrice($par){<br>
                         $this->price = $par;<br>
                         }<br>
                         <br>
                         function getPrice(){<br>
                         echo $this->price ."&lt;br/&gt;";<br>
                         }<br>
                         <br>
                         function setTitle($par){<br>
                         $this->title = $par;<br>
                         }<br>
                         <br>
                         function getTitle(){<br>
                         echo $this->title ." &lt;br/&gt;";<br>
                         }<br>
                         }<br>
                      </code>
                  </div>
                  <p class="lead">You don’t need to call setter function separately to set the price and title. We can initialize these two membervariables at the time of object creation.</p>
                  <div class = "demo-code">
                      <code>
                        $physics = new Books( "Physics for High School", 10 );<br>
                        $maths = new Books ( "Advanced Chemistry", 15 );<br>
                        $chemistry = new Books ("Algebra", 7 );<br>
                        /* Get those set values */<br>
                        $physics->getTitle();<br>
                        $chemistry->getTitle();<br>
                        $maths->getTitle();<br>
                        $physics->getPrice();<br>
                        $chemistry->getPrice();<br>
                        $maths->getPrice();<br>
                      </code>
                  </div>
                  Output:
                  <div class = "demo-code">
                      <code>
                        Physics for High School<br>
                        Algebra<br>
                        Advanced Chemistry<br>
                        10<br>
                        7<br>
                        15<br>
                      </code>
                  </div>
                  <br>
                    <button class="run-button" onclick="window.open('compiler/ide55')">try this code</button>
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
