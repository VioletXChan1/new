<?php
  $con=mysqli_connect('localhost','root','','comsats');
  if(isset($_POST['submit']))
  {
    $newpass=$_POST['newpass'];
    $email = isset($_GET['gmail']) ? $_GET['gmail'] : '';
    $changepass=mysqli_query($con,"UPDATE signup SET password='$newpass' WHERE gmail='$email'");
    if($changepass)
    {
      echo "Your Password is Changed";
      header('Refresh:1;url=Login.php');
    }
    else {
      echo "error";
    }
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Login.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Comsatsa</title>
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
          <form class="" action="resetpass.php" method="post">
            <label for="">New Password</label>
            <input type="text" name="newpass" value="">
            <br>
            <br>
            <button style="margin-left:110px;margin-top:20px;border:none;" class="btn-success" type="submit" name="submit">Reset</button>
          </form>
        </div>
    </div>
  </body>
</html>
