<?php
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>


  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="#" class="active nav-link"><i class="fa fa-home fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dashboards</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">File Upload</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <a class="btn btn-danger" href="logout.php">Log Out</a>
        </div>
      </div>
    </div>
  </div>
      <!--	<h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to our site.</h1>  -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Larry</td>
                <td>the Bird</td>
              </tr>
            
            <?php
              for ($x = 0; $x <= 10; $x++) {

                $s = "<tr><td>" . $x . "</td><td>". $_SESSION["username"] . "</td><td>" . $_SESSION["username"] . "</td><td></tr>"; 
                echo $s;
            }
            ?>

            </tbody>


          </table>
        </div>
      </div>
    </div>
  </div>
    <div class="text-center section-dark-opaque py-0" style="background-image:logo.png:">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <h1 style="font-family:monaco;" >Plena Data</h1>
	  <p style="font-family:monaco;"> support@pelnadata.com &nbsp  (123) 456-7890 </p>	
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>
