<?php
include('connection.php');
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg "> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form action='button.php'>
      <?php
      if(isset($_SESSION['username'])){
        echo "<a href='logout.php'> LOGOUT</a>";
      }
      else{
      echo"<button type='button' ><a href='button.php'>Login/Register</a></button>";
      }
   ?>
  
      </form>
    </div>
  </div>
</nav>
<?php
// if(isset($_SESSION['logged_in'])){

//   echo' <div class="user">
//   $_SESSION[username] <a href="logout.php"> LOGOUT</a>"
//   </div>';
// }
// else{
//   echo"login.php";
// }

?>
<div class="container" >

<div class="cards">
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_1.jpg" class="card-img-top" >
        <h5 class="card-title">HTML</h5>
        
        <p class="card-text">HTML stands for Hyper Text Markup Language
HTML is the standard markup language for creating Web pages
HTML describes the structure of a Web page
HTML consists of a series of elements
HTML elements tell the browser how to display the content
HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.
</p><?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
  </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_2.jpg" class="card-img-top" >
        <h5 class="card-title">CSS</h5>

        <p class="card-text">CSS stands for Cascading Style Sheets
CSS describes how HTML elements are to be displayed on screen, paper, or in other media
CSS saves a lot of work. It can control the layout of multiple web pages all at once
External stylesheets are stored in CSS files. It can control the layout of multiple web pages all at once
External stylesheets are stored in CSS files.</p>

<?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_4.jpg" class="card-img-top" >
        <h5 class="card-title">Javascript</h5>

        <p class="card-text">JavaScript, often abbreviated as JS, is an interpreted programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientationprototype-based object-orientation, and first-class functionsand first-class functions</p>
        <?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
  

      </div>
    </div>
  </div>
  
</div>

<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_6.jpg" class="card-img-top" >
        <h5 class="card-title">PHP</h5>
        
        <p class="card-text">PHP is a server-side language that can be used in conjunction with a database to create dynamic web pages. By the word "dynamic" it allows you to input or query data  from a web page.from a web page. These aren't the only things PHP allows you to do interaction with databases are a key feature of server-side languages.</p>
        <?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_7.jpg" class="card-img-top" >
        <h5 class="card-title">Python</h5>

        <p class="card-text">Python is an interpreted, high-level and general-purpose programming language. Python's design philosophy emphasizes code readability with its notable use of significant indentation. Its language constructs and object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.</p>
        <?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <img src="card_8.jpg" class="card-img-top" >
        <h5 class="card-title">C++</h5>

        <p class="card-text">C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes". The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation.</p>
        <?php
      if(isset($_SESSION['username'])){
        echo "<a href='https://en.wikipedia.org/wiki/Python_%28programming_language%29' class='btn btn-primary'>more..</a>";
      }
      else{
      }
?>
      </div>
    </div>
  </div>
  
</div>
</div>
</div>
</div>

  </body>
</html>







