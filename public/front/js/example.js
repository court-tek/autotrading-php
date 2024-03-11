window.onload = () => {
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

	// ------------------------------------------------------------------

	// Hero Slider




	// // mobile slide menu
	// let hamburgerBtn = document.getElementsByClassName('navbar-toggler')[0];

	// // slide Menu
	// let mobileMenu = document.getElementsByClassName('mobile-menu')[0];

	// // slide Menu close button X
	// let mobileCloseBtn = document.getElementsByClassName(
	// 	'mobile-menu__close-btn'
	// )[0];

	// // phone number input modal
	// let phoneModal = document.getElementsByClassName('phone-modal')[0];

	// // modal close btn
	// let closeModal = document.getElementsByClassName('phone-modal__close-btn')[0];

	// // phone number mobile discount Opt In btn
	// let mobileOpIn = document.getElementsByClassName('phone-modal__button')[0];

	// // modal nothanks close btn
	// let noThanksBtn = document.getElementsByClassName(
	// 	'phone-modal__decline-offer'
	// )[0];

	// // phone input
	// let phoneInput = document.getElementsByClassName('phone-modal__input')[0];

	// // mobile input success message
	// let textInstructions = document.getElementsByClassName(
	// 	'phone-thank__instructions'
	// )[0];

	// // this populates email inside the green box
	// let emailCapture = document.getElementsByClassName('text-box')[0].value;

	// document.getElementsByClassName('email-value')[0].innerHTML = emailCapture;
	// console.log([emailCapture]);

	// let emailValue = document.getElementById('myValue');
	// // dropdown menu
	// let dropDownMenu = document.getElementsByClassName('mc-dropdown-menu')[0];

	// // Input group
	// let inputGroup = document.getElementsByClassName('input-group__mcEmail')[0];

	// // button to open dropdown menu
	// let clickBtnOp = document.getElementsByClassName(
	// 	'input-group__mc-drop-open'
	// )[0];

	// // button to close dropdown menu
	// let clickBtnCl = document.getElementsByClassName('closeBtn')[0];

	// // error message
	// let emailErrorMessage = document.getElementsByClassName(
	// 	'invalid-email-notice'
	// )[0];
	// // ------------------------------------------------------------------
	// // hamburger slide menu functionality
	// hamburgerBtn.addEventListener('click', () => {
	// 	mobileMenu.classList.add('mobile-menu--open');
	// });

	// mobileCloseBtn.addEventListener('click', () => {
	// 	mobileMenu.classList.remove('mobile-menu--open');
	// });

	// // phone modal functionality
	// let showModal = () => {
	// 	if (modalState === false && screen.width > 576) {
	// 		phoneModal.classList.add('phone-modal--visibility');
	// 		modalState = true;
	// 	}
	// };

	// let phoneIsValid = phoneNumber => {
	// 	return /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/.test(phoneNumber);
	// };

	// let displayInstructions = () => {
	// 	textInstructions.classList.add('phone-thank--success');
	// };

	// document.addEventListener('mouseenter', () => {
	// 	showModal();
	// });

	// closeModal.addEventListener('click', () => {
	// 	phoneModal.classList.remove('phone-modal--visibility');
	// });

	// noThanksBtn.addEventListener('click', () => {
	// 	phoneModal.classList.remove('phone-modal--visibility');
	// });

	// mobileOpIn.addEventListener('click', () => {
	// 	if (phoneIsValid(phoneInput.value)) {
	// 		displayInstructions();
	// 	} else {
	// 		document
	// 			.getElementsByClassName('phone-modal__error-warning')[0]
	// 			.classList.add('phone-modal__form-submit--error');
	// 		console.log('not valid');
	// 	}
	// });

	// // click button to init dropdown and populate green box with clients email address
	// let emailIsValid = () => {
	// 	if (
	// 		!emailValue.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)
	// 	) {
	// 		emailErrorMessage.classList.add('invalid-email-notice--visible');
	// 	} else {
	// 		emailErrorMessage.classList.remove('invalid-email-notice--visible');
	// 		dropDownMenu.classList.add('mc-dropdown-menu--open');
	// 		inputGroup.classList.add('input-group--hidden');
	// 		let emailCapture = document.getElementsByClassName('text-box')[0].value;
	// 		document.getElementsByClassName(
	// 			'email-value'
	// 		)[0].innerHTML = emailCapture;
	// 	}
	// };

	// clickBtnOp.addEventListener('click', () => {
	// 	// test
	// 	console.log(emailValue.value);
	// 	emailIsValid();
	// });

	// // click button to init dropdown close sequence
	// clickBtnCl.addEventListener('click', () => {
	// 	dropDownMenu.classList.remove('mc-dropdown-menu--open');
	// 	inputGroup.classList.remove('input-group--hidden');
	// });
};