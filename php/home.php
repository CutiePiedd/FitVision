<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitVision - Virtual Try-On</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/nav.css">
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <i class="fa-solid fa-cube"></i> FitVision
                </div>
                <div class="nav-links">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                    <button class="btn-login">Login</button>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content">
                    <h3>FitVision</h3>
                    <h1>Create Your Body Profile</h1>
                    <span class="sub-headline">Your Virtual Body Profile</span>
                    <p class="hero-desc">
                        <span id=typeText></span>

                    <div class="action-card">
                        <div class="ac-left">
                            <div class="ac-icon"><i class="fa-regular fa-user"></i></div>
                            <div class="ac-text">
                                <h4>Create Your Body Profile</h4>
                                <p>Build your private, precise virtual body model</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>

                    <div class="action-card">
                        <div class="ac-left">
                            <div class="ac-icon"><i class="fa-solid fa-shirt"></i></div>
                            <div class="ac-text">
                                <h4>Try On Clothing</h4>
                                <p>See how clothing looks on your custom body profile</p>
                            </div>
                        </div>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>

                    <div class="security-badges">
                        <div class="badge">
                            <i class="fa-solid fa-shield-halved"></i>
                            <div>
                                <h5>Private & Secure</h5>
                                <p>Only you can see your body profile. Your data is kept confidential and encrypted.</p>
                            </div>
                        </div>
                        <div class="badge">
                            <i class="fa-solid fa-cube"></i>
                            <div>
                                <h5>Accurate 3D Model</h5>
                                <p>Calibrated for precise body measurements to guarantee semi-realistic results.</p>
                            </div>
                        </div>
                    </div>
                </div>

              <section class="videos">
  <div class="video-container">
    <video id="heroVideo" autoplay muted playsinline>
      <source src="../assets/video/12072857_2160_3840_30fps.mp4" type="video/mp4">
    </video>
  </div>
</section>


            </div>
        </div>
    </section>

    <section class="steps-section">
        <div class="container">
            <h2 class="section-title">Try On Outfits Virtually – 3 Easy Steps</h2>
            <p class="section-subtitle">How to use FitVision's virtual try-on feature</p>

            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Create Your Body Profile</h3>
                    <p style="margin-top:0; margin-bottom:20px;">Create your precise 3D body profile for accurate virtual try-ons.</p>
                    <div class="mockup-container">
                        <img src="../assets/images/image 53.png" alt="Phone UI">
                    </div>
                    <button class="btn-step"><i class="fa-solid fa-cube"></i> Create Body Profile</button>
                    <p>Create your precise 3D body profile for accurate virtual try-ons.</p>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>Select Clothing To Try On</h3>
                    <p style="margin-top:0; margin-bottom:20px;">Browse and pick clothing from our collection to try on virtually.</p>
                    <div class="mockup-container">
                        <img src="../assets/images/image 58.png" alt="Clothing Selection">
                    </div>
                    <button class="btn-step"><i class="fa-solid fa-shirt"></i> Browse Fits</button>
                    <p>Browse and pick clothing from our collection to try on virtually.</p>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>See Your Virtual Look</h3>
                    <p style="margin-top:0; margin-bottom:20px;">View the virtual try-on results in seconds. Share or save your new look.</p>
                    <div class="mockup-container">
                        <img src="../assets/images/image 59.png" alt="Virtual Look">
                    </div>
                    <button class="btn-step"><i class="fa-solid fa-share-nodes"></i> Share or Save Your Look</button>
                    <p>View the virtual try-on results in seconds. Share or save your new look.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sustain-section">
        <div class="container">
            <div class="sustain-card">
                <div class="sustain-img">
                    <img src="../assets/images/Rounded rectangle.png" alt="Sustainability Mockup">
                </div>
                <div class="sustain-content">
                    <h2>Style Master, Waste Less.</h2>
                    <h4>How FitVision supports SDG 12: Responsible Consumption & Production</h4>
                    
                    <h3 style="margin-bottom: 15px; font-size: 1.3rem;">Reducing Fashion Waste Starts Before You Buy</h3>
                    <p class="desc-text">FitVision will help you make better purchasing decisions by visualizing how clothes fit before checkout. By using virtual fitting technology, FitVision reduces unnecessary returns, minimizes textile waste and supports more responsible fashion consumption-- directly aligning with Sustainable Development Goal 12.</p>

                    <div class="benefit-list">
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fa-solid fa-box-open"></i></div>
                            <div>
                                <strong>Fewer returns</strong> <span>= less packaging & transport emissions</span>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fa-solid fa-bag-shopping"></i></div>
                            <div>
                                <strong>Smarter buying</strong> <span>= reduced overproduction</span>
                            </div>
                        </div>
                        <div class="benefit-list">
                        <div class="benefit-item">
                            <div class="benefit-icon"><i class="fa-solid fa-shirt"></i></div>
                            <div>
                                <strong>Digital Fitting</strong> <span>= lower clothing waste</span>
                            </div>
                        </div>
                    </div> 
                    
                    <a href="#" class="btn-sustain-cta">
                        Learn how Fitvision will help reduce waste
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                  
                
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-logo">
                <i class="fa-solid fa-cube"></i> FitVision
            </div>
            <p class="footer-desc">
                FitVision offers an innovative virtual try-on experience to help you visualize and discover your perfect fit
            </p>
            <div class="footer-bottom">
                <div class="copyright">
                    &copy; 2026 Fitvision. All rights reserved.
                </div>
                <div class="footer-links">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
    </footer>
<script>
  const video = document.getElementById("heroVideo");

  const playlist = [
    "../assets/video/12072857_2160_3840_30fps.mp4",
    "../assets/video/7680438-uhd_2160_4096_25fps.mp4",
    "../assets/video/12072857_2160_3840_30fps.mp4"
  ];

  let currentIndex = 0;

  video.addEventListener("ended", () => {
    currentIndex = (currentIndex + 1) % playlist.length;
    video.src = playlist[currentIndex];
    video.play();
  });
</script>
<script>
  const text = "Your personalized body profile & try-on tool using advanced AI modeling. Start by creating your accurate virtual body profile and see how clothes and outfits would look on your body in realistic 3D.";
  const target = document.getElementById("typeText");

  let index = 0;
  const speed = 70; // ms per character

  function typeEffect() {
    if (index < text.length) {
      target.textContent += text.charAt(index);
      index++;
      setTimeout(typeEffect, speed);
    }
  }

  typeEffect();
</script>

</body>
</html>