<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <nav class="navbar">
    <div class="brand-title">Brand Name</div>
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="navbar-links">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- Side Links Only -->
  <div class="side-links">
    <a href="https://youtu.be/At4B7A4GOPg" target="_blank" class="side-link side-link-youtube">
      <i class="fab fa-youtube-square side-link-icon"></i>
      <span class="side-link-text">View Tutorial</span>
    </a>
    <a href="https://github.com/WebDevSimplified" target="_blank" class="side-link side-link-github side-link-icon">
      <i class="fab fa-github-square"></i>
      <span class="side-link-text">View GitHub</span>
    </a>
    <a href="https://twitter.com/DevSimplified" target="_blank" class="side-link side-link-twitter">
      <i class="fab fa-twitter-square side-link-icon"></i>
      <span class="side-link-text">View Twitter</span>
    </a>
  </div>
  <script>
  	const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})
  </script>
</body>

</html>