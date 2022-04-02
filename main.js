$(document).ready(function () {
  gsap.registerPlugin(ScrollTrigger);

  gsap
    .from('.hero-title', {
      // selector text, Array, or object
      y: 100, // any properties (not limited to CSS)
      opacity: 0,
      duration: 3, // seconds
      delay: 0.5,
      ease: 'power2.inOut',
      stagger: 0.3, // stagger start times
    })
    .to('.hero-title', {
      opacity: 1,
    });

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: '.hero-title',
      start: 'top center',
      markers: true,
    },
  });
});
