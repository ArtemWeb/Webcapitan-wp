import Swiper from 'swiper';
import { Navigation, Autoplay   } from 'swiper/modules';

 export function initSwiper() {
	const partners = new Swiper('.mySwiper', {
		slidesPerView: 1,
    spaceBetween: 20,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
			768: {
				slidesPerView: 2,
			},
			1440: {
				slidesPerView: 3,
			},
		},
		modules: [Navigation, Autoplay],
	});
}
