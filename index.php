<?php
session_start();
session_unset();
session_destroy();
?>
<html>
<title>Furious Falcons</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#ffc200">
<meta name="msapplication-TileColor" content="#181818">
<meta name="theme-color" content="#ffffff">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>


<body class="w3-black">
  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="overflow: hidden;">
    <!-- Avatar image in top left corner -->
    <img src="/images/FalconsLogoOnly.png" style="width:100%">
    <a href="#" data-scroll="homeSection" class="w3-bar-item w3-button w3-padding-large w3-black navlink">
      <i class="fa fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#" data-scroll="aboutSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>ABOUT</p>
    </a>
    <a href="#" data-scroll="photosSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>PHOTOS</p>
    </a>
    <a href="#" data-scroll="contactSection" class="w3-bar-item w3-button w3-padding-large w3-hover-black navlink">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACT</p>
    </a>
  </nav>

  <!-- Navbar on small screens (Hidden on medium and large screens) -->

  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#" data-scroll="homeSection" class="w3-bar-item w3-button navlink" style="width:20% !important"><i class="fa fa-home w3-xlarge"></i><br />HOME</a>
      <a href="#" data-scroll="aboutSection" class="w3-bar-item w3-button navlink" style="width:20% !important"><i class="fa fa-user w3-xlarge"></i><br />ABOUT</a>
      <a href="#" data-scroll="photosSection" class="w3-bar-item w3-button navlink" style="width:20% !important"><i class="fa fa-eye w3-xlarge"></i><br />PHOTOS</a>
      <a href="#" data-scroll="contactSection" class="w3-bar-item w3-button navlink" style="width:20% !important"><i class="fa fa-envelope w3-xlarge"></i><br />CONTACT</a>
      <a href="/underconstruction.php" class="w3-bar-item w3-button navlink" style="width:20% !important"><i class="fa fa-lock w3-xlarge"></i><br />LOGIN</a>
    </div>
  </div>

  <a href="/underconstruction.php">
    <div id="SignIn">
      <p style="margin-top: 10px; text-align: center; vertical-align: middle;"><b style="color: white; margin: 0; font-size: 18px;">LOGIN</b></p>
    </div>
  </a>

  <!-- Page Content -->
  <div class="w3-padding-large" id="wrapper">
    <!-- Sponsors -->
    <div id="Sponsors">
      <ul>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_ChildhoodCenter.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_FIRST.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_GitHub.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_Gtech.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_Hampco.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_SnapOn.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_SolidWorks.png"></li>
        <li class="forDesktop"><img src="images/Sponsors/Sponsor_WebCentral.png"></li>

        <li class="forMobile"><img src="images/Sponsors/Sponsor_ChildhoodCenter.png"></li>
        <li class="forMobile"><img src="images/Sponsors/Sponsor_FIRST.png"></li>
        <li class="forMobile"><img src="images/Sponsors/Sponsor_GitHub.png"></li>
        <li class="forMobile"><img src="images/Sponsors/Sponsor_Gtech.png"></li>
      </ul>
    </div>

    <div class="w3-content" id="MessageBanner">
      <div id="BannerCloseButton" onclick="closeBanner()">
        <i class="fa fa-window-close"></i>
      </div>
      <a href="/camp.php" style="text-decoration: none;">
        <div style="margin-right: 30px;">
          <h3 class="w3-padding-16">Looking for our Summer Camp? Click here for more information!</h3>
        </div>
      </a>
    </div>
    <!-- Header/Home -->
    <section class="scrollSection" id="homeSetion" data-anchor="homeSection">
      <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <img src="/images/FalconsLogo.png" alt="boy" class="w3-image" width="800">
        <h2><b style="padding-right: 10px;"><i>FIRST</i></b> Robotics Team 4328</h2>
      </header>
    </section>

    <!-- About Section -->
    <section class="scrollSection" id="aboutSection" data-anchor="aboutSection">
      <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
        <h2 class="w3-text-light-grey">Our Team</h2>
        <hr style="width:200px" class="w3-opacity">
        <p>As a FIRST Robotics Team, it is our mission to ensure that our members will walk away from this organization with not only the benefits of a good experience but also with applicable skills that they may use later in life to further their desired career path. We address the majority of the careers and opportunities that are found in the STEM (Science Technology Engineering & Mathematics) fields. More specifically, we endorse majors such as Mechanical Engineering, Computer Science, Electrical Engineering, Fluid-Power Engineering and even Control Engineering.  As much as we want to guide and educate our members on these valuable skills, we must also strive for an experience that is both memorable and fulfilling. Which is why we accept the roles both of an educational organization, but also an enjoyable club.</p>
        <h3 class="w3-padding-16 w3-text-light-grey">The Skills We Teach</h3>
        <h5 class="w3-wide" style="font-weight: bold;">Mechanical Engineering</h5>
        <hr style="width:200px" class="w3-opacity">
        <p>Members of our mechanical team are taught to comprehend and utilize the basic principles of physics, mathematics, and problem-solving skills in the construction of our robot each year. This team is responsible for the primary assembly, maintenance and overall functionality of the robot. Most of the time, these members are continuously researching, redesigning and implementing potential solutions to overcome the current task at hand. This is all in hopes to innovate the overall building experience.</p>
        <h5 class="w3-wide" style="font-weight: bold;">Electrical Engineering</h5>
        <hr style="width:200px" class="w3-opacity">
        <p> The electrical team holds a crucial role in our team and on our robot. In-depth knowledge of the RoboRIO and other electrical components is used. This team holds the responsibility of wiring the robot and all its components. While this is the only task for the electrical group, it requires a fair amount of organization to keep cables and wires out of the way of the moving parts of the robot. Much like the other departments of robotics, the members of the electrical team are taught the skills necessary to be successful both in their department and in their future, wherever it may take them.</p>
        <h5 class="w3-wide" style="font-weight: bold;">Computer Science</h5>
        <hr style="width:200px" class="w3-opacity">
        <p>Our organization is dependent on our programming team. These individuals are tasked with learning the Java programming language, implementing the language in the Visual Studio Code IDE and exporting it to a RoboRIO controller, as well as familiarizing themselves with the basics of GRIP Vision and Image Recognition. As complex as these tasks may appear, our adept student-based teaching program allows new members, that might be oblivious to these components, to ease into the programming realm.  Students are able to learn the fundamentals of the technological aspect of robotics efficiently, effectively, and without the worry of falling behind their fellow members.</p>
        <h5 class="w3-wide" style="font-weight: bold;">Fluid-Power Engineering</h5>
        <hr style="width:200px" class="w3-opacity">
        <p>Although a relatively new department to our organization, we believe that fluid power, or pneumatics, is a resource that should be further explored by our new generation of members. In the past, fluid-powered components have been overlooked and seen as a hinder our organization’s progression. However, during our previous season, pneumatics played a crucial role in our team’s success, increasing our desire to explore this technology further. In the future, members of the fluid-power team will work towards learning the fundamentals of pneumatic components such as pressure regulators, electrical-controlled solenoids, compressors, and air storage tanks. They will also incorporate these elements on the current robot build using polyurethane pneumatic tubing.</p>
        <h5 class="w3-wide" style="font-weight: bold;">Control Engineering</h5>
        <hr style="width:200px" class="w3-opacity">
        <p>This division of our club does not hold too many responsibilities as it mostly consists of driving or manipulating our robot on the field of play. However, the tasks that are assigned do require a certain dedication to the club. Depending on the current status of the robot, drivers may receive little to no practice but are still expected to have a basic understanding of the primary functions of the robot and how they operate. This is so that no matter what might happen, our drivers are always prepared for whatever problems are thrown our way during the build season.</p>
      </div>
      <br>

      <div class="w3-row w3-content w3-center w3-padding-16 w3-section w3-light-grey">
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">20+</span><br>
          Robots Designed
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">40+</span><br>
          Team Members
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">10+</span><br>
          Proud Sponsors
        </div>
        <div class="w3-quarter w3-section">
          <span class="w3-xlarge">100+</span><br>
          Future Competitions Won
        </div>
      </div>

      <!--
      <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download 2019 Game Manual
    </button>
  -->

  <!-- Grid for pricing tables -->

  <!-- End Grid/Pricing tables -->

  <!-- What We Do Section -->
  <!-- <section id="whatWeDoSection">
  <div class="w3-padding-64 w3-content w3-text-grey" id="whatWeDo">
  <h2 class="w3-text-light-grey">What We Do</h2>
  <hr style="200px"></hr>
  <iframe width="1120" height="630" src="https://youtube.com/embed/zMH6ntA35Yg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</section> -->

<!-- Portfolio Section -->
<section class="scrollSection" id="photosSection" data-anchor="photosSection">
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Our Gallery</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Container for the image gallery -->
    <div class="container">

      <!-- Full-width images with number text -->
      <div class="mySlides">
        <div class="numbertext">1 / 10</div>
        <img src="images/image1.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 10</div>
        <img src="images/image2.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 10</div>
        <img src="images/image3.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">4 / 10</div>
        <img src="images/image4.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">5 / 10</div>
        <img src="images/image5.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">6 / 10</div>
        <img src="images/image6.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">7 / 10</div>
        <img src="images/image7.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">8 / 10</div>
        <img src="images/image8.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">9 / 10</div>
        <img src="images/image9.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext">10 / 10</div>
        <img src="images/image10.jpg" style="width:100%">
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <!-- Image text -->
      <div class="caption-container">
        <p id="caption"></p>
      </div>

      <!-- Thumbnail images -->
      <div class="row">
        <div class="column">
          <img class="demo cursor" src="images/image1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Cruising back to the pits">
        </div>
        <div class="column">
          <img class="demo cursor" src="images/image2.jpg" style="width:100%" onclick="currentSlide(2)" alt="The robots starting position in the match">
        </div>
        <div class="column">
          <img class="demo cursor" src="images/image3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Human Ops dropping cargo">
        </div>
        <div class="column">
          <img class="demo cursor" src="images/image4.jpg" style="width:100%" onclick="currentSlide(4)" alt="2018-19 President Marixi Malek">
        </div>
        <div class="column">
          <img class="demo cursor" src="images/image5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Our Driver Station">
        </div>
        <div class="column">
          <img class="demo cursor" src="images/image6.jpg" style="width:100%" onclick="currentSlide(6)" alt="2018 members Marixi, Michael, Muna, and Carson in queue for a match">
        </div>
        <div class="column">
          <img class="demo cursor" src="images/image7.jpg" style="width:100%" onclick="currentSlide(7)" alt="Planning strategies with our alliance">
        </div>
        <div class="column">
          <img class="demo cursor" src="images/image8.jpg" style="width:100%" onclick="currentSlide(8)" alt="Showing our Furious Falcons spirit">
        </div>
        <div class="column">
          <img class="demo cursor" src="images/image9.jpg" style="width:100%" onclick="currentSlide(9)" alt="Shoutout to our fans">
        </div>
        <div class="column">
          <img class="demo cursor" src="images/image10.jpg" style="width:100%" onclick="currentSlide(10)" alt="Alliance group photo with the Iron Tigers and the AngelBots">
        </div>
      </div>

      <div class="w3-content" style="height: 100%; padding-bottom: 50px; overflow: hidden;">
        <h2 class="w3-text-light-grey w3-padding-64">El Paso District Competition Reflection</h2>
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/gHf8nbcu9FY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>

    <!-- Contact Section -->
    <section class="scrollSection" id="contactSection" data-anchor="contactSection">
      <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
        <h2 class="w3-text-light-grey">Contact Us</h2>
        <hr style="width:200px" class="w3-opacity">

        <div class="w3-section">
          <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Richmond, TX</p>
          <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: <a href="mailto:contactus@furiousfalcons.org">contactus@furiousfalcons.org</a></p>
        </div><br>

        <p style="display:none;" id="contactSuccessText">Thanks for getting in touch! We'll get back to you as soon as we can!</p>
        <div id="contactForm">
          <p>Lets get in touch. Send us a message:</p>

          <form action="/contactus.php" method="post">
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
            <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
            <p style="height: 200px;"><textarea class="w3-input" type="paragraph" placeholder="Message" required name="Message" style="height: 100%;"></textarea></p>
            <button class="w3-button w3-light-grey w3-padding-large" type="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
          </p>
        </form>
      </div>
      <!-- End Contact Section -->
    </div>
  </section>
  <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">

    <h3>Useful Links</h3>
    <p style="font-size: 16px;"><a href="https://www.firstinspires.org/robotics/frc">Visit the FIRST Robotics Website</a></p>
    <p style="font-size: 16px;"><a href="/camp.php">Look at our Summer Camp</a></p>


    <a style="padding: 5px;" href="https://www.reddit.com/r/FuriousFalcons"><i class="fa fa-reddit w3-hover-opacity"></i></a>
    <a style="padding: 5px;" href="https://fb.me/furiousfalcons4328"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a style="padding: 5px;" href="https://www.youtube.com/channel/UCKGAG7kHLdjRE5BgjCmybWg"><i class="fa fa-youtube w3-hover-opacity"></i></a>
    <a style="padding: 5px;" href="https://www.instagram.com/foster_robotics/"<i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a style="padding: 5px;" href="https://www.snapchat.com/add/fosterrobotics"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <!--<a style="padding: 5px;" href="https://www.pinterest.com/fosterrobotics/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>-->
    <a style="padding: 5px;" href="https://twitter.com/FosterRobotics"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <!--<a style="padding: 5px;" href="https://www.linkedin.com/in/furious-falcons-936303187/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>-->

    <!-- End footer -->
  </footer>

  <!-- END PAGE CONTENT -->
</div>
<script>

if (window.location.search == "?contactSuccess") {
  $('#contactForm').css('display', 'none');
  $('#contactSuccessText').css('display', 'block');
  goToContactForm();
} else if (window.location.search == "?contact") {
  goToContactForm();
}

function goToContactForm() {
  var scrollPoint = $('section[data-anchor="contactSection"]').offset().top + 700;

  $('body,html').animate({
    scrollTop: scrollPoint
  }, 500);
}

$('.navlink').on('click', function() {
  var scrollAnchor = $(this).attr('data-scroll');
  var scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top + 20;

  $('body,html').animate({
    scrollTop: scrollPoint
  }, 500);

  return false;

})


$(window).scroll(function() {
  var windscroll = $(window).scrollTop();
  if (windscroll >= 100) {
    $('.scrollSection').each(function(i) {
      if ($(this).position().top <= windscroll + 20) {
        $('nav a.w3-black').addClass('w3-hover-black');
        $('nav a.w3-black').removeClass('w3-black');
        $('nav a').eq(i).addClass('w3-black');
        $('nav a').eq(i).removeClass('w3-hover-black');
      }
    });

  } else {
    $('nav a.w3-black').addClass('w3-hover-black')
    $('nav a.w3-black').removeClass('w3-black');
    $('nav a:first').addClass('w3-black');
    $('nav a:first').removeClass('w3-hover-black');
  }

}).scroll();
</script>
<script type="text/javascript">

function closeBanner() {
  document.getElementById("MessageBanner").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>
