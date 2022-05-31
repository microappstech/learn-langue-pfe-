<?php
session_start();

if (!$_SESSION["username"]=="") {
  header("location:sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from templates.iqonic.design/LANG/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:43:39 GMT -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>LANG- Learn From Streaming</title>
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
  <body>
    <!-- loader Start -->
    <div id="loading">
      <div id="loading-center"></div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <!-- Sidebar  -->
      <?php include './assets/nav.html';?>
      <!-- TOP Nav Bar END -->

      <!-- Trending Audio landing  -->
      <div class="col-lg-12">
              <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                  <div class="iq-header-title">
                    <h4 class="card-title">Trending Audio Learning</h4>
                  </div>
                  <div class="d-flex align-items-center mb-16 iq-view">
                    <b class="mb-0 text-primary"
                      ><a href="albums.html"
                        >View More <i class="las la-angle-right"></i></a
                    ></b>
                  </div>
                </div>
                <div class="iq-card-body">
                  <ul class="list-unstyled row iq-box-hover mb-0">
                    <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                      <div class="iq-card">
                        <div class="iq-card-body p-0">
                          <div class="iq-thumb">
                            <div class="iq-music-overlay"></div>
                            <a href="music-player.php">
                              <img
                                src="images/es.png"
                                class="img-border-radius img-fluid w-100"
                                alt=""
                              />
                            </a>
                            <div class="overlay-music-icon">
                              <a href="music-player.php">
                                <i class="las la-play-circle"></i>
                              </a>
                            </div>
                          </div>
                          <div class="feature-list text-center">
                            <h6 class="font-weight-600 mb-0">Audio 98</h6>
                            <p class="mb-0">Know other</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                      <div class="iq-card">
                        <div class="iq-card-body p-0">
                          <div class="iq-thumb">
                            <div class="iq-music-overlay"></div>
                            <a href="music-player.php">
                              <img
                                src="images/ar.png"
                                class="img-border-radius img-fluid w-100"
                                alt=""
                              />
                            </a>
                            <div class="overlay-music-icon">
                              <a href="music-player.php">
                                <i class="las la-play-circle"></i>
                              </a>
                            </div>
                          </div>
                          <div class="feature-list text-center">
                            <h6 class="font-weight-600 mb-0">Audio 56</h6>
                            <p class="mb-0">In school</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                      <div class="iq-card">
                        <div class="iq-card-body p-0">
                          <div class="iq-thumb">
                            <div class="iq-music-overlay"></div>
                            <a href="music-player.php">
                              <img
                                src="images/fr.png"
                                class="img-border-radius img-fluid w-100"
                                alt=""
                              />
                            </a>
                            <div class="overlay-music-icon">
                              <a href="music-player.php">
                                <i class="las la-play-circle"></i>
                              </a>
                            </div>
                          </div>
                          <div class="feature-list text-center">
                            <h6 class="font-weight-600 mb-0">audio 08</h6>
                            <p class="mb-0">People</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                      <div class="iq-card">
                        <div class="iq-card-body p-0">
                          <div class="iq-thumb">
                            <div class="iq-music-overlay"></div>
                            <a href="music-player.php">
                              <img
                                src="images/ar.png"
                                class="img-border-radius img-fluid w-100"
                                alt=""
                              />
                            </a>
                            <div class="overlay-music-icon">
                              <a href="music-player.php">
                                <i class="las la-play-circle"></i>
                              </a>
                            </div>
                          </div>
                          <div class="feature-list text-center">
                            <h6 class="font-weight-600 mb-0">Audio 23</h6>
                            <p class="mb-0">Pay And Langues</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                      <div class="iq-card">
                        <div class="iq-card-body p-0">
                          <div class="iq-thumb">
                            <div class="iq-music-overlay"></div>
                            <a href="music-player.php">
                              <img
                                src="images/en.png"
                                class="img-border-radius img-fluid w-100"
                                alt=""
                              />
                            </a>
                            <div class="overlay-music-icon">
                              <a href="music-player.php">
                                <i class="las la-play-circle"></i>
                              </a>
                            </div>
                          </div>
                          <div class="feature-list text-center">
                            <h6 class="font-weight-600 mb-0">Audio 19</h6>
                            <p class="mb-0">people</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="col-xl-2 col-lg-3 col-md-4 iq-music-box">
                      <div class="iq-card">
                        <div class="iq-card-body p-0">
                          <div class="iq-thumb">
                            <div class="iq-music-overlay"></div>
                            <a href="music-player.php">
                              <img
                                src="images/es.png"
                                class="img-border-radius img-fluid w-100"
                                alt=""
                              />
                            </a>
                            <div class="overlay-music-icon">
                              <a href="music-player.php">
                                <i class="las la-play-circle"></i>
                              </a>
                            </div>
                          </div>
                          <div class="feature-list text-center">
                            <h6 class="font-weight-600 mb-0">Audio 30</h6>
                            <p class="mb-0">Family</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="iq-card iq-realease">
                <div
                  class="iq-card-header d-flex justify-content-between border-0"
                >
                  <div class="iq-header-title">
                    <h4 class="card-title">New Realeases</h4>
                  </div>
                </div>
                <div class="iq-card-body iq-realeses-back">
                  <div class="row">
                    <div class="col-lg-5 iq-realese-box">
                      <div class="iq-music-img">
                        <div class="equalizer">
                          <span class="bar bar-1"></span>
                          <span class="bar bar-2"></span>
                          <span class="bar bar-3"></span>
                          <span class="bar bar-4"></span>
                          <span class="bar bar-5"></span>
                        </div>
                      </div>
                      <div class="player1 row">
                        <div
                          class="details1 music-list col-6 col-sm-6 col-lg-6"
                        >
                          <div class="now-playing1"></div>
                          <div class="track-art1"></div>
                          <div>
                            <div class="track-name1">Amy Winehouse</div>
                            <div class="track-artist1">
                              DaBaby Featuring Roddy
                            </div>
                          </div>
                        </div>
                        <div class="buttons1 col-6 col-sm-2 col-lg-3">
                          <div class="prev-track1" onclick="prevTrack1()">
                            <i class="fa fa-step-backward fa-2x"></i>
                          </div>
                          <div
                            class="playpause-track1"
                            onclick="playpauseTrack1()"
                          >
                            <i class="fa fa-play-circle fa-3x"></i>
                          </div>
                          <div class="next-track1" onclick="nextTrack1()">
                            <i class="fa fa-step-forward fa-2x"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <!-- play list -->
                    <ul
                      class="list-unstyled iq-song-slide mb-0 realeases-banner"
                    >
                      <li class="row">
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
                            <div class="media-body text-white ml-3">
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
                            <!--  drop down of optional action -->
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
                      <li class="row">
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
                            <div class="media-body text-white ml-3">
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
                            <!--  drop down of optional action -->
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
                      <li class="row">
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
                            <div class="media-body text-white ml-3">
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
                            <!--  drop down of optional action -->
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
                      <li class="active row">
                        <div
                          class="d-flex justify-content-between align-items-center"
                        >
                          <div class="media align-items-center col-10 col-md-5">
                            <div class="iq-realese-song">
                              <a href="music-player.php"
                                ><img
                                  src="images/en.png"
                                  class="img-border-radius avatar-60 img-fluid"
                                  alt=""
                              /></a>
                            </div>
                            <div class="media-body text-white ml-3">
                              <p class="mb-0 iq-music-title">Audio 5</p>
                              <small>in school</small>
                            </div>
                          </div>
                          <p class="mb-0 col-md-2 iq-m-time">7:52</p>
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
                                id="dropdownMenuButton3"
                                data-toggle="dropdown"
                                aria-expanded="false"
                                role="button"
                              >
                                <i class="ri-more-2-fill text-primary"></i>
                              </span>
                              <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownMenuButton3"
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
                      <li class="row">
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
                            <div class="media-body text-white ml-3">
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
                            <!--  drop down of optional action -->
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
                      <li class="row">
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
                            <div class="media-body text-white ml-3">
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
                            <!--  drop down of optional action -->
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
                      <li class="row">
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
                            <div class="media-body text-white ml-3">
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
                            <!--  drop down of optional action -->
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
                      <li class="row">
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
                            <div class="media-body text-white ml-3">
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
                            <!--  drop down of optional action -->
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
                      <li class="row">
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
                            <div class="media-body text-white ml-3">
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
                            <!--  drop down of optional action -->
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
                    </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <?php include './assets/ footer.php' ?>
    <!-- Footer END -->
    <!-- color-customizer -->
  </body>

  <!-- Mirrored from templates.iqonic.design/LANG/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 09:44:02 GMT -->
</html>
