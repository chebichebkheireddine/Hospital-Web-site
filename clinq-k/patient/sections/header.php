<!-- Topbar -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="opening-hours d-flex align-content-center">
        <i class="d-flex align-items-center"><span>Opening Hours: </span>10:00 AM - 8:00 PM</i>
      </div>
      <div class="button d-flex align-content-center">
        <div class="d-flex">
          <a href="oop/patient_logout.php" class="btn-logout" onclick="return confirm('Are you sure you want to log out?')">Log Out</a>
          <button id="lang-btn" style="#lang-btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-right: 10px;
  cursor: pointer;
}

#lang-btn:hover {
  background-color: #3e8e41;
}">Change Language</button>
        </div>
      </div>
      </div>
  </section>

  <!-- Header -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="patient-home.php#">Sh<span>HLa</span></a></h1>

      <nav id="navbar" class="navbar">
  <ul>
    <li class="dropdown"><a href="patient-home.php#"><span data-translate="home">Home</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="patient-home.php#services" data-translate="services">Services</a></li>
        <li><a href="patient-home.php#doctor" data-translate="doctors">Doctors</a></li>
        <li><a href="patient-home.php#about" data-translate="about">About Us</a></li>
        <li><a href="patient-home.php#contact" data-translate="contact">Contact</a></li>
      </ul>
    </li>
    <li class="dropdown"><a href="javascript:void(0)"><span data-translate="appointment">Appointment</span> <i class="bi bi-chevron-down"></i></a>
      <ul>
        <li><a href="patient-make.php" data-translate="make-appointment">Make Appointment</a></li>
        <li><a href="patient-view.php" data-translate="view-appointment">View Appointment</a></li>
      </ul>
    </li>
    <li class=""><a href="patient-profile.php#"><span data-translate="profile">Profile</span> </i></a>
    </li>
  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
</nav>

    </div>
  </header>
