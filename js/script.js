document.addEventListener('DOMContentLoaded', () => {
    
    // --- Mobile Menu Toggle ---
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        // Optional: Change icon from bars to X
        const icon = hamburger.querySelector('i');
        if(mobileMenu.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-xmark');
        } else {
            icon.classList.remove('fa-xmark');
            icon.classList.add('fa-bars');
        }
    });

    // --- Scroll Animation ---
    const fadeElements = document.querySelectorAll('.fade-in');

    const appearOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('active');
                appearOnScroll.unobserve(entry.target);
            }
        });
    }, appearOptions);

    fadeElements.forEach(element => {
        appearOnScroll.observe(element);
    });
});


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
