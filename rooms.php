<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>LANG- Responsive Bootstrap 4 Admin Dashboard Template</title>
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

<body class="">
    <div class="row mt-5" style="margin:0 4%;">
        <div class="col-sm-3 card text-white bg-primary  m-3" style="min-width:22rem ; " onclick="">
            <div class="card-header">Informatique</div>
            <img class="card-img-top" src="./images/create.png" alt="Card image cap" />
        </div>
        <div class="col-sm-3 card text-white bg-info   m-3" style="min-width:22rem ;">
            <div class="card-header">Medical</div>
            <img src="./images/Join.png" alt="">
        </div>
        <div class="col-sm-3 card text-white bg-secondary  m-3 " style="min-width:22rem ;">
            <div class="card-header">Infographie</div>
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</body>


<script>
    var script = document.createElement("script");
    script.type = "text/javascript";

    function create() {
        const meeting = new VideoSDKMeeting();

        const config = {
            name: "hamzamouddakir",
            apiKey: "63a55c08-e277-4c9c-847a-ad382968271c",
            meetingId: "EDTECH_DEMO",

            // redirectOnLeave: "https://127.0.0.1:80/server/project/rooms.php",

            micEnabled: true,
            webcamEnabled: true,
            participantCanToggleSelfWebcam: true,
            participantCanToggleSelfMic: true,

            joinScreen: {
                visible: true, // Show the join screen ?
                title: "EdTech Quick start", // Meeting title
                meetingUrl: window.location.href, // Meeting joining url
            },
        };

        alert(meetingUrl);
        meeting.init(config);
    };
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

<script src="js/select2.min.js"></script>

<script src="js/owl.carousel.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/smooth-scrollbar.js"></script>


<script src="js/core.js"></script>

<script src="js/charts.js"></script>

<script src="js/animated.js"></script>

<script src="js/kelly.js"></script>

<script src="js/maps.js"></script>

<script src="js/worldLow.js"></script>

<script src="js/style-customizer.js"></script>
<script src="js/chart-custom.js"></script>


<script src="js/music-player.js"></script>

<script src="js/music-player-dashboard.js"></script>

<script src="js/custom.js"></script>

</html>