// GSAP Animations for Smooth Scroll and Parallax Effect
gsap.from(".hero .content", { opacity: 0, y: -100, duration: 1, delay: 0.5 });
gsap.from(".cta-btn", { opacity: 0, scale: 0.5, duration: 1, delay: 1 });

window.addEventListener("scroll", function () {
    let scrollPos = window.scrollY;
    document.querySelector(".parallax").style.transform = "translateY(" + (scrollPos * 0.5) + "px)";
});

// Scroll Animation for Skill Cards
const skills = document.querySelectorAll('.skill-card');
window.addEventListener('scroll', () => {
    skills.forEach(skill => {
        const rect = skill.getBoundingClientRect();
        if (rect.top < window.innerHeight - 150) {
            gsap.to(skill, { opacity: 1, y: 0, duration: 1 });
        }
    });
});
