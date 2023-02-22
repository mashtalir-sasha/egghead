$(function() {

	let toggle = document.querySelector('.nav__btn')
	let navMob = document.querySelector('.nav-mob')
	toggle.addEventListener('click', function(e) {
		this.classList.toggle('open')
		navMob.classList.toggle('open')
	})

	let clickNav = document.querySelectorAll('.nav-list__item .anchor')

	clickNav.forEach(el => {
		el.addEventListener("click", () => {
			toggle.classList.remove('open')
			navMob.classList.remove('open')
		})
	})

	const navHeight = $('.nav').innerHeight()
	$('.head').css({
		'margin-top': navHeight+'px',
	})

	$('.anchor').bind("click", function(e){
		const anchor = $(this)
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top-navHeight // отступ от меню
		}, 500)
	e.preventDefault()
	})

	$('.about-slider').slick({
		infinite: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		dots: true,
		responsive: [
			{
			breakpoint: 768,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			},
			{
			breakpoint: 575,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
		]
	})

	$('.other-slider').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		dots: true,
		responsive: [
			{
			breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
		]
	})

	$('.teachers-slider').slick({
		infinite: false,
		arrows: true,
		centerMode: true,
		centerPadding: '100px',
		dots: true,
	})

	$('.programs-menu').on('click', 'div:not(.active)', function() {
		$(this)
			.addClass('active').siblings().removeClass('active')
			.closest('.programs').find('.programs-tab').removeClass('active').eq($(this).index()).addClass('active')
		$('.program-price').matchHeight({
			byRow: true
		})
	})

	$('.program-price').matchHeight({
		byRow: true
	})

	$('.promo-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
		dots: true,
		adaptiveHeight: true
	})

	if ($(window).width() > 767) {
		$('.matchHeight').matchHeight({
			byRow: false,
			property: 'min-height'
		})
	}

	$('.faq-content').accordion({
		collapsible: true,
		heightStyle: "content"
	})

	$('.fancybox').fancybox({
		margin: 0,
		padding: 0,
		touch: false
	})

	$('form').submit(function() {
		let data = $(this).serialize()
		data += '&ajax-request=true'
		$.ajax({
			type: 'POST',
			url: '/mail.php',
			dataType: 'json',
			data: data,
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			success: (function() {
				$.fancybox.close()
				$.fancybox.open({src:'#thn'})
			})()
		})
		return false
	})

})
