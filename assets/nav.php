<?php
$username = $_SESSION["username"];
$sqluser = "SELECT * from users where username = '$username'";
$res = $conn->query($sqluser);
$user = $res->fetch_assoc();

?>
<div class="iq-sidebar">
  <div class="iq-sidebar-logo d-flex justify-content-between">
    <a href="music-player.php" class="header-logo">
      <img src="images/logo.png" class="img-fluid rounded-normal" alt="" />
      <div class="logo-title">
        <span class="text-primary text-uppercase">LANG</span>
      </div>
    </a>
    <div class="iq-menu-bt-sidebar">
      <div class="iq-menu-bt align-self-center">
        <div class="wrapper-menu">
          <div class="main-circle"><i class="las la-bars"></i></div>
        </div>
      </div>
    </div>
  </div>
  <div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
      <ul id="iq-sidebar-toggle" class="iq-menu">
        <li class="active active-menu">
          <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
          <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
            <li class="active">
              <a href="music-player.php"><i class="las la-house-damage"></i>Home</a>
            </li>
            <li>
              <a href="http://localhost/server/project/radio.php"><i class="las la-headphones"></i>Radio</a>
            </li>
            <li>
              <a href="http://localhost/server/project/games.php"><i class="las la-headphones"></i>Games</a>
            </li>
          </ul>
        </li>
        <?php
        if ($user["email"] == "admin@gmail.com") {
          echo '
          <li>
            <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
              <li>
                <a href="admin-dashboard.php"><i class="las la-house-damage"></i>Dashboard</a>
              </li>
              <li>
                <a href="addAudio.php"><i class="ri-function-line"></i>Add Audio</a>
              </li>
              
            </ul>
        </li> ';
        }
        ?>
        <li>
          <a href="calendar.php" class="iq-waves-effect"><i class="las la-calendar iq-arrow-left"></i><span>Calendar</span></a>
        </li>
        <li>
          <a href="http://127.0.0.1/server/project/contact/contact.php" class="iq-waves-effect"><i class="las la-calendar iq-arrow-left"></i><span>Contact</span></a>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- TOP Nav Bar -->
<div class="iq-top-navbar">
  <div class="iq-navbar-custom">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <div class="iq-menu-bt d-flex align-items-center">
        <div class="wrapper-menu">
          <div class="main-circle"><i class="las la-bars"></i></div>
        </div>
        <div class="iq-navbar-logo d-flex justify-content-between">
          <a href="music-player.php" class="header-logo">
            <img src="images/logo.png" class="img-fluid rounded-normal" alt="" />
            <div class="pt-2 pl-2 logo-title">
              <span class="text-primary text-uppercase">LANG</span>
            </div>
          </a>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
        <i class="ri-menu-3-line"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="list-unstyled iq-menu-top d-flex justify-content-between mb-0 p-0">
          <li class="active"><a href="music-player.php">Home</a></li>
          <li><a href="/radio.php">Radio</a></li>
          <li><a href="albums.php">Chat Room</a></li>
        </ul>
        <ul class="navbar-nav ml-auto navbar-list">
          <li class="nav-item nav-icon">
            <!-- <div class="iq-search-bar">
              <form action="#" class="searchbox">
                <input type="text" class="text search-input" placeholder="Search Here.." />
                <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
                <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
              </form>
            </div> -->
          </li>
          <li class="nav-item nav-icon search-content">
            <a href="#" class="search-toggle iq-waves-effect text-gray rounded"><span class="ripple rippleEffect"></span>
              <i class="ri-search-line text-black"></i>
            </a>
            <form action="#" class="search-box p-0">
              <input type="text" class="text search-input" placeholder="Type here to search..." />
              <a class="search-link" href="#"><i class="ri-search-line text-black"></i></a>
              <a class="search-audio" href="#"><i class="las la-microphone text-black"></i></a>
            </form>
          </li>
          <li class="nav-item nav-icon">
            <a href="#" class="search-toggle iq-waves-effect text-black rounded">
              <i class="lar la-envelope"></i>
              <span class="massage-icon dots badge badge-primary">5</span>
            </a>
            <div class="iq-sub-dropdown">
              <div class="iq-card shadow-none m-0">
                <div class="iq-card-body p-0">
                  <div class="bg-primary p-3">
                    <h5 class="mb-0 text-white">
                      All Messages<small class="badge badge-light float-right pt-1">5</small>
                    </h5>
                  </div>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="images/user/01.jpg" alt="" />
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0">Bni Emma Watson</h6>
                        <small class="float-left font-size-12">13 Jun</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="images/user/02.jpg" alt="" />
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0">Lorem Ipsum Watson</h6>
                        <small class="float-left font-size-12">20 Apr</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="images/user/03.jpg" alt="" />
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0">Why do we use it?</h6>
                        <small class="float-left font-size-12">30 Jun</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="images/user/04.jpg" alt="" />
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0">Variations Passages</h6>
                        <small class="float-left font-size-12">12 Sep</small>
                      </div>
                    </div>
                  </a>
                  <a href="#" class="iq-sub-card">
                    <div class="media align-items-center">
                      <div class="">
                        <img class="avatar-40 rounded" src="images/user/05.jpg" alt="" />
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0">Lorem Ipsum generators</h6>
                        <small class="float-left font-size-12">5 Dec</small>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="line-height pt-3">
            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
              <img src="<?php echo $user['picture'] ?>" class="img-fluid rounded-circle" alt="user" />
            </a>
            <div class="iq-sub-dropdown iq-user-dropdown">
              <div class="iq-card shadow-none m-0">
                <div class="iq-card-body p-0">
                  <div class="bg-primary p-3">
                    <h5 class="mb-0 text-white line-height">
                      Hello <?php echo $user['fullname'] ?>
                    </h5>
                    <span class="text-white font-size-12">Available</span>
                  </div>
                  <a href="profile.php" class="iq-sub-card iq-bg-primary-hover">
                    <div class="media align-items-center">
                      <div class="rounded iq-card-icon iq-bg-primary">
                        <i class="ri-file-user-line"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0">My Profile</h6>
                        <p class="mb-0 font-size-12">
                          View personal profile details.
                        </p>
                      </div>
                    </div>
                  </a>
                  <a href="profile-edit.php" class="iq-sub-card iq-bg-primary-hover">
                    <div class="media align-items-center">
                      <div class="rounded iq-card-icon iq-bg-primary">
                        <i class="ri-profile-line"></i>
                      </div>
                      <div class="media-body ml-3">
                        <h6 class="mb-0">Edit Profile</h6>
                        <p class="mb-0 font-size-12">
                          Modify your personal details.
                        </p>
                      </div>
                    </div>
                  </a>
                  <div class="d-inline-block w-100 text-center p-3">
                    <a class="bg-primary iq-sign-btn cursor-pointer" href="index.php" name="signOut" role=" button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                    <?php
                    if (isset($_GET["signOut"])) {

                      header("location:default.php");
                      session_destroy();
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>