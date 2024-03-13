export function showPageSlider() {
    // *************************************************
    // Show Page slider, located on the show page
    // *************************************************
	let currentImage = document.getElementsByClassName('listing__image-slider')[0];
	
	// show page change image to the left
	let nextBtn = document.getElementsByClassName('arrow-left')[0];

	// show page change image to the right
	let prevBtn = document.getElementsByClassName('arrow-right')[0];

	// show page small thumbnail image
	let thumbImage = document.getElementsByClassName('listing__thumb-image')[0];

	// show page small thumbnail image
	let thumbImageContainer = document.getElementsByClassName('listing__thumbnails')[0];
	
	let id = thumbImage.getAttribute('id');
	// console.dir(thumbImageContainer);
	console.log(thumbImageContainer.children);
	
	// ------------------------------------------------------------------
	
	// function y loops -------------------------------------------------
	// for (let i = 0; i < accordions.length; i++) {
	// 	accordions[i].addEventListener('click', function() {
	// 		this.classList.toggle('active');
	// 	})
	// }

	// function imageIndex(element, data) {
	// 	let counter = 0;
	// 	let arrLength = data.length;
	// 	currentImage.attributes.style.value = `background-image: url("http://localhost:8000/images/${data[counter].name}")`
		
	// 	switch (element) {
	// 		case nextBtn:
	// 				element.addEventListener('click', () => { 
	// 					if (counter != arrLength - 1) {
	// 						counter+=1;
	// 					}
	// 				})
	// 			break;
	// 			case prevBtn:
	// 				element.addEventListener('click', () => { 
	// 					console.log(counter);
	// 					if (counter != 0) {
	// 						counter-=1;
	// 					}
	// 				})
	// 			break;
	// 		default:
	// 			break;
	// 	}
	// }
	// ------------------------------------------------------------------

	// show image slider
	// fetch 

	fetch(`http://127.0.0.1:8000/api/v1/photos/${id}`).then((response) => {
		return response.json();
	})
	.then((data) => {
		let curImg = 0;
		let arrLength = data.length;
		
		currentImage.attributes.style.value = `background-image: url("http://localhost:8000/images/${data[curImg].name}")`
		
		nextBtn.addEventListener('click', () => {
			if (curImg != arrLength - 1) {
				curImg+=1;
			}
			currentImage.attributes.style.value = `background-image: url("http://localhost:8000/images/${data[curImg].name}")`
		});

		prevBtn.addEventListener('click', () => {
			if (curImg != 0) {
				curImg-=1;
			}
			currentImage.attributes.style.value = `background-image: url("http://localhost:8000/images/${data[curImg].name}")`
		});

		for (let i = 0; i < thumbImageContainer.children.length; i++) {
			thumbImageContainer.children[i].addEventListener('click', function() {
				console.log(i)
				curImg = i;
				currentImage.attributes.style.value = `background-image: url("http://localhost:8000/images/${data[curImg].name}")`
			});
		}
	});
}