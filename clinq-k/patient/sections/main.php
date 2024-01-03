
<main id="main">
    <!-- Home -->
    <section id="home" class="d-flex align-items-center">
      <div class="container">
        <h1>Welcome back, <br><span><?php echo $row['FName']; ?> <?php echo $row['LName']; ?></span> </h1>
        <h2>From an online to an in-person visit. Simply select <br> your
          preferred time and available doctor and we <br> will do the
          work for you.</h2>
        <div class="d-flex">
          <a href="patient-make.php" class="btn-appoint">Make an Appointment</a>
        </div>
      </div>
    </section>

    <!-- Featured-Services -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-user-check'></i></i></div>
              <h4 class="title"><a>Experienced Doctors</a></h4>
              <p class="description">
                AppointMed Clinic provides the best doctors in town that are happy to assist you.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-clinic' ></i></div>
              <h4 class="title"><a>Premium Services</a></h4>
              <p class="description">AppointMed Clinic offers quality and best of services with an affordable rate.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-calendar-check' ></i></div>
              <h4 class="title"><a>Convenient Schedude</a></h4>
              <p class="description">AppointMed Clinic opens daily from 10:00 AM - 8:00 PM located in Cebu City.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-slider-alt'></i></i></div>
              <h4 class="title"><a>Easy Appointment System</a></h4>
              <p class="description">AppointMed Clinic provides an online appointment system in just a click.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

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
        <h1 data-translate="aboutUs">About Us</h1>
        <h5 data-translate="medicalClinic">The Great place of medical Clinic SahLa</h5>
        <p data-translate="missionStatement">sahla is on a mission to facilitate access to patient care. To provide the
          most complete information
          possible, we offer on our site the public directory of medical and paramedical professions referenced on
          official sites.<br>
          SahLa: does not use your medical data for purposes other than making appointments and these are not reused in
          the context of other projects.</p>
      </div>
  </section>
  <!--------------------------------------------Services------------------------------------------------->
  <section id="services" class="services">
    <div class="container-1">

      <div class="section-title">
        <h2 data-translate="ServicesA">Services</h2>
        <h3 data-translate="OurPremium">Our Premium <span data-translate="ServicesA">Services</span></h3>
        <p data-translate="Clinic"> Clinic offers quality and best of services with an affordable rate.</p>
      </div>

      <div class="content">
        <div class="box">
          <div class="imgBx">
            <img src="assets/img//Services/Cardio.jpg" />
          </div>
          <div class="text">
            <h3 data-translate="Cardiology">Cardiology</h3>
            <p data-translate="CardiologyAbut">Provide patients treatment and diagnostic services of the heart.</p>
          </div>
        </div>

        <div class="box">
          <div class="imgBx">
            <img src="assets/img//Services/Dentis.jpg" />
          </div>
          <div class="text">
            <h3 data-translate="Dentistry">Dentistry</h3>
            <p data-translate="Dentistryabout"> Provide patients Oral and Dental Services with treatment and assessment.
            </p>
          </div>
        </div>
      </div>

      <div class="content1">
        <div class="box">
          <div class="imgBx">
            <img src="assets/img//Services/derma.jpg" />
          </div>
          <div class="text">
            <h3 data-translate="Dermatology">Dermatology</h3>
            <p data-translate="Dermatologyabout">Provide patients treatment and procedures for skin care and services.
            </p>
          </div>
        </div>
        <div class="box">
          <div class="imgBx">
            <img src="assets/img//Services/nutrition.jpg" />
          </div>
          <div class="text">
            <h3 data-translate="Nutrition">Nutrition</h3>
            <p data-translate="Nutritionabout">Provide patients with education and counseling on their diet.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!--------------------------------------------Doctors------------------------------------------------->
  <section class="doctors" id="Doctor">

    <div class="max-wid">
      <h1>Doctors</h1>
    </div>
    <div class="main-1">
      <?php

      while ($doc = mysqli_fetch_assoc($doctors)) {
        if ($doc["id"] > 100) { ?>
      <div class="profile-card">
        <div class="img-1">
          <img src="../images/<?php echo $doc["photo"] ?>">
        </div>
        <div class="caption">
          <h3>
            <?php echo $doc["name"] ?>
          </h3>
          <p>
            <?php echo $doc["Field"] ?>
          </p>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
      </div>

      <?php }
        ; ?>
      <?php }
      ; ?>
    </div>
  </section>
  <!--------------------------------------------contact------------------------------------------------->
  <section class="contact" id="contact">
    <div class="max-width">
      <h1 data-translate="contact">contact</h1>
    </div>
    <div class="container-3">
      <div class="big-circle"> <img src="images/doctor-removebg-preview.png" class="square" /> </div>
      <div class="form">
        <div class="contact-info">
          <h3 class="title" data-translate="get-in-touch">Let"s get in touch</h3>
          <p class="text" data-translate="contact-text"> If you have a problem or question about a topic, please contact
            us by sending a message here </p>
          <div class="info">
            <div class="information"> <i class="fa-solid fa-map-location-dot icon"></i>
              <p data-translate="address">tiaret,mahdia hopital bodiaf</p>
            </div>
            <div class="information"> <i class="fa-solid fa-envelope icon"></i>
              <p data-translate="email">hopital mahdia@gmail.com</p>
            </div>
            <div class="information"> <i class="fa-solid fa-phone-volume icon"></i>
              <p data-translate="phone">134567</p>
            </div>
          </div>
          <div class="social-media">
            <p data-translate="connect-with-us">Connect with Us</p>
            <div class="social-icons"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i
                  class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> </div>
          </div>
        </div>
        <div class="contact-form">
          <div class="circle one"></div>
          <div class="circle two"></div>
          <form action="#" autocomplete="off">
            <h3 class="title" data-translate="contact-form-title">Contact Us</h3>
            <div class="input-container"> <input type="text" name="name" class="input" /> <label for=""
                data-translate="name">Name</label> <span data-translate="name">Name</span> </div>
            <div class="input-container"> <input type="email" name="email" class="input" /> <label for=""
                data-translate="email">Email</label> <span data-translate="email">Email</span> </div>
            <div class="input-container"> <input type="tel" name="phone" class="input" /> <label for=""
                data-translate="phone">Phone</label> <span data-translate="phone">Phone</span> </div>
            <div class="input-container textarea"> <textarea name="message" class="input"></textarea> <label for=""
                data-translate="message">Message</label> <span data-translate="message">Message</span> </div> <input
              type="submit" value="Send" class="btn" data-translate="send" />
          </form>
        </div>
      </div>
    </div>
  </section> <!--------------------------------------------FAQ------------------------------------------------->
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
  
</div>

