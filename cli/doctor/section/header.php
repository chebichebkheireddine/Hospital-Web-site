  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="opening-hours d-flex align-content-center">
        <i class="d-flex align-items-center"><span>Opening Hours: </span>10:00 AM - 8:00 PM</i>
      </div>
      <div class="button d-flex align-content-center">
        <div class="d-flex">
          <a href="oop/doctor-logout.php" class="btn-logout" onclick="return confirm('Are you sure you want to log out?')">Log Out</a>
        </div>
      </div>
      </div>
  </section>
<header id="header" class="d-flex align-items-center">
<div class="container d-flex align-items-center justify-content-between">

  <h1 class="logo"><a href="#">appoint<span>Med</span></a></h1>

  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link" href="doctor-home.php">Home</a></li>
      <li class="dropdown"><a href="javascript:void(0)">Appointment<i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="doctor-make.php">Make Appointment</a></li>
          <li><a href="doctor-view.php">View Appointment</a></li>
      </ul>
      </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
</div>
</header>
