export function welcomeSlider() {
    // Hero Slider
    function jumboHeroSlider() {
        // *************************************************
        // Hero Section Animations y video, hero section
        // *************************************************
        let container = document.getElementsByClassName('hero__images')[0],
        slides = document.getElementsByClassName('hero__image'),
		indicator = document.getElementsByClassName('hero__indicator-text'),
        current = 1,
        time = 5000;

        for (let i = 0; i < 3; i++) {
			let imgElement = document.getElementsByClassName('hero__image-element')[i];
			let id = imgElement.getAttribute('id');
			console.log(imgElement);
						
			fetch(`http://127.0.0.1:8000/api/v1/photos/${id}/welcome`).then((response) => {
				return response.json();
			})
			.then((data) => {
				console.log(data[0].name);
                imgElement.src = `images/${data[0].name}`
			});
		}
    
        //add animation class to slide
        slides[0].classList.add('hero__image--active');
      
		let startSliding = () => {
			
			setInterval(() => {			
				// console.log(`current: ${current}`)
				//remove from active from first and add it to the second slide so It can become the first side with the class activated
				slides[1].classList.add('hero__image--active')
				slides[0].classList.remove('hero__image--active')
				// clone the first slide and place on the last space.
				container.appendChild(slides[0].cloneNode([true]));
				// then remove the first slide after it has been cloned
				container.removeChild(slides[0]);
			
				// console.log(`slides: ${slides.length}`)
				if(current < slides.length){
					current++
				} else {
					current = 1
				}
			}, time);
		}
      	startSliding();
    
    }

    jumboHeroSlider();
}