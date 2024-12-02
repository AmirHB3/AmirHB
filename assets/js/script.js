document.addEventListener('DOMContentLoaded', function () {
    // Dark mode functionality
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;
    const darkModeIcon = document.getElementById('darkModeIcon');
    // custom footer light/dark
    const footer = document.getElementById('custom-footer');

    function setFooterMode(isDark) {
        footer.classList.toggle('dark-mode', isDark);
        footer.classList.toggle('light-mode', !isDark);
    }

    function setDarkMode(isDark) {
        body.classList.toggle('dark-mode', isDark);
        darkModeIcon.className = isDark ? 'bi bi-sun-fill' : 'bi bi-moon-fill';
        localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');
        
        // Update navbar
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            navbar.classList.toggle('navbar-light', !isDark);
            navbar.classList.toggle('navbar-dark', isDark);
            navbar.classList.toggle('bg-light', !isDark);
            navbar.classList.toggle('bg-dark', isDark);
        }
        
        // Update cards
        document.querySelectorAll('.card').forEach(card => {
            card.classList.toggle('bg-dark', isDark);
            card.classList.toggle('text-white', isDark);
        });
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

    // Initial setting
    setFooterMode(body.classList.contains('dark-mode'));

    // Update footer when dark mode changes
    darkModeToggle.addEventListener('click', () => {
        const isDark = body.classList.contains('dark-mode');
        setFooterMode(isDark);
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
    const skillSection = document.getElementById('skills');
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
    const contactForm = document.getElementById('contact-form'); // select the form
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // code to submit form
            Swal.fire({
                icon: 'success',
                title: 'پیام شما ارسال شد!',
                text: 'به زودی با شما تماس خواهم گرفت.',
                confirmButtonText: 'باشه',
                confirmButtonColor: '#007bff',
                background: '#f9f9f9',
                color: '#333',
                customClass: {
                    popup: 'animated fadeInDown'
                }
            });
            this.reset();
        });
    }
});
// Type effect
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

window.onload = function () {
    document.getElementById("animated-title").innerHTML = "";
    typeEffect();
};


