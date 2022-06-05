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
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center"></div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">
    <!-- Sidebar  -->
    <?php include './assets/nav2.php' ?>
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
      <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="iq-menu-bt d-flex align-items-center">
            <div class="wrapper-menu">
              <div class="main-circle"><i class="las la-bars"></i></div>
            </div>
            <div class="iq-navbar-logo d-flex justify-content-between">
              <a href="index.html" class="header-logo">
                <img src="images/logo.png" class="img-fluid rounded-normal" alt="" />
                <div class="pt-2 pl-2 logo-title">
                  <span class="text-primary text-uppercase">LANG</span>
                </div>
              </a>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="list-unstyled iq-menu-top d-flex justify-content-between mb-0 p-0">
              <li><a href="index.html">Home</a></li>
              <li><a href="latest.html">Latest</a></li>
              <li><a href="albums.html">Albums</a></li>
            </ul>
            <ul class="navbar-nav ml-auto navbar-list">
              <li class="nav-item nav-icon">
                <div class="iq-search-bar">
                  <form action="#" class="searchbox">
                    <input type="text" class="text search-input" placeholder="Search Here.." />
                    <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                    <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                  </form>
                </div>
              </li>
              <li class="nav-item nav-icon search-content">
                <a href="#" class="search-toggle iq-waves-effect text-gray rounded"><span class="ripple rippleEffect"></span>
                  <i class="ri-search-line text-black"></i>
                </a>
                <form action="#" class="search-box p-0">
                  <input type="text" class="text search-input" placeholder="Type here to search..." />
                  <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                  <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
                </form>
              </li>
              <li class="nav-item nav-icon">
                <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                  <i class="las la-cog"></i>
                  <span class="dots"></span>
                </a>
              </li>
              <li class="nav-item nav-icon">
                <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                  <i class="lar la-envelope"></i>
                  <span class="massage-icon dots badge badge-primary">5</span>
                </a>
                <div class="iq-sub-dropdown">
                  <div class="iq-card shadow-none m-0">
                    <div class="iq-card-body p-0">
                      <div class="bg-primary p-3">
                        <h5 class="mb-0 text-white">
                          All Messages<small class="badge badge-light float-right pt-1">5</small>
                        </h5>
                      </div>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="images/user/01.jpg" alt="" />
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Bni Emma Watson</h6>
                            <small class="float-left font-size-12">13 Jun</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="images/user/02.jpg" alt="" />
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Lorem Ipsum Watson</h6>
                            <small class="float-left font-size-12">20 Apr</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="images/user/03.jpg" alt="" />
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Why do we use it?</h6>
                            <small class="float-left font-size-12">30 Jun</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="images/user/04.jpg" alt="" />
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Variations Passages</h6>
                            <small class="float-left font-size-12">12 Sep</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="images/user/05.jpg" alt="" />
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Lorem Ipsum generators</h6>
                            <small class="float-left font-size-12">5 Dec</small>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item nav-icon">
                <a href="#" class="search-toggle iq-waves-effect text-black rounded">
                  <i class="ri-notification-line block"></i>
                  <span class="notice-icon dots badge badge-primary">+</span>
                </a>
                <div class="iq-sub-dropdown">
                  <div class="iq-card shadow-none m-0">
                    <div class="iq-card-body p-0">
                      <div class="bg-primary p-3">
                        <h5 class="mb-0 text-white">
                          All Notifications<small class="badge badge-light float-right pt-1">4</small>
                        </h5>
                      </div>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded img-fluid" src="images/user/01.jpg" alt="" />
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Emma Watson Barry</h6>
                            <small class="float-right">Just Now</small>
                            <p class="mb-0">95 MB</p>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded img-fluid" src="images/user/02.jpg" alt="" />
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">New customer is join</h6>
                            <small class="float-right">5 days ago</small>
                            <p class="mb-0">Cyst Barry</p>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded img-fluid" src="images/user/03.jpg" alt="" />
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Two customer is left</h6>
                            <small class="float-right">2 days ago</small>
                            <p class="mb-0">Cyst Barry</p>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded img-fluid" src="images/user/04.jpg" alt="" />
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">New Mail from Fenny</h6>
                            <small class="float-right">3 days ago</small>
                            <p class="mb-0">Cyst Barry</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="line-height pt-3">
                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                  <img src="<?php echo $user["picture"] ?>" class="img-fluid rounded-circle" alt="user" />
                </a>
                <div class="iq-sub-dropdown iq-user-dropdown">
                  <div class="iq-card shadow-none m-0">
                    <div class="iq-card-body p-0">
                      <div class="bg-primary p-3">
                        <h5 class="mb-0 text-white line-height">
                          Hello <?php $user["fullname"] ?>
                        </h5>
                        <span class="text-white font-size-12">Available</span>
                      </div>
                      <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                        <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                            <i class="ri-file-user-line"></i>
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">My Profile</h6>
                            <p class="mb-0 font-size-12">
                              View personal profile details.
                            </p>
                          </div>
                        </div>
                      </a>
                      <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                        <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                            <i class="ri-profile-line"></i>
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Edit Profile</h6>
                            <p class="mb-0 font-size-12">
                              Modify your personal details.
                            </p>
                          </div>
                        </div>
                      </a>
                      <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                        <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                            <i class="ri-account-box-line"></i>
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Account settings</h6>
                            <p class="mb-0 font-size-12">
                              Manage your account parameters.
                            </p>
                          </div>
                        </div>
                      </a>
                      <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                        <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                            <i class="ri-lock-line"></i>
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0">Privacy Settings</h6>
                            <p class="mb-0 font-size-12">
                              Control your privacy parameters.
                            </p>
                          </div>
                        </div>
                      </a>
                      <div class="d-inline-block w-100 text-center p-3">
                        <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="iq-card">
              <div class="iq-card-body p-0">
                <div class="iq-edit-list">
                  <ul class="iq-edit-profile d-flex nav nav-pills">
                    <li class="col-md-3 p-0">
                      <a class="nav-link active" data-toggle="pill" href="#personal-information">
                        Personal Information
                      </a>
                    </li>
                    <li class="col-md-3 p-0">
                      <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                        Change Password
                      </a>
                    </li>
                    <li class="col-md-3 p-0">
                      <a class="nav-link" data-toggle="pill" href="#emailandsms">
                        Email and SMS
                      </a>
                    </li>
                    <li class="col-md-3 p-0">
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
                      <form>
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
                            <input type="text" class="form-control" name="username" id="lname" value="<?php echo $user["username"] ?>" />
                          </div>
                          <div class="form-group col-sm-12">
                            <label for="uname">Description :</label>
                            <textarea name="<?php echo $user["username"] ?>" id="uname" value="" class="form-control" cols="5" rows="2"></textarea>
                          </div>

                          <div class="form-group col-sm-6">
                            <label>Age:</label>
                            <select class="form-control" id="exampleFormControlSelect2">
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
                        <button type="submit" class="btn btn-primary mr-2">
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
                      <form>
                        <div class="form-group">
                          <label for="cpass">Current Password:</label>
                          <a href="javascripe:void();" class="float-right">Forgot Password</a>
                          <input type="Password" class="form-control" id="cpass" value="" />
                        </div>
                        <div class="form-group">
                          <label for="npass">New Password:</label>
                          <input type="Password" class="form-control" id="npass" value="" />
                        </div>
                        <div class="form-group">
                          <label for="vpass">Verify Password:</label>
                          <input type="Password" class="form-control" id="vpass" value="" />
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">
                          Submit
                        </button>
                        <button type="reset" class="btn iq-bg-danger">
                          Cancel
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                  <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                      <div class="iq-header-title">
                        <h4 class="card-title">Email and SMS</h4>
                      </div>
                    </div>
                    <div class="iq-card-body">
                      <form>
                        <div class="form-group row align-items-center">
                          <label class="col-8 col-md-3" for="emailnotification">Email Notification:</label>
                          <div class="col-4 col-md-9 custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="emailnotification" checked="" />
                            <label class="custom-control-label" for="emailnotification"></label>
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-8 col-md-3" for="smsnotification">SMS Notification:</label>
                          <div class="col-4 col-md-9 custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="smsnotification" checked="" />
                            <label class="custom-control-label" for="smsnotification"></label>
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-3" for="npass">When To Email</label>
                          <div class="col-md-9">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="email01" />
                              <label class="custom-control-label" for="email01">You have new notifications.</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="email02" />
                              <label class="custom-control-label" for="email02">You're sent a direct message</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="email03" checked="" />
                              <label class="custom-control-label" for="email03">Someone adds you as a connection</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-3" for="npass">When To Escalate Emails</label>
                          <div class="col-md-9">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="email04" />
                              <label class="custom-control-label" for="email04">
                                Upon new order.</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="email05" />
                              <label class="custom-control-label" for="email05">
                                New membership approval</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="email06" checked="" />
                              <label class="custom-control-label" for="email06">
                                Member registration</label>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">
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
                      <form>
                        <div class="form-group">
                          <label for="cno">Contact Number:</label>
                          <input type="text" class="form-control" id="cno" value="001 2536 123 458" />
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="text" class="form-control" id="email" value="Barryjone@demo.com" />
                        </div>
                        <div class="form-group">
                          <label for="url">Url:</label>
                          <input type="text" class="form-control" id="url" value="https://getbootstrap.com/" />
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">
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