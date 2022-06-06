<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from templates.iqonic.design/LANG/html/admin-add-song.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:45:21 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>LANG - Add Audio</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css" />
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center"></div>
    </div>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- TOP Nav Bar -->
        <?php include './assets/nav2.php' ?>
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Add Audio</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Audio :</label>
                                        <div class="custom-file">
                                            <input accept=".mp3, .mp4" type="file" name="file1" required placeholder="Last Name" />
                                            <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Audio Category:</label>
                                        <select name="category" required class="form-control" id="exampleFormControlSelect1">
                                            <option value="at school">at school</option>
                                            <option value="countries and langue">countries and langue</option>
                                            <option value="family">family</option>
                                            <option value="people">people</option>
                                            <option value="get know others">get know others</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Language Audio:</label>
                                        <select name="language" required class="form-control" required id="selectuserrole">
                                            <option value="en ar">English - Arabic</option>
                                            <option value="ar en">Arabic - English</option>
                                            <option value="ar es">Arabic - Spanish</option>
                                            <option value="en fr">English - Francais</option>
                                            <option value="en es">English - Spanish</option>
                                            <option value="ar de">Arabic - German</option>
                                            <option value="ar fr">Arabic - French</option>

                                        </select>
                                    </div>

                                    <button name="add" type="submit" class="btn btn-primary">
                                        Add Audio
                                    </button>
                                    <button type="reset" class="btn btn-danger">Reset</button>

                                </form>
                                <?php
                                session_start();
                                $usename = $_SESSION["username"];
                                if (!isset($_SESSION["username"])) {
                                    header("location:sign-in.php");
                                }
                                if (isset($_POST["add"])) {

                                    $audio = basename($_FILES["file1"]["name"]);
                                    $type = strtolower(pathinfo($audio, PATHINFO_EXTENSION));
                                    $category = $_POST["category"];
                                    $language = $_POST["language"];
                                    if ($category == "at school") {
                                        $dircat = "at_school";
                                    } elseif ($category == "get know others") {
                                        $dircat = "know_other";
                                    } elseif ($category == "countries and langue") {
                                        $dircat = "pays_langue";
                                    } elseif ($category == "people") {
                                        $dircat = "people";
                                    } elseif ($category == "family") {
                                        $dircat = "family";
                                    } else {
                                        $dircat = "";
                                    };
                                    // language
                                    if ($language == "en ar") {
                                        $target = "EN-AR/" . $dircat . "/";
                                    } elseif ($language == "ar en") {
                                        $target = "AR-EN/" . $dircat . "/";
                                    } elseif ($language == "ar es") {
                                        $target = "AR-ES/" . $dircat . "/";
                                    } elseif ($language == "en fr") {
                                        $target = "EN-FR/" . $dircat . "/";
                                    } elseif ($language == "en es") {
                                        $target = "EN-ES/" . $dircat . "/";
                                    } elseif ($language == "ar de") {
                                        $target = "AR-DE/" . $dircat . "/";
                                    } elseif ($language == "ar fr") {
                                        $target = "AR-FR/" . $dircat . "/";
                                    } else {
                                        $target =  $dircat . "/";
                                    }
                                    $fulltarget = "./lang/" . $target . $audio;
                                    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $fulltarget)) {
                                        $add = true;
                                        $queryadd = "INSERT INTO `audio` (`name_audio`, `audio_cate`, `audio_lang`, `path`) VALUES ('$audio','$category','$language','$target');";
                                        $coon = new mysqli("localhost", "root", "", "learn_lang");
                                        $succ = $coon->query($queryadd);
                                        $result = "<h2 style='color:green'>Success</h2>";
                                    } else {
                                        $add = false;
                                        echo "<h2 style='color:red'>somthing wrong</h2>";
                                    };
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="player row">
                        <div class="details col-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="now-playing"></div>
                            <div class="track-art"></div>
                            <div>
                                <div class="track-name">Pop Smoke</div>
                                <div class="track-artist">Cascada</div>
                            </div>
                        </div>
                        <div class="slider_container slider_music col-sm-5 col-md-4 col-lg-4">
                            <div class="current-time">00:00</div>
                            <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()" />
                            <div class="total-duration">00:00</div>
                        </div>
                        <div class="buttons col-6 col-sm-3 col-md-2 col-lg-2">
                            <div class="prev-track" onclick="prevTrack()">
                                <i class="fa fa-step-backward fa-2x"></i>
                            </div>
                            <div class="playpause-track" onclick="playpauseTrack()">
                                <i class="fa fa-play-circle fa-3x"></i>
                            </div>
                            <div class="next-track" onclick="nextTrack()">
                                <i class="fa fa-step-forward fa-2x"></i>
                            </div>
                        </div>
                        <div class="slider_container sound col-sm-6 col-md-2 col-lg-2">
                            <i class="fa fa-volume-down"></i>
                            <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()" />
                            <i class="fa fa-volume-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END -->
    <!-- color-customizer -->
    <div class="iq-colorbox color-fix">
        <div class="buy-button">
            <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a>
        </div>
        <div id="right-sidebar-scrollbar" class="iq-colorbox-inner">
            <div class="clearfix color-picker">
                <h3 class="iq-font-black">music Awesome Color</h3>
                <p>
                    This color combo available inside whole template. You can change on
                    your wish, Even you can create your own with limitless
                    possibilities!
                </p>
                <ul class="iq-colorselect clearfix">
                    <li class="color-1 iq-colormark" data-style="color-1"></li>
                    <li class="color-2" data-style="iq-color-2"></li>
                    <li class="color-3" data-style="iq-color-3"></li>
                    <li class="color-4" data-style="iq-color-4"></li>
                    <li class="color-5" data-style="iq-color-5"></li>
                    <li class="color-6" data-style="iq-color-6"></li>
                    <li class="color-7" data-style="iq-color-7"></li>
                    <li class="color-8" data-style="iq-color-8"></li>
                    <li class="color-9" data-style="iq-color-9"></li>
                    <li class="color-10" data-style="iq-color-10"></li>
                    <li class="color-11" data-style="iq-color-11"></li>
                    <li class="color-12" data-style="iq-color-12"></li>
                    <li class="color-13" data-style="iq-color-13"></li>
                    <li class="color-14" data-style="iq-color-14"></li>
                    <li class="color-15" data-style="iq-color-15"></li>
                    <li class="color-16" data-style="iq-color-16"></li>
                    <li class="color-17" data-style="iq-color-17"></li>
                    <li class="color-18" data-style="iq-color-18"></li>
                    <li class="color-19" data-style="iq-color-19"></li>
                    <li class="color-20" data-style="iq-color-20"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- color-customizer END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
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