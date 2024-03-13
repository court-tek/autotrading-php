export function navigation() {
    // accordion container
	let accordions = document.getElementsByClassName('mobile-menu__contentBx');

	// close button 
	let closeButton = document.getElementsByClassName('mobile-menu__close-btn-container')[0];

	// mobile menu
	let mobileMenu = document.getElementsByClassName('mobile-menu')[0];

	// hamburger icon 
	let openButton = document.getElementsByClassName('navigation__burger-menu')[0];

	// account hamburger icon
	let accountOpen = document.getElementsByClassName('navigation__user-dropdown')[0];

	// account close x button
	let accountClose = document.getElementsByClassName('account-dropdown__close-btn')[0];

	// account drop menu 
	let accountMenu = document.getElementsByClassName('account-dropdown')[0];

	// welcome slider bg
	let imgElement = document.getElementsByClassName('hero__image-element')[2];
	
	// ------------------------------------------------------------------

	// account modal function
	accountOpen.addEventListener('click', () => {
		accountMenu.classList.add('account-dropdown--active');
	})

	accountClose.addEventListener('click', () => {
		accountMenu.classList.remove('account-dropdown--active');
	})

	// ------------------------------------------------------------------

	// hamburger slide menu functionality
	openButton.addEventListener('click', () => {
		mobileMenu.classList.add('mobile-menu--open');

	});

	closeButton.addEventListener('click', () => {
		mobileMenu.classList.remove('mobile-menu--open');
	});

}