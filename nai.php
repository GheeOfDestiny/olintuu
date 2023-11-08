<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Navbar Hover Box Effect</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    img{
      width: 70px;
    }
    .navbar .nav-item:hover {
      background-color: #f8f9fa; /* Change the background color on hover */
    }
    .navbar .nav-item {
      position: relative;
      text-align: center;
      color: #C8E6C9; /* Center align the nav items */
    }

    .navbar .nav-item:hover{
      display: block;
    }

    /* Additional styles for the information div */
    .navbar .nav-info {
      display: none;
      position: absolute;
      top: 100%; /* Position the information div below the nav item */
      left: 50%; /* Position the information div in the center horizontally */
      transform: translateX(-50%); /* Adjust the horizontal position */
      width: 200px;
      background-color: #2E6D32; /* Background color for the information div */
      color: #fff; /* Text color for the information div */
      padding: 10px;
      border: 1px solid #ccc;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light " style="background: #2E6D32;">
    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#about" >Dashboard</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#services">PHP Tutorial</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#contact-us">Projects</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#footer">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#footer">Register/Login</a>
                  </li>
      </ul>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
