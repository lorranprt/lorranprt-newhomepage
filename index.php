<?php include 'includes/header.php'; ?>


<link rel="stylesheet" href="assets/css/style.css">
<meta name="viewport">
<main class="container">
  <!-- INTRO -->
<section class="intro fade-in">
  <p class="tagline-box">Hello, I'm a Full-Stack developer based in Brazil!</p>
  <div class="intro-flex">
    <div class="intro-name-block">
      <h1>Lorran Porto</h1>
      <p class="subtitle">Full-Stack Developer</p>
    </div>
    <img src="assets/images/profile.jpg" class="profile-side" alt="Profile photo">
  </div>
</section>

  <!-- WORK -->
  <section class="work fade-in">
    <h3>Work</h3>
    <p>
Lorran is a full-stack developer based in Rio de Janeiro, Brazil, passionate about building digital solutions that reflect his personal goals. With hands - on experience throughout the entire development process — from planning to deployment — he currently works as a PHP developer at the Legislative Assembly of the State of Rio de Janeiro (ALERJ). Outside of work, he enjoys leisure activities and occasionally streams live.
    </p>
    <a href="pages/works.php" class="btn">Portfolio</a>
  </section>

  <!-- BIO -->
<section class="bio fade-in">
  <h3>Bio</h3>
<ul class="bio-list">
  <li>
    <span class="year">2004</span>
    <span class="job-title">Born in Rio de Janeiro, Brazil.</span>
  </li>
  <li>
    <span class="year">2016</span>
    <span class="job-title">Started studying programming.</span>
  </li>
  <li>
    <span class="year">2020</span>
    <span class="job-title">Began working on freelance projects.</span>
  </li>
  <li>
    <span class="year">2025 - Present</span>
    <span class="job-title">PHP Developer at <a href="https://www.alerj.rj.gov.br/">ALERJ.</a></span>
  </li>
</ul>
</section>



  <!-- LIKES -->
  <section class="likes fade-in">
    <h3>I ♥</h3>
    <p>Art, Music, Games, Video Editing</p>
  </section>

  <!-- SOCIAL -->
  <section class="social-links fade-in">
    <h3>On the web</h3>
    <ul class="social-list">
      <li><a href="https://github.com/lorranprt"><i class="bi bi-github"></i> GitHub</a></li>
      <li><a href="https://x.com/lorranprt"><i class="bi bi-twitter"></i> Twitter</a></li>
      <li><a href="https://www.linkedin.com/in/lorran-porto-8788621a4/"><i class="bi bi-instagram"></i> Linkedin</a></li>
    </ul>
  </section>
</main>

<?php include 'includes/footer.php'; ?>

<script>
// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
  const menuBtn = document.querySelector('.menu-toggle');
  const mobileMenu = document.querySelector('.nav-mobile');
  
  if(menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', function() {
      this.classList.toggle('active');
      mobileMenu.classList.toggle('active');
      document.body.classList.toggle('menu-open');
    });
  }

  // Close menu when clicking on links
  document.querySelectorAll('.nav-mobile a').forEach(link => {
    link.addEventListener('click', () => {
      document.querySelector('.menu-toggle').classList.remove('active');
      mobileMenu.classList.remove('active');
      document.body.classList.remove('menu-open');
    });
  });

  // Fade-in animation for sections
  const fadeElements = document.querySelectorAll('.fade-in');
  
  const fadeInObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1 });

  fadeElements.forEach(element => {
    fadeInObserver.observe(element);
  });

  // Page transition
  document.querySelectorAll('a.link-transition').forEach(link => {
    link.addEventListener('click', function(e) {
      if(this.href && this.href !== '#') {
        e.preventDefault();
        document.body.classList.add('fade-out');
        setTimeout(() => {
          window.location.href = this.href;
        }, 500);
      }
    });
  });
});
</script>