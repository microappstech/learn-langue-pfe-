<?php
session_start();

if ($_SESSION["username"] == "") {
  header("location:sign-in.php");
}
$conn = new mysqli("localhost", "root", "", "learn_lang");
$username = $_SESSION["username"];
$sqluser = "SELECT * from langue,users where users.language_user=langue.name_lang and  users.username = '$username'";
$sqllangue = "SELECT * FROM langue , users where users.language_user=langue.name_lang and  users.username = '$username'";
$res2 = $conn->query($sqllangue);
$res = $conn->query($sqluser);

$user = $res->fetch_array();
$langue = $res2->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>LANG - Profile</title>
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
    <?php include './assets/nav2.php'
    ?>

    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
      <div class="container-fluid">

        <div class="row profile-content">
          <div class="col">
            <div class="iq-card">
              <div class="iq-card-body profile-page">
                <div class="profile-header">
                  <div class="cover-container text-center">
                    <img src="<?php echo $langue["picture"] ?>" alt="profile-bg" class=" w-25 h-25 rounded-circle img-fluid" />
                    <div class="profile-detail mt-3">
                      <h3><?php echo $user["fullname"] ?></h3>
                      <p class="text-primary"><?php echo "@" . $langue["username"] ?></p>

                    </div>
                    <div class="iq-social d-inline-block align-items-center">
                      <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                        <li>
                          <a href="<?php echo $langue["facebook"] ?>" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                          <a href="<?php echo $langue["twitter"] ?>" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                          <a href="<?php echo $langue["youtube"] ?>" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                <div class="iq-header-title">
                  <h4 class="card-title mb-0">Personal Details</h4>
                </div>
              </div>
              <div class="iq-card-body">
                <ul class="list-inline p-0 mb-0">
                  <li>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h6>Full Name</h6>
                      <p class="mb-0"><?php echo $user["fullname"] ?></p>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h6>Your Langue</h6>
                      <p class="mb-0"><?php echo $langue["name_complet"]; ?></p>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h6>Learning </h6>
                      <p class="mb-0"><?php echo $langue["des"]; ?></p>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h6>Age </h6>
                      <p class="mb-0"><?php echo $langue["age"]; ?></p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                <div class="iq-header-title">
                  <h4 class="card-title mb-0">Skill Progress</h4>
                </div>
              </div>
              <div class="iq-card-body">
                <ul class="list-inline p-0 mb-0">
                  <li>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h6>Biography</h6>
                      <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                        <div class="iq-progress-bar iq-bg-primary">
                          <span class="bg-primary" data-percent="70"></span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h6>Horror</h6>
                      <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                        <div class="iq-progress-bar iq-bg-danger">
                          <span class="bg-danger" data-percent="50"></span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                      <h6>Comic Book</h6>
                      <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                        <div class="iq-progress-bar iq-bg-info">
                          <span class="bg-info" data-percent="65"></span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center justify-content-between">
                      <h6>Adventure</h6>
                      <div class="iq-progress-bar-linear d-inline-block mt-1 w-50">
                        <div class="iq-progress-bar iq-bg-success">
                          <span class="bg-success" data-percent="85"></span>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-8 d-none">
            <div class="row">
              <div class="col-md-6">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                  <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                    <div class="iq-header-title">
                      <h4 class="card-title mb-0">Latest Uploads</h4>
                    </div>
                  </div>
                  <div class="iq-card-body">
                    <ul class="list-inline p-0 mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <div class="profile-icon bg-secondary">
                          <span><i class="ri-file-3-fill"></i></span>
                        </div>
                        <div class="media-support-info ml-3">
                          <h6>Documentation</h6>
                          <p class="mb-0">48kb</p>
                        </div>
                        <div class="iq-card-toolbar ml-auto">
                          <div class="dropdown">
                            <span class="font-size-24" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false">
                              <i class="ri-more-line"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right p-0" style="">
                              <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                              <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex mb-4 align-items-center">
                        <div class="profile-icon bg-secondary">
                          <span><i class="ri-image-fill"></i></span>
                        </div>
                        <div class="media-support-info ml-3">
                          <h6>Images</h6>
                          <p class="mb-0">204kb</p>
                        </div>
                        <div class="iq-card-toolbar ml-auto">
                          <div class="dropdown">
                            <span class="font-size-24" id="dropdownMenuButton02" data-toggle="dropdown" aria-expanded="false">
                              <i class="ri-more-line"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right p-0" style="">
                              <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                              <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex mb-4 align-items-center">
                        <div class="profile-icon bg-secondary">
                          <span><i class="ri-video-fill"></i></span>
                        </div>
                        <div class="media-support-info ml-3">
                          <h6>Videos</h6>
                          <p class="mb-0">509kb</p>
                        </div>
                        <div class="iq-card-toolbar ml-auto">
                          <div class="dropdown">
                            <span class="font-size-24" id="dropdownMenuButton03" data-toggle="dropdown" aria-expanded="false">
                              <i class="ri-more-line"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right p-0" style="">
                              <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                              <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex mb-4 align-items-center">
                        <div class="profile-icon bg-secondary">
                          <span><i class="ri-file-3-fill"></i></span>
                        </div>
                        <div class="media-support-info ml-3">
                          <h6>Resources</h6>
                          <p class="mb-0">48kb</p>
                        </div>
                        <div class="iq-card-toolbar ml-auto">
                          <div class="dropdown">
                            <span class="font-size-24" id="dropdownMenuButton04" data-toggle="dropdown" aria-expanded="false">
                              <i class="ri-more-line"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right p-0" style="">
                              <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                              <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="d-flex align-items-center">
                        <div class="profile-icon bg-secondary">
                          <span><i class="ri-refresh-line"></i></span>
                        </div>
                        <div class="media-support-info ml-3">
                          <h6>Celine Dion</h6>
                          <p class="mb-0">204kb</p>
                        </div>
                        <div class="iq-card-toolbar ml-auto">
                          <div class="dropdown">
                            <span class="font-size-24" id="dropdownMenuButton05" data-toggle="dropdown" aria-expanded="false">
                              <i class="ri-more-line"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right p-0" style="">
                              <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Share</a>
                              <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-none">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                  <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                    <div class="iq-header-title">
                      <h4 class="card-title mb-0">Top Books</h4>
                    </div>
                  </div>
                  <div class="iq-card-body">
                    <ul class="list-inline p-0 mb-0">
                      <li>
                        <div class="iq-details mb-2">
                          <span class="title">Adventure</span>
                          <div class="percentage float-right text-primary">
                            95 <span>%</span>
                          </div>
                          <div class="iq-progress-bar-linear d-inline-block w-100">
                            <div class="iq-progress-bar">
                              <span class="bg-primary" data-percent="95"></span>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="iq-details mb-2">
                          <span class="title">Horror</span>
                          <div class="percentage float-right text-warning">
                            72 <span>%</span>
                          </div>
                          <div class="iq-progress-bar-linear d-inline-block w-100">
                            <div class="iq-progress-bar">
                              <span class="bg-warning" data-percent="72"></span>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="iq-details mb-2">
                          <span class="title">Comic Book</span>
                          <div class="percentage float-right text-info">
                            75 <span>%</span>
                          </div>
                          <div class="iq-progress-bar-linear d-inline-block w-100">
                            <div class="iq-progress-bar">
                              <span class="bg-info" data-percent="75"></span>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="iq-details mb-2">
                          <span class="title">Biography</span>
                          <div class="percentage float-right text-danger">
                            70 <span>%</span>
                          </div>
                          <div class="iq-progress-bar-linear d-inline-block w-100">
                            <div class="iq-progress-bar">
                              <span class="bg-danger" data-percent="70"></span>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="iq-details">
                          <span class="title">Mystery</span>
                          <div class="percentage float-right text-success">
                            80 <span>%</span>
                          </div>
                          <div class="iq-progress-bar-linear d-inline-block w-100">
                            <div class="iq-progress-bar">
                              <span class="bg-success" data-percent="80"></span>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                <div class="iq-header-title">
                  <h4 class="card-title mb-0">Daily Sales</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                  <div class="dropdown">
                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton05" data-toggle="dropdown">
                      <i class="ri-more-fill"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                      <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                      <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                      <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                      <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="iq-card-body">
                <ul class="perfomer-lists m-0 p-0">
                  <li class="d-flex mb-4 align-items-center">
                    <div class="user-img img-fluid">
                      <img class="img-fluid avatar-50 rounded-circle" src="images/user/06.jpg" alt="" />
                    </div>
                    <div class="media-support-info ml-3">
                      <h5>Reading on the World</h5>
                      <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-center ml-auto">
                      <span class="text-dark"><b>+$82</b></span>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center">
                    <div class="user-img img-fluid">
                      <img class="img-fluid avatar-50 rounded-circle" src="images/user/07.jpg" alt="" />
                    </div>
                    <div class="media-support-info ml-3">
                      <h5>Little Black Book</h5>
                      <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-center ml-auto">
                      <span class="text-dark"><b>+$90</b></span>
                    </div>
                  </li>
                  <li class="d-flex mb-4 align-items-center">
                    <div class="user-img img-fluid">
                      <img class="img-fluid avatar-50 rounded-circle" src="images/user/08.jpg" alt="" />
                    </div>
                    <div class="media-support-info ml-3">
                      <h5>See the More Story</h5>
                      <p class="mb-0">Lorem Ipsum is simply dummy test</p>
                    </div>
                    <div class="iq-card-header-toolbar d-flex align-items-cener ml-auto">
                      <span class="text-dark"><b>+$85</b></span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="iq-card d-none">
              <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                <div class="iq-header-title">
                  <h4 class="card-title mb-0">Top Products</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                  <div class="dropdown">
                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton05" data-toggle="dropdown">
                      <i class="ri-more-fill"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                      <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                      <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                      <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                      <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="iq-card-body">
                <ul class="perfomer-lists m-0 p-0">
                  <li class="row mb-3 align-items-center justify-content-between">
                    <div class="col-md-8">
                      <h5>Find The Wave Book</h5>
                      <p class="mb-0">General Book</p>
                    </div>
                    <div class="col-md-4 text-right">
                      <div class="iq-card-header-toolbar d-flex align-items-center">
                        <span class="text-primary mr-3"><b>+$92</b></span>
                        <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                          <div class="iq-progress-bar iq-bg-primary">
                            <span class="bg-primary" data-percent="92"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="row mb-3 align-items-center justify-content-between">
                    <div class="col-md-8">
                      <h5>A man with those Faces</h5>
                      <p class="mb-0">Biography Book</p>
                    </div>
                    <div class="col-md-4 text-right">
                      <div class="iq-card-header-toolbar d-flex align-items-center">
                        <span class="text-danger mr-3"><b>+$85</b></span>
                        <div class="iq-progress-bar-linear d-inline-block mt-1 w-100">
                          <div class="iq-progress-bar iq-bg-danger">
                            <span class="bg-danger" data-percent="85"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Wrapper END -->

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
  <!-- lottie JavaScript -->
  <script src="js/lottie.js"></script>
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
  <!-- Raphael-min JavaScript -->
  <script src="js/raphael-min.js"></script>
  <!-- Morris JavaScript -->
  <script src="js/morris.js"></script>
  <!-- Morris min JavaScript -->
  <script src="js/morris.min.js"></script>
  <!-- Flatpicker Js -->
  <script src="js/flatpickr.js"></script>
  <!-- Style Customizer -->
  <script src="js/style-customizer.js"></script>
  <!-- Chart Custom JavaScript -->
  <script src="js/chart-custom.js"></script>
  <!-- Music js -->
  <script src="js/music-player.js"></script>
  <!-- Music-player js -->
  <script src="js/music-player-dashboard.js"></script>
  <!-- Custom JavaScript -->
  <script src="js/custom.js"></script>
  <!-- Footer -->
  <!-- Footer END -->
</body>


</html>