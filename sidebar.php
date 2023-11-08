

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
           <a class="s-sidebar__nav-link" href="#0">
             <i class="fa fa-user"></i><em>Introduction to PHP</em>
           </a>
        </li>
        <li>
           <a class="s-sidebar__nav-link" href="#0">
              <i class="fa fa-camera"></i><em>PHP Installation</em>
           </a>
        </li>
        <li>
           <a class="s-sidebar__nav-link" href="#0">
             <i class="fa fa-user"></i><em>PHP Common Use</em>
           </a>
        </li>
        <li>
           <a class="s-sidebar__nav-link" href="#0">
              <i class="fa fa-camera"></i><em>Introduction to Array</em>
           </a>
        </li>
        <li>
           <a class="s-sidebar__nav-link" href="#0">
             <i class="fa fa-user"></i><em>Web Concepts</em>
           </a>
        </li>
        <li>
           <a class="s-sidebar__nav-link" href="#0">
              <i class="fa fa-camera"></i><em>Advanced PHP</em>
           </a>
        </li>
        <li>
           <a class="s-sidebar__nav-link" href="#0">
             <i class="fa fa-user"></i><em>Database Connection</em>
           </a>
        </li>
        <li>
           <a class="s-sidebar__nav-link" href="#0">
              <i class="fa fa-camera"></i><em>OOP Concept</em>
           </a>
        </li>
     </ul>
  </nav>
</div>

<!-- Content -->
<main class="s-layout__content">
  <h1>Full View, Please!</h1>
</main>
</div>

<style>
  /* Primary Styles */
*, *::before, *::after {
   box-sizing: border-box;
}

body {
   font-family: sans-serif;
   font-size: 1em;
   color: #333;
}

h1 {
  font-size: 1.4em;
}

em {
   font-style: normal;
}

a {
   text-decoration: none;
   color: inherit;
} 

/* Layout */
.s-layout {
   display: flex;
   width: 100%;
   min-height: 100vh;
}

.s-layout__content {
   display: flex;
   justify-content: center;
   align-items: center;
   flex: 1;
}

/* Sidebar */
.s-sidebar__trigger {
   z-index: 2;
   position: fixed;
   top: 0;
   left: 0;
   width: 100%;
   height: 4em;
   background: #2E6D32;
}

.s-sidebar__trigger > i {
   display: inline-block;
   margin: 1.5em 0 0 1.5em;
   color: white;
}

.s-sidebar__nav {
   position: fixed;
   top: 0;
   left: -15em;
   overflow: hidden;
   transition: all .3s ease-in;
   width: 15em;
   height: 100%;
   background: #F0F0F0;
   color: black;
}

.s-sidebar__nav:hover,
.s-sidebar__nav:focus,
.s-sidebar__trigger:focus + .s-sidebar__nav,
.s-sidebar__trigger:hover + .s-sidebar__nav {
   left: 0;
}

.s-sidebar__nav ul {
   position: absolute;
   top: 4em;
   left: 0;
   margin: 0;
   padding: 0;
   width: 15em;
}

.s-sidebar__nav ul li {
   width: 100%;
}

.s-sidebar__nav-link {
   position: relative;
   display: block;
   width: 100%;
   height: 3em;
   padding: 0px;
}

.s-sidebar__nav-link em {
   position: absolute;
   top: 50%;
   left: 4em;
   transform: translateY(-50%);
}

.s-sidebar__nav-link:hover {
   background: #2E6D32;
   color: white;
}

.s-sidebar__nav-link > i {
   position: absolute;
   top: 0;
   left: 0;
   display: inline-block;
   width: 4em;
   height: 4em;
}

.s-sidebar__nav-link > i::before {
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
}

/* Mobile First */
@media (min-width: 42em) {
   .s-layout__content {
      margin-left: 4em;
   }
   
   /* Sidebar */
   .s-sidebar__trigger {
      width: 4em;
   }
   
   .s-sidebar__nav {
      width: 4em;
      left: 0;
   }
   
   .s-sidebar__nav:hover,
   .s-sidebar__nav:focus,
   .s-sidebar__trigger:hover + .s-sidebar__nav,
   .s-sidebar__trigger:focus + .s-sidebar__nav {
      width: 15em;
   }
}

@media (min-width: 68em) {
   .s-layout__content {
      margin-left: 15em;
   }
   
   /* Sidebar */
   .s-sidebar__trigger {
      display: none
   }
   
   .s-sidebar__nav {
      width: 15em;
   }
   
   .s-sidebar__nav ul {
      top: 1.3em;
   }
}

</style>