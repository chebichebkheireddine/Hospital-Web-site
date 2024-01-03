<!-- Topbar -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="opening-hours d-flex align-content-center">
        <i class="d-flex align-items-center"><span>Opening Hours: </span>10:00 AM - 8:00 PM</i>
      </div>
      <div class="button d-flex align-content-center">
        <div class="d-flex">
          <a href="oop/patient_logout.php" class="btn-logout" onclick="return confirm('Are you sure you want to log out?')">Log Out</a>
        </div>
      </div>
      </div>
  </section>

  <!-- Header -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="patient-home.php#">appoint<span>Med</span></a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="patient-home.php#"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="patient-home.php#services">Services</a></li>
              <li><a href="patient-home.php#doctor">Doctors</a></li>
              <li><a href="patient-home.php#about">About Us</a></li>
              <li><a href="patient-home.php#contact">Contact</a></li>
          </ul>
          </li>
          <li class="dropdown"><a href="javascript:void(0)"><span>Appointment</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="patient-make.php">Make Appointment</a></li>
              <li><a href="patient-view.php">View Appointment</a></li>
          </ul>
          <li class=""><a href="patient-profile.php#"><span>Profile</span> </i></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
