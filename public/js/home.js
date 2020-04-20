const vid1 = document.querySelector('#firstvideo');
const play1 = document.querySelector('#play');
const sliderprod = document.querySelector('#slideprod');
const sliderproddiv = document.querySelectorAll('#slideprod div');
const nextimg = document.querySelector('#nextimg');
const previmg = document.querySelector('#previmg');
const currentprod = document.querySelector('#currentprod');
const maxprod = document.querySelector('#maxprod');
const Qteproduct = document.querySelector('#Qteproduct input');
const vid2 = document.querySelector('#firstvideo2');
const play2 = document.querySelector('#play2');
const brandpuma = document.querySelector('#iconbrands img:nth-of-type(1)');
const brandadidas = document.querySelector('#iconbrands img:nth-of-type(2)');
const brandReebok = document.querySelector('#iconbrands img:nth-of-type(3)');
const brandnike = document.querySelector('#iconbrands img:nth-of-type(4)');
let brand_selected = 'puma';
const carddiv = document.getElementById('carddiv');
const card = document.getElementById('card');
const panier = document.getElementById('panier');
const closecard = document.getElementById('close');
const removeccard = document.querySelectorAll('.removeccard');
const lang = document.querySelector('#lang');
const langdrop = document.querySelector('#lang .dropme');
const devis = document.querySelector('#devis');
const devisdrop = document.querySelector('#devis .dropme');
const numberCard = document.getElementById('Numpanier');
const heart = document.getElementById('heartIcon');
/*
lang.addEventListener("mouseover", () => {
  langdrop.style.display = "block";
});
lang.addEventListener("mouseout", () => {
  langdrop.style.display = "none";
});
devis.addEventListener("mouseover", () => {
  devisdrop.style.display = "flex";
});
devis.addEventListener("mouseout", () => {
  devisdrop.style.display = "none";
});*/

if (vid1) {
	vid1.parentElement.addEventListener('click', () => {
		if (vid1.paused) {
			vid1.play();
			play1.style.display = 'none';
			vid2.pause();
			play2.style.display = 'block';
		} else {
			vid1.pause();
			play1.style.display = 'block';
			vid2.pause();
			play2.style.display = 'block';
		}
	});
}
if (vid2) {
	vid2.addEventListener('click', () => {
		if (vid2.paused) {
			vid2.play();
			play2.style.display = 'none';
			vid1.pause();
			play1.style.display = 'block';
		} else if (vid2.played) {
			vid2.pause();
			play2.style.display = 'block';
			vid1.pause();
			play1.style.display = 'block';
		}
	});
}
//  FIXME
if (panier) {
	panier.addEventListener('click', () => {
		carddiv.style.display = 'block';
		numberCard.style.display = 'none';
	});
}
if (closecard) {
	closecard.addEventListener('click', () => {
		carddiv.style.display = 'none';
		numberCard.style.display = 'block';
	});
}
carddiv.style.height = window.innerHeight + 'px';
removeccard.forEach((element) => {
	element.addEventListener('click', () => {
		$(element.parentElement).remove();
	});
});
$(carddiv).on('click', function (e) {
	if (e.target === carddiv) {
		carddiv.style.display = 'none';
	}
});

/*play1.addEventListener("click", () => {
  vid1.play();
  $(play1).hide();
});*/

// TODO
/*
sliderprod.onchange = () => {
  maxprod.textContent = sliderproddiv.length;
};*/
if (maxprod) {
	maxprod.textContent = sliderproddiv.length;

	let imgs = parseInt(maxprod.textContent) * 100;
	sliderproddiv.forEach((element) => {
		//element.style.width = sliderprod.parentElement.style.width;
		element.style.width = '50vw';
		if (window.matchMedia('(max-width: 817px)').matches) {
			element.style.width = '100%';
		}
	});
	sliderprod.style.width = imgs + '%'; //setting size 600% of slider
	nextimg.addEventListener('click', () => {
		if (parseInt(currentprod.textContent) != maxprod.textContent) {
			$(sliderprod).animate({
				left: parseInt(currentprod.textContent) * -100 + '%'
			});
			currentprod.textContent = parseInt(currentprod.textContent) + 1;
		}
	});
	previmg.addEventListener('click', () => {
		if (currentprod.textContent != 1) {
			currentprod.textContent = parseInt(currentprod.textContent) - 1;
			$(sliderprod).animate({
				left: parseInt(currentprod.textContent) * -100 + 100 + '%'
			});
		}
	});
	Qteproduct.oninput = () => {
		let chars = '0123456789';
		if (!chars.includes(Qteproduct.value[Qteproduct.value.length - 1])) {
			Qteproduct.value = Qteproduct.value.substring(0, Qteproduct.value.length - 1);
		}
		if (Qteproduct.value == '0') Qteproduct.value = 1;
	};
}
// TODO
// ANCHOR //////////////////////////////////////////////// brands events  start/////////////////////////////////////////////////////////////////
if (brandpuma) {
	brandpuma.addEventListener('mouseover', () => {
		brandpuma.setAttribute('src', 'images/Puma_white.png');
	});
	brandpuma.addEventListener('click', () => {
		brandpuma.setAttribute('src', 'images/Puma_white.png');
		brandadidas.setAttribute('src', 'images/adidas-gris.png');
		brandReebok.setAttribute('src', 'images/Reebok-gris.png');
		brandnike.setAttribute('src', 'images/Nike-gris.png');
		brand_selected = 'puma';
	});

	brandpuma.addEventListener('mouseout', () => {
		if (brand_selected !== 'puma') brandpuma.setAttribute('src', 'images/Puma_gris.png');
	});

	brandadidas.addEventListener('mouseover', () => {
		brandadidas.setAttribute('src', 'images/adidas-white.png');
	});
	brandadidas.addEventListener('click', () => {
		brandadidas.setAttribute('src', 'images/adidas-white.png');
		brandpuma.setAttribute('src', 'images/Puma_gris.png');
		brandReebok.setAttribute('src', 'images/Reebok-gris.png');
		brandnike.setAttribute('src', 'images/Nike-gris.png');
		brand_selected = 'adidas';
	});

	brandadidas.addEventListener('mouseout', () => {
		if (brand_selected !== 'adidas') brandadidas.setAttribute('src', 'images/adidas-gris.png');
	});

	brandReebok.addEventListener('mouseover', () => {
		brandReebok.setAttribute('src', 'images/Reebok-white.png');
	});
	brandReebok.addEventListener('click', () => {
		brandReebok.setAttribute('src', 'images/Reebok-white.png');
		brandadidas.setAttribute('src', 'images/adidas-gris.png');
		brandpuma.setAttribute('src', 'images/Puma_gris.png');
		brandnike.setAttribute('src', 'images/Nike-gris.png');
		brand_selected = 'reebok';
	});

	brandReebok.addEventListener('mouseout', () => {
		if (brand_selected !== 'reebok') brandReebok.setAttribute('src', 'images/Reebok-gris.png');
	});

	brandnike.addEventListener('mouseover', () => {
		brandnike.setAttribute('src', 'images/Nike-white.png');
	});

	brandnike.addEventListener('click', () => {
		brandnike.setAttribute('src', 'images/Nike-white.png');
		brandadidas.setAttribute('src', 'images/adidas-gris.png');
		brandpuma.setAttribute('src', 'images/Puma_gris.png');
		brandReebok.setAttribute('src', 'images/Reebok-gris.png');
		brand_selected = 'nike';
	});

	brandnike.addEventListener('mouseout', () => {
		if (brand_selected !== 'nike') brandnike.setAttribute('src', 'images/Nike-gris.png');
	});
}
// ANCHOR //////////////////////////////////////////////// brands events  end/////////////////////////////////////////////////////////////////
////////////////////////////////////////////////// trends events  start/////////////////////////////////////////////////////////////////
$(document).ready(function () {
	$('.produitslider').slick({});
	if (window.matchMedia('(min-width: 1160px)').matches) {
		$('.produitslider').slick('slickSetOption', 'slidesToShow', 3);
	} else {
		if (window.matchMedia('(min-width: 769px)').matches) {
			$('.produitslider').slick('slickSetOption', 'slidesToShow', 2);
		} else {
			$('.produitslider').slick('slickSetOption', 'slidesToShow', 1);
		}
	}
	window.onresize = () => {
		if (window.matchMedia('(min-width: 1160px)').matches) {
			$('.produitslider').slick('slickSetOption', 'slidesToShow', 3);
		} else {
			if (window.matchMedia('(min-width: 769px)').matches) {
				$('.produitslider').slick('slickSetOption', 'slidesToShow', 2);
			} else {
				$('.produitslider').slick('slickSetOption', 'slidesToShow', 1);
			}
		}
		//  carddiv.style.height = window.innerHeight + "px"; //this is for the card to get the 100% height
		//    searchdiv.style.height = window.innerHeight + "px"; //this is for the card to get the 100% height
	};
	$('.produitslider button:nth-of-type(1)').text('←');
	$('.produitslider button:nth-of-type(2)').text('→');
});

////////////////////////////////////////////////// trends events  end/////////////////////////////////////////////////////////////////

////////////////////////////////  Infoss radios

const radiodiv = document.querySelectorAll('.shippingways .shipping label div');
if (radiodiv != null) {
	for (let i = 0; i < radiodiv.length; i++) {
		radiodiv[i].style.borderWidth = '1.5px';
		radiodiv[i].addEventListener('click', () => {
			if (radiodiv[i].style.borderWidth == '1.5px') {
				radiodiv[i].style.borderWidth = '8px';
				let i1;
				let i2;
				if (i == 0) {
					i1 = 1;
					i2 = 2;
				} else {
					if (i == 1) {
						i1 = 0;
						i2 = 2;
					} else {
						i1 = 0;
						i2 = 1;
					}
				}
				radiodiv[i1].style.borderWidth = '1.5px';
				radiodiv[i2].style.borderWidth = '1.5px';
			}
		});
	}
}

const radiodivpayment = document.querySelectorAll('.paytype label div');
if (radiodivpayment != null) {
	for (let i = 0; i < radiodivpayment.length; i++) {
		radiodivpayment[i].style.borderWidth = '1.5px';
		radiodivpayment[i].addEventListener('click', () => {
			if (radiodivpayment[i].style.borderWidth == '1.5px') {
				border1 = 1.5;
				radiodivpayment[i].style.borderWidth = '8px';
				let i1;
				if (i == 0) {
					i1 = 1;
				} else {
					i1 = 0;
				}
				radiodivpayment[i1].style.borderWidth = '1.5px';
			}
		});
	}
}
/////////////////////////   END Infos radios
//////// CARD  body JS
const removeccardbody = document.querySelectorAll('.closecardprod');
if (removeccardbody != null) {
	removeccardbody.forEach((element) => {
		element.addEventListener('click', () => {
			$(element.parentElement).remove();
		});
	});
}
/////// CARD body ENd
const bigmenu = document.getElementsByClassName('bigmenu')[0];
const nav2 = document.getElementsByClassName('exo');

const body = document.getElementsByTagName('body');

for (let i = 1; i < 6; i++) {
	nav2[i].addEventListener('mouseover', () => {
		console.log('sff');
		bigmenu.style.display = 'flex';
		body.style.backgroundColor = 'red';
	});
}

for (let i = 1; i < 6; i++) {
	nav2[i].addEventListener('mouseover', () => {
		console.log('sff');
		bigmenu.style.display = 'flex';
		body.style.backgroundColor = 'red';
	});
}
////////////////

window.onscroll = () => {
	if (window.pageYOffset > sticky + 30) {
		navs.style.position = 'fixed';
		navs.style.width = '100%';
		navs.style.zIndex = '100000';
	} else {
		navs.style.position = 'relative';
	}
};
////////////////

// Initial state
var scrollPos = 0;
// adding scroll event
window.addEventListener('scroll', function () {
	// detects new state and compares it with the new one
	if (document.body.getBoundingClientRect().top > scrollPos)
		document.getElementById('bigNavBar').classList.add('sticky');
	else document.getElementById('bigNavBar').classList.remove('sticky');
	// saves the new position for iteration.
	scrollPos = document.body.getBoundingClientRect().top;
});
