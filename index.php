<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Corben:wght@400;700&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<head>
  <title>Petra's Portfolio</title>
</head>

<body>
  <div class="home_top_background">
    <div class="home_top_blend"></div>
    <?php
    include('./nav/navbar.php');
    include('./home_top.php');
    ?>
  </div>
  <div class="main">
    <!-- Title: Skillset -->
    <div><img src="./img/01.svg"><span class="sub-head-title">My Skillset</span></div>
    <div class="gap-after-title"></div>
    <div class="cards">
      <div class="card">
        <h2>Design (UI/UX)</h2>
        <p>Designing user interfaces or websites is my main area of interest.
          I like thinking about different solutions to problems and how we can use design to fix them.</p>
        <div class="card-img"><img src="./img/figma.svg"><img src="./img/xd.svg"></div>
      </div>
      <div class="card">
        <h2>Front-end</h2>
        <p>I like to see design in action and I believe that knowing how it can be implemented can help tremendously when designing.
          It also enables you to comunicate with developers smoothly and know your boundaries.</p>
        <div class="card-img"><img src="./img/html.svg"><img src="./img/css.svg"></div>
      </div>
      <div class="card">
        <h2>Illustration</h2>
        <p>I believe illustrations transmit a message much better than a text or image can in some situations.
          It also helps in establishing a brand experience,
          It is currently just a hobby but in the future I would love to develop this skill more.</p>
        <div class="card-img"><img src="./img/procreate.svg"></div>
      </div>
    </div>
    <div class="gap-after-title"></div>

    <!-- Title: Projects -->
    <div class="sub-head2"><span class="sub-head-title2">Selected Work</span><img src="./img/02.svg"></div>
    <div class="gap"></div>
    <div class="gap-after-title"></div>
    <!-- 1st Project -->
    <div class="project">
      <img class="project-img" src="./img/project1.png">
      <div class="project-header">
        <h2>Beginner-friendly</h2>
        <h2>recipe app.</h2>
      </div>
      <div class="project-content">
        <h3>UI/UX</h3>
        <p>A highly-visual recipe sharing application
          whose main goal is to make the cooking process easier for beginners,
          reduce food waste and help users save time and money.</p>
        <div class="project-sub-detail">
          <p><a href="">SEE CASE STUDY</a><span><img src="./img/arrow.svg"></span></p>
        </div>
      </div>
    </div>
    <div class="gap"></div>

    <!-- 2nd Project -->
    <div class="project">
      <img class="project-img" src="./img/project2.png">
      <div class="project-header">
        <h2>Plant recommendation and plant care app.</h2>
      </div>
      <div class="project-content">
        <h3>UI/UX</h3>
        <p>An app which recommends you plants that would thrive
          in your home environment based on factors such as light condition,
          maintenance level and light.</p>
        <div class="project-sub-detail">
          <p><a href="https://www.behance.net/gallery/95451487/Terra-Plant-Recommendation-App" target="_blank" rel="noopener noreferrer">SEE CASE STUDY</a><span><img src="./img/arrow.svg"></span></p>
        </div>
      </div>
    </div>
    <div class="gap"></div>

    <!-- 3rd Project -->
    <div class="project">
      <img class="project-img" src="./img/unknowneurope2.gif">
      <div class="project-header">
        <h2>Website introducing unknown travel spots.</h2>
      </div>
      <div class="project-content">
        <h3>FRONT-END</h3>
        <p>A website made with HTML/CSS/Javascript.
          It includes a landing page, blog post,
          and a contact page with a form that validates. </p>
        <div class="project-sub-detail">
          <p><a href="">DISCOVER THE PROCESS</a><span><img src="./img/arrow.svg"></span></p>
        </div>
      </div>
    </div>
    <div class="gap"></div>

    <!-- 4th Project -->
    <div class="project">
      <img class="project-img" src="./img/project4.png">
      <div class="project-header">
        <h2>Website for RISE - an NPO restoring rainforests. </h2>
      </div>
      <div class="project-content">
        <h3>UI/UX/FRONT-END</h3>
        <p>Website for a non-profit organization that was built
          as capstone project. I was in charge of working with
          the client to build the website from scratch to give the NPO an online presence. </p>
        <div class="project-sub-detail">
          <p><a href="">DISCOVER THE PROCESS</a><span><img src="./img/lock.svg"></span></p>
        </div>
      </div>
    </div>
    <div class="gap"></div>

    <!-- Title: Dribbble -->
    <div class="sub-head"><img src="./img/03.svg"><span class="sub-head-title">Dribbble Playground</span></div>
    <div class="gap-after-title"></div>
    <div class="dribbble-button">
      <h2>Dribbble playground</h2>
      <p>For daily UI challenges and personal projects I’m working on, please check out my Dribbble profile.</p>
      <p><a target="_blank" rel="noopener noreferrer" href="https://dribbble.com/petrastefanec">GO TO DRIBBBLE</a></p>
    </div>

    <div class="gap"></div>

    <!-- Title: Social Media -->
    <div class="sub-head2"><span class="sub-head-title2">Ready to work together?</span><img src="./img/04.svg"></div>
    <div class="gap-after-title"></div>
    <div class="center-connect"><span class="center-connect-text">Let's connect!</span><img src="./img/handshake.svg"></div>
    <div class="gap-after-title"></div>
    <div class="connect-description">If you would like to get in touch with me for any work inquiries,
      project questions or just chatting about dogs and alpacas,
      reach me through my email or my other accounts.
    </div>
    <div class="gap-after-title"></div>
    <div class="social-medias"><span><a href="mailto: petra.stefane@gmail.com" target="_blank">E-mail</a></span><span><a href="https://www.linkedin.com/in/petra-stefanec/" target="_blank">LinkedIn</a></span>
      <span><a href="https://dribbble.com/petrastefanec" target="_blank">Dribbble</a></span><span><a href="https://www.instagram.com/lallapeachy/" target="_blank">Instagram</a></span>
    </div>

    <div class="gap"></div>
  </div>
  <div class="footer">Copyright 2020.</div>
</body>

</html>