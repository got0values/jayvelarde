const jvcontainer = document.querySelector('#jvcontainer');
const jvh1 = document.querySelector('#jvh1');
const jvwrap = document.querySelector('#jvwrap');
const welcomeSection = document.querySelector('#welcome-section');
const webdev = document.querySelector('#webdev');

jvwrap.addEventListener("mousemove", (e) => {
    let xAxis = (window.innerWidth / 2 - e.pageX) / 20;
    let yAxis = (window.innerHeight / 2 - e.pageY) / 20;
    jvwrap.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});

jvwrap.addEventListener("mouseenter", (e) => {
    jvwrap.style.transition = "all 0.2s ease";
    jvwrap.style.boxShadow = "1px 1px 5px grey";
    jvwrap.style.background = "linear-gradient(135deg, rgba(201,201,201,0) 30%, rgba(255,255,255,0.1) 48%, rgba(131,143,163,0) 70%)";
    jvh1.style.transform = "translateZ(200px) rotateZ(5deg)";
    webdev.style.transform = "translateZ(200px) translateY(20px) rotateZ(-2deg)";
});

jvwrap.addEventListener("mouseleave", (e) => {
    jvwrap.style.transition = "all 0.5s ease";
    jvwrap.style.boxShadow = "none";
    jvwrap.style.background = "none"; 
    jvh1.style.transform = "translateZ(0px) rotateZ(0deg)";
    webdev.style.transform = "translateZ(0px) translateY(0px) rotateZ(1deg)";
});