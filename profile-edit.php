<?php
session_start();
$conn = new mysqli("localhost", "root", "", "learn_lang");
$username = $_SESSION["username"];
$sqluser = "SELECT * from users where username = '$username'";
$res = $conn->query($sqluser);
$user = $res->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>LANG - Edit Profile</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Typography CSS -->
  <link rel="stylesheet" href="css/typography.css" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css" />
</head>

<body class="sidebar-main-active right-column-fixed">
  <?php
  $conn = new mysqli("localhost", "root", "", "learn_lang");
  if (isset($_POST["info"])) {
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    $description = $_POST["description"];
    $age = $_POST["age"];
    $language = $_POST["language"];
    $sql = "UPDATE `users` SET `email`=$email,`fullname`=$fullname,`language_user`=$language,`age`=$age,`description`=$description WHERE username=$username";
    if ($conn->query($sql)) {
      echo "<p style='color:green;'>updated seccussfully</p>";
    } else {
      echo "<p style='color:red;'>updated seccussfully</p>";
    }
  }
  ?>
  <div id="loading">
    <div id="loading-center"></div>
  </div>
  <div class="wrapper">
    <?php include './assets/nav.php' ?>

    <div id="content-page" class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="iq-card">
              <div class="iq-card-body p-0">
                <div class="iq-edit-list">
                  <ul class="iq-edit-profile d-flex nav nav-pills">
                    <li class="col-md-4 p-0">
                      <a class="nav-link active" data-toggle="pill" href="#personal-information">
                        Personal Information
                      </a>
                    </li>
                    <li class="col-md-4 p-0">
                      <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                        Change Password
                      </a>
                    </li>
                    <li class="col-md-4 p-0">
                      <a class="nav-link" data-toggle="pill" href="#manage-contact">
                        Manage Contact
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="iq-edit-list-data">
              <div class="tab-content">
                <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                  <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                        <h4 class="card-title">Personal Information</h4>
                      </div>
                    </div>
                    <div class="iq-card-body">
                      <form method="POST">
                        <div class="form-group row align-items-center">
                          <div class="col-md-12">
                            <div class="profile-img-edit">
                              <img class="profile-pic" class="h-50" src="<?php echo $user["picture"] ?>" alt="profile-pic" />
                              <div class="p-image">
                                <i class="ri-pencil-line upload-button"></i>
                                <input class="file-upload" type="file" accept="image/*" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row align-items-center">
                          <div class="form-group col-sm-6">
                            <label for="fname">Fullname :</label>
                            <input type="text" class="form-control" id="fname" name="fullname" value="<?php echo $user["fullname"] ?>" />
                          </div>
                          <div class="form-group col-sm-6">
                            <label for="lname">username:</label>
                            <input type="text" class="form-control" name="email" id="lname" value="<?php echo $user["email"] ?>" />
                          </div>
                          <div class="form-group col-sm-12">
                            <label for="uname">Description :</label>
                            <textarea name="<?php echo $user["username"] ?>" id="uname" value="" class="form-control" cols="5" rows="2"></textarea>
                          </div>

                          <div class="form-group col-sm-6">
                            <label>Age:</label>
                            <select class="form-control" id="exampleFormControlSelect2" name="age">
                              <option>12-18</option>
                              <option>19-32</option>
                              <option selected="">33-45</option>
                              <option>46-62</option>
                              <option>63 ></option>
                            </select>
                          </div>
                          <div class="form-group col-sm-6">
                            <label>lannguage :</label>
                            <select name="language" class="form-control" required id="selectuserrole">
                              <option value="en ar">english - arabic</option>
                              <option value="ar en">arabic - english</option>
                              <option value="ar es">arabic - spanish</option>
                              <option value="en fr">english - francais</option>
                              <option value="en es">english - spanish</option>
                            </select>
                          </div>
                        </div>
                        <button type="submit" name="info" class="btn btn-primary mr-2">
                          Submit
                        </button>
                        <button type="reset" class="btn iq-bg-danger">
                          Cancel
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                  <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                        <h4 class="card-title">Change Password</h4>
                      </div>
                    </div>
                    <div class="iq-card-body">
                      <!-- change password -->
                      <form method="POST">
                        <div class="form-group">
                          <label for="cpass">Current Password:</label>
                          <input type="Password" name="password" class="form-control" id="cpass" value="" />
                        </div>
                        <div class="form-group">
                          <label for="npass">New Password:</label>
                          <input type="Password" name="password1" class="form-control" id="npass" value="" />
                        </div>
                        <div class="form-group">
                          <label for="vpass">Verify Password:</label>
                          <input type="Password" name="password2" class="form-control" id="vpass" value="" />
                        </div>
                        <button type="submit" name="changeps" class="btn btn-primary mr-2">
                          Submit
                        </button>
                        <button type="reset" class="btn iq-bg-danger">
                          Cancel
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                  <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                        <h4 class="card-title">Manage Contact</h4>
                      </div>
                    </div>
                    <div class="iq-card-body">
                      <form action="POST">
                        <div class="form-group">
                          <label for="cno">facebook</label>
                          <input type="text" class="form-control" id="cno" value="001 2536 123 458" name="facebook" placeholder="Url : facebbok" />
                        </div>
                        <div class="form-group">
                          <label for="email">Instagram:</label>
                          <input type="text" class="form-control" id="email" name="instagram" value="" placeholder="Url : instagram" />
                        </div>
                        <div class="form-group">
                          <label for="url">Twitter:</label>
                          <input type="text" class="form-control" name="twitter" id="url" placeholder="Url Twitter" />
                        </div>
                        <button type="submit" name="social" class="btn btn-primary mr-2">
                          Submit
                        </button>
                        <button type="reset" class="btn iq-bg-danger">
                          Cancel
                        </button>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Wrapper END -->
  <!-- Footer -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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

<!-- Mirrored from templates.iqonic.design/LANG/html/profile-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:44:38 GMT -->

</html>