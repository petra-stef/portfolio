<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="petra stefanec portfolio ui/ux designer product designer">
  <link rel="stylesheet" href="style.css">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Corben:wght@400;700&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Corben:wght@400;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
  <title>About Petra</title>
  <script src="./external.js"></script>
  <script src="dist/html5shiv.js"></script>
</head>

<body>
  <div class="about_top_background">
    <?php
    include('./nav/navbar.php');
    include('./about_top.php');
    ?>
  </div>
  <div class="gap"></div>

      <!-- Title: Skillset -->
    <div class="sub-head"><img src="./img/01.svg"><span class="sub-head-title">My Skillset</span></div>
    <!-- <div class="gap-after-title"></div> -->
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
    <div class="gap"></div>

    <div class="sub-head2"><span class="sub-head-title2">Fun facts about me</span><img src="./img/02.svg"></div>
    <div class="gap-after-title"></div>

  <div class="about-me-section">
    <div class="about-me"><h3>Things that excite me</h3>
      <ul>
        <li>typography/print</li>
        <li>dogs</li>
        <li>boba tea/chocolate</li>
        <li>print/stationary</li>
        <li>nature/architecture</li>
        <li>galaxy/astronomy</li>
      </ul>
    </div>

    <div class="about-me2"><h3>Things I do in my free time</h3>
      <ul>
        <li>illustrate/draw flowers</li>
        <li>make jewelry</li>
        <li>watch Gilmore Girls</li>
        <li>do puzzles</li>
        <li>cook/bake/</li>
        <li>look at animal videos on Instagram</li>
      </ul>
    </div>

    </div>

    <div class="sub-head"><img src="./img/03.svg"><span class="sub-head-title">Ready to work together?</span></div>
    <div class="resume-link">
      <h2>Check out my resume here.</h2>
      <a href="https://drive.google.com/file/d/1m35qrlB6Ysyu6bJe5Ff3XA4HOzcDdA32/view?usp=sharing" class="button-1" target="_blank">RESUME</a>
    </div>

    <div id="social-medias">
      <ul>
        <li><a href="mailto: petra.stefane@gmail.com" target="_blank">E-mail</a></li>
        <li><a href="https://www.linkedin.com/in/petra-stefanec/" target="_blank">LinkedIn</a></li>
        <li><a href="https://dribbble.com/petrastefanec" target="_blank">Dribbble</a></li>
        <li><a href="https://www.instagram.com/lallapeachy/" target="_blank">Instagram</a></li>
      </ul>
    </div>

    <div class="gap"></div>

  </div>

<div class="footer">&#169 Copyright 2020. Petra Stefanec.</div>

</body>

</html>