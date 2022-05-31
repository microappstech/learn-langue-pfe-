<!-- Footer -->

<?php
if (!$_SESSION["category"] || $_SESSION['category'] == "") {
  $category = "at school";
} else {
  $category = $_SESSION["category"];
}
$nameaudio = $_GET['nameaudio'];
$path = $_GET['path'];
$sqlaudio = "SELECT * from audio where audio_cate='family'and audio_lang='ar es' and name_audio='$nameaudio';";
$result4 = $conn->query($sqlaudio);
$audio = $result4->fetch_assoc();
//$song

?>
<footer style="height: 100px; width:100%; background-color:#f9f9f9; position:fixed;bottom:0px;left: 10px; z-index:5;">
  <audio style="width:100% ;display:inline-block;align-items:center; border:1px solid green;" controls src="<?php echo $path ?><?php echo $nameaudio ?>"></audio>
</footer>
<!--
  <footer class="iq-footer ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          
          <div class="player row">
            <div class="pl-5 col-6 col-sm-4 col-md-4 col-lg-4">
              <div class="track-name"><?php echo $audio["name_audio"] ?></div>
              <div class="track-artist"><?php echo $audio["audio_lang"] ?></div>
            <div>
              
              </div>
            </div>

            <div
              class="slider_container slider_music col-sm-5 col-md-4 col-lg-4"
            >
            
          <audio controls autoplay >
            <source src="<?php echo $audio["path"] ?><?php echo $audio["name_audio"] ?>" type="audio/ogg">
            <source src="horse.mp3" type="audio/mpeg">
          Your browser does not support the audio element.
          </audio>
          
              <div class="current-time">0ffffff0:00</div>
              <input
                type="range"
                min="1"
                max="100"
                value="0"
                class="seek_slider"
                
              />
              <div class="total-duration">0hjjhh0:00</div>
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
              <input
                type="range"
                min="1"
                max="100"
                value="99"
                class="volume_slider"
                onchange="setVolume()"
              />
              <i class="fa fa-volume-up"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
   Footer END -->

<!-- color-customizer END -->
<!-- Optional JavaScript -->
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
</audio>