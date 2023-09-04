'use strict';

const $body = document.body;
const $menuBtn = document.querySelector('#menubtn');
const $menuLbl = document.querySelector('.menulbl');


document.addEventListener('DOMContentLoaded', () => {
	$body.addEventListener('click', e => {
		const compare = e.target !== $menuBtn && e.target !== $menuLbl;
		compare && ($menuBtn.checked = false);
	});
});

// Scroll Reveal
const sr = ScrollReveal({
    distance: '30px',
    duration: 1800,
});

sr.reveal(`.service:nth-child(2)`, {
    origin: 'top',
    interval: 200,
		reset: true
});
sr.reveal(`.service:nth-child(1), .service:nth-child(3)`)

sr.reveal(`.header__col:first-child, .info-element`, {
    origin: 'left'
})
sr.reveal(`.image`, {
    origin: 'right'
});
sr.reveal(`.testimonials`);