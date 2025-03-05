document.addEventListener('DOMContentLoaded', function () {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;
    const darkModeIcon = document.getElementById('darkModeIcon');
    const contactSection = document.getElementById('contact');
    const formInputs = document.querySelectorAll('.form-control');
    const skillsSection = document.getElementById('skills');
    const cards = document.querySelectorAll('.card');
    const footer = document.getElementById('custom-footer');

    // Function to set footer mode based on dark/light theme
    function setFooterMode(isDark) {
        footer.classList.toggle('dark-mode', isDark);
        footer.classList.toggle('light-mode', !isDark);
        
        // Toggle skills section classes
        skillsSection.classList.toggle('bg-light', !isDark);
        skillsSection.classList.toggle('bg-dark', isDark);
        skillsSection.classList.toggle('text-light', isDark);

        // Toggle card classes
        cards.forEach(card => {
            card.classList.toggle('bg-light', !isDark);
            card.classList.toggle('bg-dark', isDark);
            card.classList.toggle('text-light', isDark);
        });
    }

    // Function to set dark mode styles
    function setDarkMode(isDark) {
        body.classList.toggle('dark-mode', isDark);
        body.classList.toggle('text-light', isDark);
        darkModeIcon.className = isDark ? 'bi bi-sun-fill' : 'bi bi-moon-fill';
        localStorage.setItem('darkMode', isDark ? 'enabled' : 'disabled');

        // Update navbar styles
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            navbar.classList.toggle('navbar-light', !isDark);
            navbar.classList.toggle('navbar-dark', isDark);
            navbar.classList.toggle('bg-light', !isDark);
            navbar.classList.toggle('bg-dark', isDark);
        }

        // Toggle contact section classes
        if (contactSection) {
            contactSection.classList.toggle('bg-light', !isDark);
            contactSection.classList.toggle('bg-dark', isDark);
            contactSection.classList.toggle('text-light', isDark);
        }

        // Toggle form input classes
        formInputs.forEach(input => {
            input.classList.toggle('bg-dark', isDark);
            input.classList.toggle('text-light', isDark);
            input.style.borderColor = isDark ? '#6c757d' : ''; // Adjust border color in dark mode
        });

        // Update cards styles
        cards.forEach(card => {
            card.classList.toggle('bg-dark', isDark);
            card.classList.toggle('text-white', isDark);
        });
    }

    const savedDarkMode = localStorage.getItem('darkMode');
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');

    if (savedDarkMode === 'enabled' || (savedDarkMode === null && prefersDarkScheme.matches)) {
        setDarkMode(true); // Set dark mode based on saved preference or system preference
    }

    darkModeToggle.addEventListener('click', () => setDarkMode(!body.classList.contains('dark-mode')));

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    window.addEventListener('scroll', () => {
        if (navbar) {
            navbar.classList.toggle('navbar-scrolled', window.scrollY > 50);
        }
    });

    // Initial setting for footer mode
    setFooterMode(body.classList.contains('dark-mode'));

    // Update footer when dark mode changes
    darkModeToggle.addEventListener('click', () => {
        const isDark = body.classList.contains('dark-mode');
        setFooterMode(isDark);
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');            
            if (targetId.length > 1) {
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // Animate skill bars when in view
    const skillSection = document.getElementById('skills');
    const progressBars = document.querySelectorAll('.progress-bar');

    const animateSkills = () => {
        if (skillSection) {
            const sectionTop = skillSection.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (sectionTop < windowHeight * 0.75) {
                progressBars.forEach(bar => {
                    bar.style.width = bar.getAttribute('aria-valuenow') + '%';
                });
                window.removeEventListener('scroll', animateSkills); // Remove event listener after animation
            }
        }
    };

    window.addEventListener('scroll', animateSkills);

    // Form submission handling with SweetAlert customization
    const contactForm = document.getElementById('contact-form'); // Select form

    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault(); // Suggestion of default form submission

            // Creating a FormData object from a form
            const formData = new FormData(this);

            // Sending data using the Fetch API
            fetch('../AmirHB/components/contactUs.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text()) // Receive a response in text form
            .then(data => {
                // Display SweetAlert based on server response
                Swal.fire({
                    icon: data.includes('موفقیت') ? 'success' : 'error', // Check server response
                    title: data.includes('موفقیت') ? 'پیام شما ارسال شد!' : 'خطا در ارسال پیام',
                    text: data, // Show server message
                    confirmButtonText: 'باشه',
                    confirmButtonColor: '#007bff',
                    background: body.classList.contains('dark-mode') ? '#343a40' : '#f9f9f9',
                    color: body.classList.contains('dark-mode') ? '#f8f9fa' : '#333',
                    customClass: {
                        popup: 'animated fadeInDown',
                        title: 'swal-title',
                        htmlContainer: 'swal-html'
                    }
                });

                if (data.includes('موفقیت')) {
                    this.reset(); // Reset form if successful
                }
            })
            .catch(error => {
                console.error('خطا در ارسال درخواست:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'خطا در ارسال پیام',
                    text: 'مشکلی در ارتباط با سرور رخ داده است.',
                    confirmButtonText: 'باشه',
                    confirmButtonColor: '#007bff',
                    background: body.classList.contains('dark-mode') ? '#343a40' : '#f9f9f9',
                    color: body.classList.contains('dark-mode') ? '#f8f9fa' : '#333',
                    customClass: {
                        popup: 'animated fadeInDown',
                        title: 'swal-title',
                        htmlContainer: 'swal-html'
                    }
                });
            });
        });
    }

    // Type effect for animated title
    const text = "امیرحسین بهرامی";  // Change to your name or desired text
    let index = 0;

    function typeEffect() {
        const titleElement = document.getElementById("animated-title");
        
        if (index < text.length) {
            titleElement.innerHTML += text.charAt(index);
            index++;
            setTimeout(typeEffect, 100); // Adjust typing speed here
        }
    }

    window.onload = function () {
        document.getElementById("animated-title").innerHTML = ""; // Clear previous content on load
        typeEffect(); // Start typing effect on load
    };
});