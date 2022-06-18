<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LANG- Player audio</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>


    <form action="" method="POST">
        <label>lannguage :</label>
        <select name="language" onchange="" class="form-control" required id="selectuserrole">
            <option value="en ar">english - arabic </option>
            <option value="ar en">arabic - english </option>
            <option value="ar es">arabic - spanish </option>
            <option value="en fr">english - francais </option>
            <option value="en es">english - spanish </option>
            <option value="ar de">arabic german </option>
            <option value="ar fr">arabic - french </option>

        </select>
        <button name="submit" type="submit">get</button>

    </form>
    <?php
    if (isset($_POST["submit"])) {
        $lang = $_POST['language'];
        $conn = new mysqli("localhost", "root", "", "learn_lang");
        $query = "SELECT * FROM `audio` Where audio_cate like 'at school' and `audio_lang`='$lang';";
        $res = $conn->query($query);
        $ar = $res->fetch_assoc();
        print_r($ar);
        echo "nothing";
    };
    echo 'gdfghdfsh';


    ?>
    <script>

    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/countdown.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/apexcharts.js"></script>
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