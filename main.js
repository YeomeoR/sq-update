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
      { duration: 1, y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'back' },
    )
    .fromTo(
      '#house-health',
      { duration: 1, y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'back' },
    )
    .fromTo(
      '#circular-economy',
      { duration: 1, y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'back' },
    )
    .fromTo(
      '#link-local',
      { duration: 1, y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'back' },
    )
    .fromTo(
      '#bio-net-gain',
      { duration: 1, y: '-60vh', opacity: 0 },
      { y: 0, opacity: 1, ease: 'back' },
    );

  ScrollTrigger.create({
    trigger: '.icon-container',
    start: 'bottom top',
    end: '+=500vh',
    ease: 'back',
    scrub: true,
    stagger: 0.5,
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
}); // end document ready
