<?php
if (isset($_SESSION["category"]) == "") {
  $category = "at school";
} else {
  $category = $_SESSION["category"];
}
if (isset($_SESSION['nameaudio'])) {
  $nameaudio =  $_GET['nameaudio'];
} else {
  $nameaudio = "AREM001.mp3";
}
if (isset($_GET["path"])) {
  $path = $_GET['path'];
} else {
  $path = "./lang/AR-EN/at_school/";
}
$lan = $lang["name_lang"];
if ($_GET["heart"]) {
  $sqlheart = "UPDATE audio set like_audio = $likes=$likes+1 where nameaudio=$nameaudio and audio_cate = $category; ";
  $conn->query($sqlheart);
}
$sqlaudio = "SELECT * from audio where audio_cate='family'and audio_lang='$lan' and name_audio='$nameaudio';";

$result4 = $conn->query($sqlaudio);
$audio = $result4->fetch_assoc();

?>
<footer style="height: 100px; width:100%; background-color:#f9f9f9; position:fixed;bottom:0px;left: 20px; z-index:5;" class="-none">
  <audio id="aud" style="width:100% ;display:inline-block;align-items:center; " controls autoplay="true" src="<?php echo $path ?><?php echo $nameaudio ?>"></audio>
</footer>
<script>
  function playAudio() {
    document.getElementById("aud").play();
  }
</script>