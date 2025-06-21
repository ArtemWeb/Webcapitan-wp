import '../plugins/mobileNavPlugin';

export function initMobileNav() {
	jQuery('body').mobileNav({
		menuActiveClass: 'nav-active',
		menuOpener: '.nav-opener',
    menuDrop: '.header-nav'
	});
}