gsap.registerPlugin(ScrollTrigger);

gsap.timeline()
.from('.navbar', {scale:0, duration:2})
.from('.navbar-brand', {opacity:0, scale: 0, ease:"back"})
.from('.tag', {opacity:0, y: 10, ease:"back"})


gsap.from(".about-text", {
    duration:1.5,
    y:250,
    opacity:1,
    scrollTrigger:{
        trigger:"top center",
    start: 10
}
});
