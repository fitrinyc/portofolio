document.addEventListener('DOMContentLoaded', () => {

    // ==================
    // Typing Animation
    // ==================
    const typingEl = document.getElementById('typing-text');
    const phrases = [
        'Web Developer',
        'System Analyst',
        'Backend Engineer',
        'Laravel Developer',
        'Cloud Computing Enthusiast',
    ];
    let phraseIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function type() {
        if (!typingEl) return;
        const currentPhrase = phrases[phraseIndex];
        if (isDeleting) {
            typingEl.textContent = currentPhrase.substring(0, charIndex - 1);
            charIndex--;
        } else {
            typingEl.textContent = currentPhrase.substring(0, charIndex + 1);
            charIndex++;
        }

        if (!isDeleting && charIndex === currentPhrase.length) {
            setTimeout(() => { isDeleting = true; type(); }, 1800);
            return;
        }
        if (isDeleting && charIndex === 0) {
            isDeleting = false;
            phraseIndex = (phraseIndex + 1) % phrases.length;
        }

        setTimeout(type, isDeleting ? 50 : 90);
    }
    type();

    // Smooth scrolling
    document.querySelectorAll('a.nav-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            const target = document.querySelector(targetId);
            if(target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
                // Close mobile menu if open
                const navbarToggler = document.querySelector('.navbar-toggler');
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    navbarToggler.click();
                }
            }
        });
    });

    // Fade-in animation observer
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in').forEach(element => {
        observer.observe(element);
    });

    // Highlight active nav link on scroll
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });
});

window.toggleConfidential = function() {
    const el = document.getElementById('confidential-projects');
    const btn = document.getElementById('toggle-confidential-btn');
    if (el.style.display === 'none') {
        el.style.display = 'block';
        btn.style.display = 'none';
    } else {
        el.style.display = 'none';
        btn.style.display = 'inline-block';
        document.getElementById('toggle-confidential-btn').scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
};
