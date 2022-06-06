<?php
session_start();
$conn = new mysqli("localhost", "root", "", "learn_lang");
$targetimg = "images/user/";
$uploadOk = true;
$email = $_SESSION["email"];
if (isset($_POST["submit"])) {
  $sptarget = $targetimg . basename($_FILES["picture"]["name"]);
  $imgtype = strtolower(pathinfo($sptarget, PATHINFO_EXTENSION));
  $username = $_POST['username'];
  $password = $_POST['password'];
  $language = $_POST['language'];
  $fullname = $_POST['fullname'];
  $picture = $sptarget;
  $check = getimagesize($_FILES["picture"]["tmp_name"]);
  if ($check !== false) {
    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $sptarget)) {
      $uploadOk = true;
    } else {
      $uploadOk = false;
    }
  }
  if ($uploadOk == false) {
    echo "<p style='color:red'>somthing is wrong with your picture</p>";
    $picture = "images/user/default.png";
  }
  $sqluser = "INSERT INTO `users`(`email`, `username`, `password_user`, `fullname`, `language_user`, `picture`) 
  VALUES ('$email','$username','$password','$fullname','$language','$picture');";
  if ($conn->query($sqluser)) {
    header("Location:sign-in.php");
    echo "<p style='color:green'>Successfull</p>";
  } else {
    echo "Error creating database: " . $conn->error;
  }
  // {
  //   echo "<p style='color:red'>somthing wrong</p>";
  // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>LANG | Confirm information</title>

  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/typography.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
</head>

<body class="sidebar-main-active right-column-fixed">

  <div id="content-page" class="content-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
              <div class="iq-header-title">
                <h4 class="card-title"></h4>
              </div>
            </div>
            <div class="iq-card-body">
              <form method="post" action="" id="form-wizard1" class="text-center mt-4" enctype="multipart/form-data">
                <ul id="top-tab-list" class="p-0">
                  <li class="active" id="account">
                    <a href="javascript:void();">
                      <i class="ri-lock-unlock-line"></i><span>Account</span>
                    </a>
                  </li>
                </ul>
                <fieldset>
                  <div class="form-card text-left">
                    <div class="row">
                      <div class="col-7">
                        <h3 class="mb-4">Account Information:</h3>
                      </div>
                      <div class="col-5">
                        <h2 class="steps">Step 2 - 2</h2>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Username: *</label>
                          <input type="text" class="form-control" name="username" placeholder="UserName" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Full Name: *</label>
                          <input type="text" class="form-control" name="fullname" placeholder="Full name" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Password: *</label>
                          <input type="password" class="form-control" name="password" placeholder="Password" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Confirm Password: *</label>
                          <input type="password" class="form-control" name="password2" placeholder="Confirm Password" required />
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">

                          <label>lannguage :</label>
                          <select name="language" class="form-control" required id="selectuserrole">
                            <option value="en ar">english - arabic </option>
                            <option value="ar en">arabic - english </option>
                            <option value="ar es">arabic - spanish </option>
                            <option value="en fr">english - francais </option>
                            <option value="en es">english - spanish </option>
                            <option value="ar de">arabic german </option>
                            <option value="ar fr">arabic - french </option>

                          </select>
                        </div>

                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Picture : </label>

                          <input accept=".jpg, .png, .jpeg, .jfif " type="file" class="form-control" name="picture" required placeholder="Last Name" />
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <button name="submit" type="submit">submit
                  Sign up
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- Appear JavaScript -->
  <script src="js/jquery.appear.js"></script>
  <!-- Countdown JavaScript -->
  <script src="js/countdown.min.js"></script>
  <!-- Counterup JavaScript -->
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <!-- Wow JavaScript -->
  <script src="js/wow.min.js"></script>
  <!-- Apexcharts JavaScript -->
  <script src="js/apexcharts.js"></script>
  <!-- Slick JavaScript -->
  <script src="js/slick.min.js"></script>
  <!-- Select2 JavaScript -->
  <script src="js/select2.min.js"></script>
  <!-- Owl Carousel JavaScript -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Magnific Popup JavaScript -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Smooth Scrollbar JavaScript -->
  <script src="js/smooth-scrollbar.js"></script>

  <!-- am core JavaScript -->
  <script src="js/core.js"></script>
  <!-- am charts JavaScript -->
  <script src="js/charts.js"></script>
  <!-- am animated JavaScript -->
  <script src="js/animated.js"></script>
  <!-- am kelly JavaScript -->
  <script src="js/kelly.js"></script>
  <!-- am maps JavaScript -->
  <script src="js/maps.js"></script>
  <!-- am worldLow JavaScript -->
  <script src="js/worldLow.js"></script>
  <!-- Style Customizer -->
  <script src="js/style-customizer.js"></script>
  <script src="js/chart-custom.js"></script>
  <!-- music js -->
  <script src="js/music-player.js"></script>
  <!-- music-player js -->
  <script src="js/music-player-dashboard.js"></script>
  <!-- Custom JavaScript -->
  <script src="js/custom.js"></script>
</body>

<!-- Mirrored from templates.iqonic.design/LANG/html/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:44:45 GMT -->

</html>