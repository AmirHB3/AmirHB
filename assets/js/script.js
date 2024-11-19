document.addEventListener('DOMContentLoaded', function() {
    // Dark mode functionality
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;
    const darkModeIcon = document.getElementById('darkModeIcon');

    function setDarkMode(isDark) {
        body.classList.toggle('dark-mode', isDark);
        darkModeIcon.className = isDark ? 'bi bi-sun-fill' : 'bi bi-moon-fill';
        localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
    }

    const savedDarkMode = localStorage.getItem('darkMode');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');

    if (savedDarkMode === 'enabled' || (savedDarkMode === null && prefersDarkScheme.matches)) {
        setDarkMode(true);
    }

    darkModeToggle.addEventListener('click', () => setDarkMode(!body.classList.contains('dark-mode')));

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        navbar.classList.toggle('navbar-scrolled', window.scrollY > 50);
    });

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Animate skill bars
    const skillSection = 
document.getElementById('skills');
    const progressBars = document.querySelectorAll('.progress-bar');

    const animateSkills = () => {
        const sectionTop = skillSection.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (sectionTop < windowHeight * 0.75) {
            progressBars.forEach(bar => {
                bar.style.width = bar.getAttribute('aria-valuenow') + '%';
            });
            window.removeEventListener('scroll', animateSkills);
        }
    };

    window.addEventListener('scroll', animateSkills);

    // Form submission
    const contactForm = document.getElementById('contact-form');
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        alert('پیام شما با موفقیت ارسال شد. به زودی با شما تماس خواهیم گرفت.');
        this.reset();
    });


    setInterval(createBinary, 200);
});

// type effect
const text = "امیرحسین بهرامی";
let index = 0;

function typeEffect() {
    const titleElement = document.getElementById("animated-title");

    if (index < text.length) {
        titleElement.innerHTML += text.charAt(index);
        index++;
        setTimeout(typeEffect, 100);
    }
}

window.onload = function() {
    document.getElementById("animated-title").innerHTML = "";
    typeEffect();
};
