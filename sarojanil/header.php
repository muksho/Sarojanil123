	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/logo_GYX_icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="css/jquery.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <style>
      .navbar
      {
        font-size: 17px;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top" style="min-height: 50px;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Sarojanil"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li <?php if ($pageid==1){echo "class=active";}?>>
              <a href="index.php">HOME</a>
            </li>
            <li <?php if ($pageid==2){echo "class=active";}?>>
              <a href="about-us.php">About Us</a>
            </li>
            <li <?php if ($pageid==3){echo "class=active";}?> class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">IT Services<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="website-development.php">WEBSITE DEVELOPMENT</a>
                </li>
                <li>
                  <a href="e-commarce-solutions.php">E-COMMERCE SOLUTIONS</a>
                </li>
                <li>
                  <a href="software-development.php">SOFTWARE DEVELOPMENT</a>
                </li>
                <li>
                  <a href="erp-solutions.php">ERP SOLUTIONS</a>
                </li>
                <li>
                  <a href="payment-gateway.php">PAYMENT GATEWAY</a>
                </li>
                <li>
                  <a href="cms-solutions.php">CMS SOLUTIONS</a>
                </li>
                <li>
                  <a href="bulk-sms.php">BULK SMS</a>
                </li>
                <li>
                  <a href="project-traning.php">PROJECT TRAINING</a>
                </li>
              </ul>
            </li>
            <li <?php if ($pageid==4){echo "class=active";}?> class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Security Services<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="cctv-cameras.php">CCTV Cameras</a>
                </li>
                <li>
                  <a href="audio-video-door-phones.php">Audio Video Door Phones</a>
                </li>
                <li>
                  <a href="time-attendance-recorder.php">Time Attendance Rocorder</a>
                </li>
                <li>
                  <a href="face-recognisation-device.php">Face Recognisation Device</a>
                </li>
              </ul>
            </li>
            <li <?php if ($pageid==5){echo "class=active";}?>>
              <a href="seo.php">S E O</a>
            </li>
            <li <?php if ($pageid==6){echo "class=active";}?>>
              <a href="smo.php">S M O</a>
            </li>
            <li <?php if ($pageid==7){echo "class=active";}?>>
              <a href="protfolio.php">Portfolio</a>
            </li>
            <li <?php if ($pageid==8){echo "class=active";}?>>
              <a href="faq.php">FAQ</a>
            </li>
            <li <?php if ($pageid==9){echo "class=active";}?>>
              <a href="contact-us.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div style="padding: 25px;"></div>
