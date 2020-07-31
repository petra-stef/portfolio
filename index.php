<!DOCTYPE html>
<html lang="en">
<?php
include('./header.php');
?>

<body>
  <?php
  include('./nav/navbar.php');
  include('./home_top.php');
  ?>
  <div class="main">
    <!-- adding back to top button -->
  <div onclick="topFunction()" id="back-to-top" title="Go to top"><img src="img/arrow-up.svg" alt=""></div>
    <div class="project">
      <img class="project-img wow fadeInLeft" data-wow-duration="1s" src="./img/project1.png">
      <div class="project-header wow fadeInRight" data-wow-duration="1s">
        <h2>Beginner-friendly</h2>
        <h2>recipe app.</h2>
      </div>
      <div class="project-content wow fadeInRight" data-wow-duration="1s">
        <h3 class="wow fadeInRight" data-wow-duration="1s">UI/UX</h3>
        <p class="wow fadeInRight" data-wow-duration="1s">A highly-visual recipe sharing application
          whose main goal is to make the cooking process easier for beginners,
          reduce food waste and help users save time and money.</p>
        <div class="project-sub-detail wow fadeInRight" data-wow-duration="1s">
          <a href="project.php">SEE CASE STUDY</a><span><img src="./img/right.svg"></span>
        </div>
      </div>
    </div>


    <div class="project">
      <img class="project-img wow fadeInLeft" data-wow-duration="1s" src="./img/project2.png">
      <div class="project-header wow fadeInRight">
        <h2>Plant recommendation and plant care app.</h2>
      </div>
      <div class="project-content wow fadeInRight">
        <h3>UI/UX</h3>
        <p>An app which recommends you plants that would thrive
          in your home environment based on factors such as light condition,
          maintenance level and light.</p>
        <div class="project-sub-detail wow fadeInRight">
          <a href="https://www.behance.net/gallery/95451487/Terra-Plant-Recommendation-App" target="_blank" rel="noopener noreferrer">SEE CASE STUDY</a><span><img src="./img/right.svg"></span>
        </div>
      </div>
    </div>

    <div class="project">
      <img class="project-img wow fadeInLeft" data-wow-duration="1s" src="./img/unknowneurope2.gif">
      <div class="project-header wow fadeInRight" data-wow-duration="1s">
        <h2>Website introducing unknown travel spots.</h2>
      </div>
      <div class="project-content wow fadeInRight" data-wow-duration="1s">
        <h3>FRONT-END</h3>
        <p>A website made with HTML/CSS/Javascript.
          It includes a landing page, blog post,
          and a contact page with a form that validates. It is responsive for all screens.
          Check the github for the list of HTML and CSS features used.</p>
        <div class="project-sub-detail wow fadeInRight" data-wow-duration="1s">
          <a href="https://travelwebsite.herokuapp.com/" target="_blank" rel="noopener noreferrer">SEE WEBSITE</a><span><img src="./img/right.svg"></span>
        </div>
        <div class="project-sub-detail wow fadeInRight" data-wow-duration="1s">
          <a href="https://github.com/petra-stef/travel-website" target="_blank" rel="noopener noreferrer">SEE CODE ON GITHUB</a><span><img src="./img/right.svg"></span>
        </div>

      </div>
    </div>

    <div class="project">
      <img class="project-img wow fadeInLeft" data-wow-duration="1s" src="./img/project4.png">
      <div class="project-header wow fadeInRight" data-wow-duration="1s">
        <h2>Website for RISE - an NPO restoring rainforests. </h2>
      </div>
      <div class="project-content wow fadeInRight" data-wow-duration="1s">
        <h3>UI/UX/FRONT-END</h3>
        <p>Website for a non-profit organization that was built
          as capstone project. I was in charge of working with
          the client to build the website from scratch to give the NPO an online presence. </p>
        <div class="project-sub-detail wow fadeInRight" data-wow-duration="1s">
          <a href="">DISCOVER THE PROCESS</a><span><img src="./img/lock.svg"></span>
        </div>
      </div>
    </div>

    <div class="dribbble-button wow fadeIn" data-wow-duration="2s">
      <h2>Dribbble playground</h2>
      <p>For daily UI challenges and personal projects I’m working on, please check out my Dribbble profile.</p>
      <a target="_blank" rel="noopener noreferrer" href="https://dribbble.com/petrastefanec">GO TO DRIBBBLE</a>
    </div>


    <div class="center-connect wow fadeIn"><span class="center-connect-text">Let's connect!</span><img src="./img/handshake.svg"></div>
    <div class="connect-description wow fadeIn">If you would like to get in touch with me for any work inquiries,
      project questions or just chatting about dogs and alpacas,
      reach me through my email or my other accounts.
    </div>
    <div id="social-medias" class="wow pulse">
      <a href="mailto: petra.stefane@gmail.com" target="_blank">E-mail</a>
      <a href="https://www.linkedin.com/in/petra-stefanec/" target="_blank">LinkedIn</a>
      <a href="https://dribbble.com/petrastefanec" target="_blank">Dribbble</a>
      <a href="https://www.instagram.com/lallapeachy/" target="_blank">Instagram</a>
    </div>

  </div>
  <div class="footer"><p>&#169 Copyright 2020. Designed and coded by Petra. 🐶 <a href="https://github.com/petra-stef/portfolio" target="_blank" rel="noopener noreferrer">Github</a></p></div>
</body>
<script src="scroll.js"></script>
</html>