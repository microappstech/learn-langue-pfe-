<?php
session_start();
$usename = $_SESSION["username"];
if (!isset($_SESSION["username"])) {
  header("location:sign-in.php");
}
include './files/functions.php';
$conn = new mysqli("localhost", "root", "", "learn_lang");
$querylangue = "SELECT * from users , langue where users.language_user = langue.name_lang and users.username='$usename';";
$queryu = "SELECT * from users where username='$usename';";
if (!isset($_SESSION["category"])) {
  $category = "at school";
} else {
  $category = $_SESSION["category"];
}
if (isset($_SESSION['nameaudio'])) {
  $nameaudio =  $_GET['nameaudio'];
} else {
  $nameaudio = "ARES001.mp3";
}

$result2 = $conn->query($querylangue);
$lang = $result2->fetch_assoc();

?>
<!doctype html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LANG- Player audio</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Typography CSS -->
  <link rel="stylesheet" href="css/typography.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
    </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">
    <!-- Sidebar  -->

    <?php include './assets/nav.php' ?>
    <!-- TOP Nav Bar END -->

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="iq-card">
              <div class="iq-card-body">
                <div class="row">
                  <div class="col-lg-4">
                    <form method="POST" class="form-group">
                      <label>Category :</label>
                      <select name="category" class="form-control" id="selectuserrole">
                        <?php
                        $sqloption = "SELECT DISTINCT(audio_cate) from audio;";
                        $rescate = $conn->query($sqloption);
                        $cates = array();
                        while ($data = $rescate->fetch_assoc()) {
                          array_push($cates, $data);
                        }
                        $length = count($cates);
                        $i = 0;
                        foreach ($cates as $key => $cate) :
                          if ($i >= $length) {
                            break;
                          }
                          $i++;





                        ?>
                          <option value='<?php echo $cate["audio_cate"] ?>'><?php echo $cate["audio_cate"] ?></option>
                        <?php endforeach ?>

                      </select>
                      <button name="submit" type="submit">Filter</button>
                      <?php
                      if (isset($_POST['submit'])) {
                        $selected = $_POST['category'];
                        $_SESSION['category'] = $selected;
                        $category = $selected;
                        echo 'You have chosen: ' . $selected;
                      }



                      ?>
                    </form>

                  </div>
                  <div class="col-lg-8">
                    <div class="d-flex align-items-top justify-content-between iq-music-play-detail">
                      <div class="music-detail">
                        <h3><?php echo $lang["name_complet"];

                            ?></h3>
                        <span><?php echo $lang["des"] ?></span>

                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0);" class="btn btn-primary iq-play mr-2 desabled">Play</a>
                        </div>
                      </div>
                      <div class="music-right">
                        <div class="d-flex align-items-center">
                          <div class="iq-circle mr-2 share"><a href="javascript:void();"><i class="las la-share-alt-square text-primary"></i></a></div>
                          <div class="iq-circle mr-2"><a href="javascript:void();"><i class="ri-heart-fill  text-primary"></i></a></div>
                          <div class="iq-circle">
                            <a href="javascript:void();"><i class="las la-download text-primary"></i></a>
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
        <div class="col-lg-12">
          <div class="iq-card">
            <div class="iq-card-body">
              <?php
              $language = $lang["name_lang"];
              //$sql = "SELECT * FROM `audio` Where audio_cate like '$category' and ;";
              $sql = "SELECT * FROM `audio` Where audio_cate like '$category' and `audio_lang`='$language';";
              $result3 = $conn->query($sql);


              $songs = array();
              while ($data = $result3->fetch_assoc()) {
                array_push($songs, $data);
              }

              $i = 0;
              foreach ($songs as $key => $s) :
                if ($i > 9) {
                  break;
                }

                $i++;
                $paths = $s["path"];
              ?>


                <ul id="listAudio" class="list-unstyled iq-music-slide mb-0">


                  <li class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="media align-items-center col-10 col-md-5">
                        <div class="iq-realese-song">
                          <a href="music-player.php">
                            <img src="images/en.png" class="img-border-radius avatar-60 img-fluid" alt="" />
                          </a>
                        </div>
                        <div class="media-body text-black ml-3">
                          <p class="mb-0 iq-music-title"><?php echo $s['name_audio']; ?></p>
                          <small><?php echo $s['audio_cate'];
                                  ?></small>
                        </div>
                      </div>
                      <p class="mb-0 col-md-2 iq-m-time"><?php echo $s["time_audio"]
                                                          ?> </p>
                      <p class="mb-0 col-md-2 iq-m-icon">
                        <small>125 <i class="lar la-star font-size-20"></i></small>
                      </p>
                      <form action="" method="get">
                        <a href="music-player.php?nameaudio=<?php echo $s['name_audio']
                                                            ?>&path=<?php echo $s['path']
                                                                    ?>" style="cursor: pointer;" class="mb-0 col-2 col-md-2 cursor-pointer">
                          <i class="las la-play-circle font-size-32">
                          </i>
                        </a>
                      </form>
                      <?php


                      ?>

                      <div class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1">

                        <div class="dropdown">
                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" role="button">
                            <i class="ri-more-2-fill text-primary"></i>
                          </span>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1" style="">
                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                            <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </li>

                <?php endforeach
                ?>


                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Wrapper END -->
  <!-- Footer -->
  <footer style="position:relative ;">
    <?php require('./assets/footer.php') ?>
  </footer>

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

</body>


</html>