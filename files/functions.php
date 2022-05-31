<?php
// get top 10 songs
function get_all_audio(){
    $sql = "SELECT * FROM audio where audio_lang = 'es ar';";
    $conn = new mysqli("localhost", "root", "", "learn_lang");
    $result2 = $conn->query($sql);
}
?>