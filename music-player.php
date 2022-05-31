<?php
session_start();
include './files/functions.php';
$_SESSION["language"] = "";
$lan = $_SESSION["language"];
if ($_SESSION["category"] == "") {
  $category = "at school";
} else {
  $category = $_SESSION["category"];
}
$query = "SELECT * FROM `langue` WHERE`name_lang`= '$lan';";
$conn = new mysqli("localhost", "root", "", "learn_lang");
$result = $conn->query($query);
if ($result->num_rows > 0) {
  // output data of each row
  $lang = $result->fetch_assoc();
  echo "id: " . $lang["name_lang"] . " - Name: " . $lang["name_complet"] . " " . $lang["des"] . "<br>";
} else {
  echo "0 results";
}



?>
<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/LANG/html/music-player.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:42:44 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LANG- Responsive Bootstrap 4 Admin Dashboard Template</title>
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

    <?php include './assets/nav.html' ?>
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
                        <h3><?php echo $lang["name_complet"] ?></h3>
                        <span><?php echo $lang["des"] ?></span>

                        <div class="d-flex align-items-center">
                          <a href="javascript:void(0);" class="btn btn-primary iq-play mr-2">Play</a>
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
              <ul class="list-unstyled iq-music-slide mb-0">
                <?php
                $language = $lang["name_lang"];
                //$sql = "SELECT * FROM `audio` Where audio_cate like '$category' and ;";
                $sql = "SELECT * FROM `audio` Where audio_cate like '$category' and `audio_lang` ='$language';";
                $result2 = $conn->query($sql);


                $songs = array();
                while ($data = $result2->fetch_assoc()) {
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
                          <small><?php echo $s['audio_cate']; ?></small>
                        </div>
                      </div>
                      <p class="mb-0 col-md-2 iq-m-time"><?php echo $s["time_audio"] ?> </p>
                      <p class="mb-0 col-md-2 iq-m-icon">
                        <i class="lar la-star font-size-20"></i>
                      </p>
                      <form action="" method="get">
                        <a href="music-player.php?nameaudio=<?php echo $s['name_audio'] ?>&path=<?php echo $s['path'] ?>" style="cursor: pointer;" class="mb-0 col-2 col-md-2 cursor-pointer">
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

                <?php endforeach ?>

                <!--
                     <li class="mb-3">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php">
                                <img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                                />
                              </a>
                            </div>
                            <div class="media-body text-black ml-3">
                              <p class="mb-0 iq-music-title"><?php echo $s["audio_cate"] ?></p>
                              <small>Family</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                          <p class="mb-0 col-md-2 iq-m-icon">
                            <i class="lar la-star font-size-20"></i>
                          </p>
                          <p class="mb-0 col-2 col-md-2">
                            <i class="las la-play-circle font-size-32"></i>
                          </p>
                          <div
                            class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1"
                          >
                            <div class="dropdown">
                              <span
                                class="dropdown-toggle text-primary"
                                id="dropdownMenuButton1"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton1"
                                style=""
                              >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-eye-fill mr-2"></i>View</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-delete-bin-6-fill mr-2"></i
                                  >Delete</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-file-download-fill mr-2"></i
                                  >Download</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php">
                                <img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                                />
                              </a>
                            </div>
                            <div class="media-body text-black ml-3">
                              <p class="mb-0 iq-music-title">Audio 1</p>
                              <small>Family</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                          <p class="mb-0 col-md-2 iq-m-icon">
                            <i class="lar la-star font-size-20"></i>
                          </p>
                          <p class="mb-0 col-2 col-md-2">
                            <i class="las la-play-circle font-size-32"></i>
                          </p>
                          <div
                            class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1"
                          >
                            <div class="dropdown">
                              <span
                                class="dropdown-toggle text-primary"
                                id="dropdownMenuButton1"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton1"
                                style=""
                              >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-eye-fill mr-2"></i>View</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-delete-bin-6-fill mr-2"></i
                                  >Delete</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-file-download-fill mr-2"></i
                                  >Download</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php">
                                <img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                                />
                              </a>
                            </div>
                            <div class="media-body text-black ml-3">
                              <p class="mb-0 iq-music-title">Audio 1</p>
                              <small>Family</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                          <p class="mb-0 col-md-2 iq-m-icon">
                            <i class="lar la-star font-size-20"></i>
                          </p>
                          <p class="mb-0 col-2 col-md-2">
                            <i class="las la-play-circle font-size-32"></i>
                          </p>
                          <div
                            class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1"
                          >
                          
                            <div class="dropdown">
                              <span
                                class="dropdown-toggle text-primary"
                                id="dropdownMenuButton1"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton1"
                                style=""
                              >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-eye-fill mr-2"></i>View</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-delete-bin-6-fill mr-2"></i
                                  >Delete</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-file-download-fill mr-2"></i
                                  >Download</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php">
                                <img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                                />
                              </a>
                            </div>
                            <div class="media-body text-black ml-3">
                              <p class="mb-0 iq-music-title">Audio 1</p>
                              <small>Family</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                          <p class="mb-0 col-md-2 iq-m-icon">
                            <i class="lar la-star font-size-20"></i>
                          </p>
                          <p class="mb-0 col-2 col-md-2">
                            <i class="las la-play-circle font-size-32"></i>
                          </p>
                          <div
                            class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1"
                          >
                             
                            <div class="dropdown">
                              <span
                                class="dropdown-toggle text-primary"
                                id="dropdownMenuButton1"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton1"
                                style=""
                              >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-eye-fill mr-2"></i>View</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-delete-bin-6-fill mr-2"></i
                                  >Delete</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-file-download-fill mr-2"></i
                                  >Download</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php">
                                <img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                                />
                              </a>
                            </div>
                            <div class="media-body text-black ml-3">
                              <p class="mb-0 iq-music-title">Audio 1</p>
                              <small>Family</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                          <p class="mb-0 col-md-2 iq-m-icon">
                            <i class="lar la-star font-size-20"></i>
                          </p>
                          <p class="mb-0 col-2 col-md-2">
                            <i class="las la-play-circle font-size-32"></i>
                          </p>
                          <div
                            class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1"
                          >
                             
                            <div class="dropdown">
                              <span
                                class="dropdown-toggle text-primary"
                                id="dropdownMenuButton1"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton1"
                                style=""
                              >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-eye-fill mr-2"></i>View</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-delete-bin-6-fill mr-2"></i
                                  >Delete</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-file-download-fill mr-2"></i
                                  >Download</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php">
                                <img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                                />
                              </a>
                            </div>
                            <div class="media-body text-black ml-3">
                              <p class="mb-0 iq-music-title">Audio 1</p>
                              <small>Family</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                          <p class="mb-0 col-md-2 iq-m-icon">
                            <i class="lar la-star font-size-20"></i>
                          </p>
                          <p class="mb-0 col-2 col-md-2">
                            <i class="las la-play-circle font-size-32"></i>
                          </p>
                          <div
                            class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1"
                          >
                             
                            <div class="dropdown">
                              <span
                                class="dropdown-toggle text-primary"
                                id="dropdownMenuButton1"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton1"
                                style=""
                              >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-eye-fill mr-2"></i>View</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-delete-bin-6-fill mr-2"></i
                                  >Delete</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-file-download-fill mr-2"></i
                                  >Download</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php">
                                <img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                                />
                              </a>
                            </div>
                            <div class="media-body text-black ml-3">
                              <p class="mb-0 iq-music-title">Audio 1</p>
                              <small>Family</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                          <p class="mb-0 col-md-2 iq-m-icon">
                            <i class="lar la-star font-size-20"></i>
                          </p>
                          <p class="mb-0 col-2 col-md-2">
                            <i class="las la-play-circle font-size-32"></i>
                          </p>
                          <div
                            class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1"
                          >
                             
                            <div class="dropdown">
                              <span
                                class="dropdown-toggle text-primary"
                                id="dropdownMenuButton1"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton1"
                                style=""
                              >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-eye-fill mr-2"></i>View</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-delete-bin-6-fill mr-2"></i
                                  >Delete</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-file-download-fill mr-2"></i
                                  >Download</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php">
                                <img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                                />
                              </a>
                            </div>
                            <audio controls src="/media/cc0-audio/t-rex-roar.mp3">
                            <audio controls src="../lang/AR-EN/family/AREM002.mp3" ></audio>
                            <div class="media-body text-black ml-3">
                              <p class="mb-0 iq-music-title">Audio 1</p>
                              <small>Family</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                          <p class="mb-0 col-md-2 iq-m-icon">
                            <i class="lar la-star font-size-20"></i>
                          </p>
                          <p class="mb-0 col-2 col-md-2">
                            <i class="las la-play-circle font-size-32"></i>
                          </p>
                          <div
                            class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1"
                          >
                             
                            <div class="dropdown">
                              <span
                                class="dropdown-toggle text-primary"
                                id="dropdownMenuButton1"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton1"
                                style=""
                              >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-eye-fill mr-2"></i>View</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-delete-bin-6-fill mr-2"></i
                                  >Delete</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-file-download-fill mr-2"></i
                                  >Download</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php">
                                <img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                                />
                              </a>
                            </div>
                            <div class="media-body text-black ml-3">
                              <p class="mb-0 iq-music-title">Audio 1</p>
                              <small>Family</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">9:52</p>
                          <p class="mb-0 col-md-2 iq-m-icon">
                            <i class="lar la-star font-size-20"></i>
                          </p>
                          <p class="mb-0 col-2 col-md-2">
                            <i class="las la-play-circle font-size-32"></i>
                          </p>
                          <div
                            class="iq-card-header-toolbar iq-music-drop d-flex align-items-center col-md-1"
                          >
                             
                            <div class="dropdown">
                              <span
                                class="dropdown-toggle text-primary"
                                id="dropdownMenuButton1"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton1"
                                style=""
                              >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-eye-fill mr-2"></i>View</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-delete-bin-6-fill mr-2"></i
                                  >Delete</a
                                >
                                <a class="dropdown-item" href="#"
                                  ><i class="ri-file-download-fill mr-2"></i
                                  >Download</a
                                >
                              </div>
                              
                            </div>
                          </div>
                        </div>
                     </li>-->
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



  <!-- Footer END -->
</body>

<!-- Mirrored from templates.iqonic.design/LANG/html/music-player.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:43:22 GMT -->

</html>