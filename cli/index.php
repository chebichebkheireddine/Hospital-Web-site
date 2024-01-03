<?php
include ("patient/oop/appointment.php");
$user = new Patient();
  $sql = "SELECT * FROM patient";
  $row = $user->details($sql);

$doctors = $user->displaysDoctorslimt();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sahla</title>
  <!-- ====  REMIXICON CDN ==== -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--main template css file -->
  <link rel="stylesheet" href="css/index.css">
  <!-- Render All Elements Normally (عرض جميع العناصر بشكل طبيعي)-->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Font Awesome Library (الايقونات imoji) -->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <!--icon(علامة ايقون الذي يظهر في المتصفح)-->
  <link rel="shortcut icon" type="image/x-icon" href="images/logoM.png" />
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;600;800&display=swap"
    rel="stylesheet">
</head>
<?php
include('include/header.php');
?>

<body>
  <!--------------------------------------------about------------------------------------------------->
  <section class="about" id="about">
    <div class="animation-effe">
      <div class="effe1">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div class="effe2"></div>
      <div class="effe3"></div>
      <div class="effe4"></div>
    </div>
    <div class="main">
      <img src="images/LogoM.png" alt="">
      <div class="about-text">
        <h1>About Us</h1>
        <h5>The Great place of medical Clinic SahLa</h5>
        <p>sahla is on a mission to facilitate access to patient care. To provide the most complete information
          possible, we offer on our site the public directory of medical and paramedical professions referenced on
          official sites.<br>
          SahLa: does not use your medical data for purposes other than making appointments and these are not reused in
          the context of other projects.</p>
      </div>
    </div>
  </section>
  <!--------------------------------------------Services------------------------------------------------->
  <section class="services" id="services">
    <div class="max-width">
      <h1>Our Services</h1>
      <div class="container-1">
      
        <div class="box" style="--clr: #1090DB;">
          <div class="content">
            <div class="image">
              <img
                src="admin/img/nn.jpj"
                alt="">
            </div>
            <div class="serv-text">
              <h3>khiro</h3>
              <p>ka</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      
        
      </div>
    </div>
  </section>
  <!--------------------------------------------Doctors------------------------------------------------->
  <section class="doctors" id="Doctors">

    <div class="max-wid">
      <h1>Doctors</h1>
    </div>
    <div class="main-1">
    <?php 

while($doc = mysqli_fetch_assoc($doctors)){ 
    if ($doc['id'] > 100){ ?>
      <div class="profile-card">
        <div class="img-1">
          <img src="images/<?php echo $doc['photo']?>">
        </div>
        <div class="caption">
          <h3><?php echo $doc['name']?></h3>
          <p><?php echo $doc['Field']?></p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>
      
      <?php };  ?>
                      <?php };  ?>
    </div>
  </section>
  <!--------------------------------------------contact------------------------------------------------->
  <section class="contact" id="contact">
    <div class="max-width">
      <h1>contact</h1>
    </div>
    <div class="container-3">
      <div class="big-circle">
        <img src="images/doctor-removebg-preview.png" class="square" />
      </div>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            If you have a problem or question about a topic, please contact us by sending a message here
          </p>

          <div class="info">
            <div class="information">
              <i class="fa-solid fa-map-location-dot icon"></i>
              <p>tiaret,mahdia hopital bodiaf</p>
            </div>
            <div class="information">
              <i class="fa-solid fa-envelope icon"></i>
              <p>hopital mahdia@gmail.com</p>
            </div>
            <div class="information">
              <i class="fa-solid fa-phone-volume icon"></i>
              <p>134567</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with Us</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>

            </div>
          </div>
        </div>
        <div class="contact-form">
          <div class="circle one"></div>
          <div class="circle two"></div>

          <form action="#" autocomplete="off">
            <h3 class="title">Contact Us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>
  </section>
  <!--------------------------------------------FAQ------------------------------------------------->
  <section class="faq" id="faq">
    <div class="max-wid-1">
      <h1>FAQ</h1>
    </div>
    <div class="animation-effe">
      <div class="effe1">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
      <div class="effe2"></div>
      <div class="effe3"></div>
      <div class="effe4"></div>
    </div>
    <div class="container-4">
      <h2>Frequently Asked Questions</h2>
      <div class="accordion">
        <div class="accordion-item">
          <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">Why is the moon sometimes out during the day?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-2" aria-expanded="false">
            <span class="accordion-title">Why is the sky blue?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">Will we ever discover aliens?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-4" aria-expanded="false">
            <span class="accordion-title">How much does the Earth weigh?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
        <div class="accordion-item">
          <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">How do airplanes stay up?</span>
            <span class="icon" aria-hidden="true"></span>
          </button>
          <div class="accordion-content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
              Ut tortor pretium viverra suspendisse potenti.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="js/main.js"></script>
  <!-- swiper js link  -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

</body>
<?php
include('include/footer.php');
?>

</html>