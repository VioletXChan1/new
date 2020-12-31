<?php
  if(isset($_POST["FA18"]))
  {
    $fa18 = $_POST["FA18"];
  }
  if(isset($_POST["BCS"]))
  {
    $bcs = $_POST["BCS"];
  }
  if(isset($_POST["reg"]))
  {
    $Reg = $_POST["reg"];
  }
  if(isset($_POST["password"]))
  {
    $pass = $_POST["password"];
  }
  $con=new mysqli("localhost","root","","comsats");
  if($con->connect_error)
  {
    die("Failed : " .$con->connect_error);
  }
  else
  {
    $stmt=$con->prepare("select * from signup where FA18=?");
    $stmt->bind_param("s",$fa18);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
      $data=$stmt_result->fetch_assoc();
      if($data['password']===$pass)
      {
        echo "Hola";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Comsats</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#00587a;">
      <div class="container-fluid">
        <a style="color:white" class="navbar-brand" href="#">Comsats University</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a style="color:white" class="first-nav nav-link active" aria-current="page" href="#">Admission</a>
            </li>
            <li class="nav-item">
              <a style="color:white" class="second-nav nav-link" href="#">Fee Structure</a>
            </li>
            <li class="nav-item">
              <a style="color:white" class="third-nav nav-link" href="#" aria-disabled="true">Eligibity Criteria</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="">
      <center>
        <img class="comsis-logo" src="logo.png" alt="">
    </center>
    <h1 class="Title">Comsats University Abbottabad</h1>
    <center>
        <div class="mt-5">
          <form class="" action="Login.php" method="post">
            <label style="font-size:1.5rem;color:white;" for="">Reg</label>
            <input style="width:100px;"type="text" name="FA18" value="">
            -
            <input  style="width:100px;" type="text" name="BCS" value="">
            -
            <input  style="width:100px;" type="text" name="reg" value="">
            <br>
            <label style="font-size:1.5rem;color:white;"for="">Password:</label>
            <input style="width:270px;" type="password" name="password" value="" id="myInput"> <br>
            <input type="checkbox" onclick="myFunction()">Show Password
            <br>
            <button style="margin-left:110px;margin-top:20px;border:none;" class="btn-success" type="button" name="button"><a style="color:white;" href="Forgot.php">Forgot Password</a></button>
            <button style="width:110px;border:none;"  class="btn-success" type="submit" name="button">Log In</button>
          </form>
        </div>
    </div>
    <script src="login.js" charset="utf-8"></script>
  </body>
</html>
