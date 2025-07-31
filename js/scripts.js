/* Функция "Прилипало" */
onscroll = function prilipalo() {
	var prokrutka = window.pageYOffset;
	if ( window.screen.width >= 769 ) {
		if ( prokrutka > 100 ) {
			document.getElementById('top-menu-2').classList.add('fixed-top');
			document.getElementById('top-menu-2').style.position = 'fixed';
			document.getElementById('top-menu-2').style.top = 0;
			//document.getElementById('top-menu-2').style.height = '80px';
			//document.getElementById('top-menu-2').style.background = 'rgb(0,0,0,.7)';
			document.getElementById('top-menu-2').style.boxShadow = '5px 0px 10px 0px rgba(0,0,0,.25)';
			//document.getElementById('navbar-brand-img').style.height = '27px';
		} else {
			document.getElementById('top-menu-2').classList.remove('fixed-top');
			document.getElementById('top-menu-2').style.position = 'absolute';
			document.getElementById('top-menu-2').style.top = '100px';
			//document.getElementById('top-menu-2').style.height = '100px';
			//document.getElementById('top-menu-2').style.background = 'none';
			document.getElementById('top-menu-2').style.boxShadow = 'none';
			//document.getElementById('navbar-brand-img').style.height = '27px';
		}
	} else {
		document.getElementById('top-menu-2').style.position = '';
		document.getElementById('top-menu-2').style.top = 0;
		document.getElementById('top-menu-2').classList.add('fixed-top');
	}
}


/* Section with parallax */
$(window).scroll(function(e){
	parallaxScroll();
});

function parallaxScroll(){
	var scrolled = $(window).scrollTop();
	//var block = $('.header-parallax').offset().top; // Расстояние от начала экрана до блока, где будем начинать параллакс.
	/* Section with parallax */
	//$('.parallax').css('top',(-300-(scrolled*.35))+'px'); // 35 - скорость прокрутки
if ( window.screen.width < 750 || ( window.screen.width > 1000 & window.screen.width < 1400 ) ) {
		$('.parallax').css('bottom',(0+(scrolled*.35))+'px'); // 35 - скорость прокрутки
	} else {
		$('.parallax').css('bottom',(150+(scrolled*.35))+'px'); // 35 - скорость прокрутки
	}
	//$('.parallax-2').css('top',(-300-(scrolled*.5))+'px');
}
/* End section with parallax */


/* Убираем сообщение об успешной отправки */
function modalClose () {
	document.getElementById('background-msg').style.display = 'none';
	document.getElementById('message').style.display = 'none';
	document.getElementById('btn-close').style.display = 'none';
}