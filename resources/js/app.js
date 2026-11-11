import './bootstrap';

import 'bootstrap/dist/css/bootstrap.min.css';
import { Collapse } from 'bootstrap';

import 'bootstrap-icons/font/bootstrap-icons.css';

const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const revealTargets = document.querySelectorAll(
    '.hero-section .hero-label, .hero-section .hero-title, .hero-section .hero-description, .hero-section .hero-actions, .service-card, .mockup-wrapper, .support-card, .portfolio-card, .approach-image-wrapper, .approach-features, .step-card, .accordion, .contact-form-card',
);

if (!reducedMotion && 'IntersectionObserver' in window) {
    document.documentElement.classList.add('motion-ready');

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealTargets.forEach((element) => {
        element.classList.add('reveal');
        revealObserver.observe(element);
    });
}

if (!reducedMotion && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
    document.querySelectorAll('.tilt-card').forEach((card) => {
        card.addEventListener('pointermove', (event) => {
            const bounds = card.getBoundingClientRect();
            const x = (event.clientX - bounds.left) / bounds.width - 0.5;
            const y = (event.clientY - bounds.top) / bounds.height - 0.5;

            card.style.transform = `rotateX(${y * -5}deg) rotateY(${x * 5}deg)`;
        });

        card.addEventListener('pointerleave', () => {
            card.style.transform = '';
        });
    });
}

document.querySelectorAll('#navMenu .nav-link').forEach((link) => {
    link.addEventListener('click', () => {
        const menu = document.querySelector('#navMenu');

        if (menu.classList.contains('show')) {
            Collapse.getOrCreateInstance(menu).hide();
        }
    });
});

const enquiryToast = document.querySelector('#enquiry-success');

if (enquiryToast) {
    const dismissToast = () => {
        enquiryToast.classList.remove('is-visible');
        window.setTimeout(() => {
            enquiryToast.hidden = true;
        }, 250);
    };

    enquiryToast.focus({ preventScroll: true });

    const dismissButton = enquiryToast.querySelector('.enquiry-toast-close');
    dismissButton.addEventListener('click', dismissToast);
    window.setTimeout(dismissToast, 8000);
}