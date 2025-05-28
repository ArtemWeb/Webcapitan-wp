import "../styles/style.scss";
import { initSwiper } from './components/swiper';
import { initMobileNav } from './components/mobileNav';

document.addEventListener('DOMContentLoaded', () => {
	document.documentElement.classList.add('is-loaded');
	initSwiper();
	initMobileNav();
});

// Scroll
const header = document.querySelector('.header');
const scrollOffset = 0;

window.addEventListener('scroll', () => {
	const scrollTop = window.scrollY || document.documentElement.scrollTop;
	if (scrollTop > scrollOffset) {
		header.classList.add('header-scrolled');
	} else {
		header.classList.remove('header-scrolled');
	}
});

// Accordion
const items = document.querySelectorAll('.faq-item');

function toggleItem(item) {
	const slider = item.querySelector('.slide');
	const isActive = item.classList.contains('active');

	if (!isActive) {
		items.forEach(i => {
			i.classList.remove('active');
			i.querySelector('.slide').style.maxHeight = '0';
		});

		item.classList.add('active');
		slider.style.maxHeight = slider.scrollHeight + "px";
	} else {
		item.classList.remove('active');
		slider.style.maxHeight = '0';
	}
}

items.forEach(item => {
	const opener = item.querySelector('.opener');
	opener.addEventListener('click', () => toggleItem(item));
});

// Scroll
const scrollBtn = document.querySelector('.hero-scroll');
const heroSection = document.querySelector('.hero');

const nextSection = heroSection.nextElementSibling;

if (scrollBtn && nextSection) {
	scrollBtn.addEventListener('click', function (e) {
		e.preventDefault();
		nextSection.scrollIntoView({ behavior: 'smooth' });
	});
}