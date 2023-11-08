<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav class="navigation-menu navigation-container">
        <div class="brand-title"><a href=""><img src="images/logo.png" alt="logo"></a></div>
         <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
        <div class="navbar-links">
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#card1">Php Tutorials</a></li>
            <li><a href="#online">Projects</a></li>
            <li><a href="#abouts">About</a></li>
            <li><a href="register">Register/Login</a></li>
          </ul>
        </div>
    </nav>
     <script>
    const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})
  </script>
</body>

</html>