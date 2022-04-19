$(document).ready(function () {
  gsap.registerPlugin(ScrollTrigger);

  let heroReveal = gsap.timeline();

  heroReveal
    .from('.hero-title', {
      // selector text, Array, or object
      y: 100, // any properties (not limited to CSS)
      opacity: 0,
      duration: 2, // seconds
      delay: 0.3,
      ease: 'power2.inOut',
      stagger: 0.3, // stagger start times
    })
    .to('.hero-title', {
      opacity: 1,
    });

  let timeline = gsap.timeline({ paused: true });

  timeline
    .to('#nav-logo', { scale: 0.6, y: '-=1vh', x: '-=1vw' })
    .to('#hero-title-container', { opacity: 0 }, '<')
    .fromTo(
      '#co2-cloud',
      { y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'power2.in' },
    )
    .fromTo(
      '#house-health',
      { y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'power2.in' },
    )
    .fromTo(
      '#circular-economy',
      { y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'power2.in' },
    )
    .fromTo(
      '#link-local',
      { y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'power2.in' },
    )
    .fromTo(
      '#bio-net-gain',
      { y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'power2.in' },
    );

  ScrollTrigger.create({
    trigger: '.icon-container',
    start: 'bottom top',
    end: '+=700vh',
    ease: 'power2.in',
    scrub: true,
    // stagger: 0.1,
    pin: '.hero-animation-container',
    onEnter: animationTimeline,
    onEnterBack: animationTimelineReverse,
    markers: true,
  });

  function animationTimeline() {
    timeline.play();
  }

  function animationTimelineReverse() {
    timeline.reverse();
  }

  $('.login-drop-down').on('hover', function () {
    $(this).html('<input type="text" class="email" placeholder="Email"><input type="text" class="password" placeholder="Password"><button class="login-button">Log in</button>')

    $('.login-button').on('click', function () {
      $.post("XHR/login.php", { user: $('.email').val(), pass: $('.password').val() }, function (response) {
        if (response.status) {
          console.log(response.msg)
          window.location.href = "home.php";
        } else {
          console.log(response.msg)
        }
      });
    });
  });


}); // end document ready
