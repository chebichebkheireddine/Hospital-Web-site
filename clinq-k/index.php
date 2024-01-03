<?php
include("Patient/oop/appointment.php");
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




  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/css/index.css" rel="stylesheet">



</head>
<section id="topbar" class=" d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">

    <div class="button d-flex align-content-center">
      <div class="d-flex">
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

        <a href="login.php" class="btn-login" data-translate="Login">Log in</a>
        <a href="signup.php" class="btn-signup" data-translate="Signup">Sign up</a>
      </div>

    </div>
  </div>
</section>

<!-- Header -->
<header id="header" class=" d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="#">Sa<span>HLa</span></a></h1>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#home" data-translate="home">Home</a></li>
        <li><a class="nav-link scrollto" href="#services" data-translate="services">Services</a></li>
        <li><a class="nav-link scrollto" href="#doctor" data-translate="doctors">Doctors</a></li>
        <li><a class="nav-link scrollto" href="#about" data-translate="about">About</a></li>
        <li><a class="nav-link scrollto" href="#contact" data-translate="contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</header>

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
          <img src="images/<?php echo $doc["photo"] ?>">
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
  <script>

    // Define the translation dictionaries


    // Define the translation dictionaries
    const english = {
      "Login": "Log in",
      "Signup": "Sign up",
      "home": "Home",
      "services": "Services",
      "doctors": "Doctors",
      "about": "About",
      "contact": "Contact",
      "changeLanguage": "Change Language",
      "aboutUs": "About Us",
      "medicalClinic": "The Great place of medical Clinic SahLa",
      "missionStatement": "SahLa is on a mission to facilitate access to patient care. To provide the most complete information possible, we offer on our site the public directory of medical and paramedical professions referenced on official sites.<br> SahLa does not use your medical data for purposes other than making appointments and these are not reused in the context of other projects.",
      "ServicesA": "Services",
      "OurPremium": "Our Premium",
      "Clinic": "Clinic offers quality and best of services with an afforable rate",
      "Cardiology": "Cardiology",
      "Dentistry": "Dentistry",
      "Dentistryabout": "Provide patients Oral and Dental Services with treatment and assessment.",
      "Dermatology": "Dermatology",
      "Dermatologyabout": "Provide patients treatment and procedures for skin care and services.",

      "Nutrition": "Nutrition",
      "Nutritionabout": "Provide patients with education and counseling on their diet.",

      "CardiologyAbut": "Provide patients treatment and diagnostic services of the heart",

  "contact": "Contact",
  "get-in-touch": "Let s get in touch",
  "contact-text": "If you have a problem or question about a topic, please contact us by sending a message here",
  "address": "tiaret,mahdia hopital bodiaf",
  "email": "hopital mahdia@gmail.com",
  "phone": "134567",
  "connect-with-us": "Connect with Us",
  "contact-form-title": "Contact Us",
  "name": "Name",
  "email": "Email",
  "phone": "Phone",
  "message": "Message",
  "send": "Send"

    };

    const arabic = {
      "Login": "تسجيل الدخول",
      "Signup": "انشاء حساب",

      "home": "الصفحة الرئيسية",
      "services": "الخدمات",
      "doctors": "الأطباء",
      "about": "من نحن",
      "contact": "اتصل بنا",
      "changeLanguage": "تغيير اللغة",
      "aboutUs": "من نحن",
      "medicalClinic": "مكان عظيم لعيادة طبية صحلة",
      "missionStatement": "صحلة على مهمة لتسهيل الوصول للرعاية الطبية للمرضى. لتوفير أكثر المعلومات الشاملة ممكنة، نقدم على موقعنا الدليل العام للمهن الطبية والمتعلقة بها المراجعة على المواقع الرسمية.<br> صحلة: لا يتم استخدام بياناتك الطبية لأغراض أخرى غير حجز المواعيد ولا يتم إعادة استخدامها في سياق مشاريع أخرى.",
      "ServicesA": "خدمات",
      "OurPremium": "المميزة لدينا",
      "Clinic": "تقدم العيادة جودة وأفضل الخدمات بمعدل رائع",
      "Cardiology": "أمراض القلب",

      "Dentistry": "طب أسنان",
      "Dentistryabout": "تزويد المرضى بخدمات الفم والأسنان بالعلاج والتقييم..",


      "Dermatology": "طب الجلد",
      "Dermatologyabout": "توفير العلاج للمرضى وإجراءات العناية بالبشرة والخدمات.",
      "Nutrition": "تغذية",
      "Nutritionabout": "تزويد المرضى بالتثقيف والمشورة بشأن نظامهم الغذائي.",

      "CardiologyAbut": "توفير خدمات علاج وتشخيص القلب للمرضى",

      "contact": "الاتصا",
  "get-in-touch": "لنتواصل",
  "contact-text": "إذا كان لديك مشكلة أو سؤال حول موضوع ما ، فيرجى الاتصال بنا عن طريق إرسال رسالة هنا",
  "address": "تيارت ، مستشفى المهديا بودياف",
  "email": "mahdia@gmail.com",
  "phone": "134567",
  "connect-with-us": "الاتصال بنا",
  "contact-form-title": "اتصل بنا",
  "name": "الاسم",
  "email": "البريد الإلكتروني",
  "phone": "الهاتف",
  "message": "الرسالة",
  "send": "إرسال"
    };

    // Get the language button and add a click event listener
    const langBtn = document.querySelector("#lang-btn");
    langBtn.addEventListener("click", toggleLanguage);

    // Function to toggle the language
    function toggleLanguage() {
      const currentLanguage = langBtn.textContent.trim();
      const newLanguage = currentLanguage === "English" ? "العربية" : "English";

      // Update the language button text
      langBtn.textContent = newLanguage;

      // Get all the elements that need to be translated
      const elements = document.querySelectorAll("[data-translate]");
      elements.forEach(el => {
        const translationKey = el.dataset.translate;
        const translationDict = newLanguage === "English" ? english : arabic;
        el.textContent = translationDict[translationKey];
      });

      // Special translation for the about section
      const aboutSection = document.querySelector("#about");
      const aboutTitle = aboutSection.querySelector("h1");
      const aboutSubtitle = aboutSection.querySelector("h5");
      const aboutText = aboutSection.querySelector(".about-text p");
      aboutTitle.textContent = translationDict["aboutUs"];
      aboutSubtitle.textContent = translationDict["medicalClinic"];
      aboutText.innerHTML = translationDict["missionStatement"];
    }





  </script>

  <script src="js/main.js"></script>
  <!-- swiper js link  -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

</body>

<?php
include("include/footer.php");
?>

</html>