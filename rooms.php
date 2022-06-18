<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>LANG- Learn From Streaming</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css" />
    <!-- Style CSS -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
    <div class="rooms container">
        <div class="card-columns">
            <div class="card bg-primary cursor-pointer" onclick="start()" style="height:300px; cursor:pointer;">
                <div class="card-body text-center">
                    <img src="./images/join.png" alt="">
                </div>
            </div>
            <div class="card bg-primary " style="height:300px;">
                <div class="card-body text-center">
                    <img src="./images/join.png" alt="">
                </div>
            </div>
            <div class="card bg-primary " style="height:300px;">
                <div class="card-body text-center">
                    <img src="./images/join.png" alt="">
                </div>
            </div>
            <div class="card bg-primary " style="height:300px;">
                <div class="card-body text-center">
                    <img src="./images/join.png" alt="">
                </div>
            </div>
            <div class="card bg-primary " style="height:300px;">
                <div class="card-body text-center">
                    <img src="./images/join.png" alt="">
                </div>
            </div>
        </div>
    </div>




    <script>
        const webs = new WebSocket("");

        function sendData(data) {

        }

        function start() {
            navigator.getUserMedia({
                vedio: true,
                audio: true
            })
        }
    </script>
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
    <!-- Footer END -->
    <!-- color-customizer -->
</body>

</html>