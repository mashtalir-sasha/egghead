<!DOCTYPE html>
<html lang="uk">

<head>
	<meta charset="utf-8">
	<title>Єдина UA Школа курсів англійскої за ірландською інноваційною програмою</title>
	<meta name="description" content="запрошумо вас на перше пробне безкоштовне заняття! Єдина UA Школа курсів англійскої за ірландською інноваційною програмою">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- <link rel="shortcut icon" href="img/favicon/16.png" type="image/x-icon">
	<link rel="icon" href="/img/favicon/16.png" type="image/x-icon"> 
	<link rel="apple-touch-icon" href="/img/favicon/16.png">
	<link rel="apple-touch-icon" sizes="32x32" href="/img/favicon/32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/72.png">  -->

	<meta name="theme-color" content="#24B6C3">

	<link rel="stylesheet" href="{{ mix('/css/main.css') }}">

	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

	<div class="content">

		<nav class="nav">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-6">
						<img src="{{ asset('images/logo.svg') }}" alt="logo" class="nav__logo">
					</div>
					<div class="col-lg-6 d-none d-lg-block">
						<ul class="nav-list">
							<li class="nav-list__item"><a href="#about" class="anchor">Про нас</a></li>
							<li class="nav-list__item"><a href="#teachers" class="anchor">Викладачі</a></li>
							<li class="nav-list__item"><a href="#programs" class="anchor">Програми</a></li>
							<li class="nav-list__item"><a href="#faq" class="anchor">FAQ</a></li>
							<li class="nav-list__item"><a href="#contacts" class="anchor">Контакти</a></li>
						</ul>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<a href="tel:+{{ preg_replace('~[^0-9]~','',$contact['phone']) }}" class="nav__phone">{{ $contact->phone }}</a>
					</div>
					<div class="col-6 d-block d-lg-none">
						<div class="nav__btn">
							<svg viewBox="0 0 100 100">
								<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
								<path class="line line2" d="M 20,50 H 80" />
								<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
							</svg>
						</div>
					</div>
				</div>
			</div>
			<div class="nav-mob d-lg-none">
				<ul class="nav-list">
					<li class="nav-list__item"><a href="#about" class="anchor">Про нас</a></li>
					<li class="nav-list__item"><a href="#teachers" class="anchor">Викладачі</a></li>
					<li class="nav-list__item"><a href="#programs" class="anchor">Програми</a></li>
					<li class="nav-list__item"><a href="#faq" class="anchor">FAQ</a></li>
					<li class="nav-list__item"><a href="#contacts" class="anchor">Контакти</a></li>
				</ul>
				<a href="tel:+380662682733" class="nav__phone">+38 066 268 27 33</a>
			</div>
		</nav>

		<header class="head">
			<div class="head__sircle head__sircle_item1"></div>
			<div class="head__sircle head__sircle_item2"></div>
			<div class="head__sircle head__sircle_item3"></div>
			<div class="head__sircle head__sircle_item4"></div>
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-5 order-2 oreder-lg-1">
						<h1 class="head__title">Єдина UA Школа курсів англійскої за ірландською інноваційною програмою.</h1>
					</div>
					<div class="col-lg-6 order-1 order-lg-2">
						<h2 class="head__subtitle">SCHOOL, THAT LEARN UNIVERSE BY USING ENGLISH</h2>
					</div>
				</div>
				<div class="row head__wrap">
					<div class="col-md-7 col-lg-6">
						<img src="{{ asset('images/head_image.svg') }}" alt="head" class="head__image d-block d-md-none">
						<h3 class="head__text">запрошумо вас на перше пробне <span>безкотовне заняття</span></h3>
						<a href="#form1" class="fancybox head__btn">Записатись</a>
					</div>
				</div>
				<img src="{{ asset('images/head_image.svg') }}" alt="head" class="head__image d-none d-md-block">
			</div>
		</header>
		
		<section id="about" class="about">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h3 class="about__title">Трішки<br>інформації<br>про нас</h3>
					</div>
					<div class="col-md-7">
						<span class="about__time">Since 2022</span>
						<div class="about__text">{!! $about->text !!}</div>
						<p class="about__note">{{ $about->note }}</p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<video class="about__video" controls>
							<source src="{{ asset($about->video) }}" type="video/mp4">
						</video>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="about-slider">
							@foreach($about->images as $item)
								<img src="{{ asset($item) }}" alt="slide" class="about-slider__slide">
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="other">
			<div class="container">
				<div class="row justify-content-between align-items-center other__wrap">
					<div class="col-lg-5 col-md-6">
						<h3 class="other__title">{{ $aboutOther->title1 }}</h3>
						<p class="other__text">{!! $aboutOther->text1 !!}</p>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="other-slider">
							@foreach($aboutOther->images as $item)
								<img src="{{ asset($item) }}" alt="slide" class="other-slider__slide">
							@endforeach
						</div>
					</div>
				</div>
				<div class="row justify-content-between align-items-center other__wrap">
				<div class="col-lg-5 col-md-6 order-2 order-md-1">
					<img src="{{ asset('images/club_image.svg') }}" alt="Speaking clubs" class="other__image">
				</div>
					<div class="col-lg-6 col-md-6 order-1 order-md-2">
						<h3 class="other__title">{{ $aboutOther->title2 }}</h3>
						<p class="other__text">{!! $aboutOther->text2 !!}</p>
					</div>
				</div>
			</div>
		</section>

		<section id="teachers" class="teachers">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="teachers__title"><span>Наші викладачі</span></h3>
						<div class="teachers-slider">
							@foreach($teachers as $item)
							<div class="teachers-slider__slide">
								<div class="teacher">
									<div class="teacher-photo">
										<img src="{{ asset($item->image) }}" alt="teacher">
									</div>
									<div class="teacher-info">
										<p class="teacher-info__name">{{ $item->name }}</p>
										@foreach( json_decode($item->list) as $list )
											<p class="teacher-info__text">{{ $list->item }}</p>
										@endforeach
										<p class="teacher-info__subtitle">Навчалася:</p>
										<ul class="teacher-info__list">
											@foreach( json_decode($item->study) as $study )
												<li>{{ $study->item }}</li>
											@endforeach
										</ul>
										@foreach( json_decode($item->note) as $note )
											<p class="teacher-info__last">{{ $note->item }}</p>
										@endforeach
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="programs" class="programs">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="programs__title"><span>Програми навчання</span></h3>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="programs-menu">
							<div class="programs-menu__item active">Офлайн</div>
							<div class="programs-menu__item">Онлайн</div>
						</div>
					</div>
				</div>
				<div class="programs-tab active">
					<div class="row">
						<div class="col-12">
							<h4 class="programs__subtitle">ГРУПОВІ</h4>
						</div>
						@foreach($offGroups as $item)
							<div class="col-lg-4 col-md-6">
								<div class="program">
									<div class="program-info">
										<p class="program-info__name">{{ $item->name }}</p>
										<p class="program-info__text"><b>Вікова категорія:</b><br>{{ $item->age }}</p>
										<p class="program-info__text"><b>Level:</b><br>{{ $item->level }}</p>
										<p class="program-info__text"><b>Тривалість курсу:</b><br>{{ $item->duration }}</p>
									</div>
									<div class="program-price">
										@foreach( json_decode($item->price) as $price )
											<div class="program-price__item">
												<p>{{ $price->title }}</p>
												<span>{{ $price->price }}</span>
											</div>
										@endforeach
									</div>
									<div class="program-btn">
										<a href="#off_group_detail{{ $item->id }}" class="fancybox program-btn__item program-btn__item_detail">Детальніше</a>
										<a href="#form2" class="fancybox program-btn__item program-btn__item_buy">Записатись</a>
									</div>
								</div>
							</div>
						@endforeach
						<div class="col-12">
							<h4 class="programs__subtitle programs__subtitle_individ">ІНДИВІДУАЛЬНІ</h4>
						</div>
						@foreach($offIndivids as $item)
							<div class="col-lg-4 col-md-6">
								<div class="program program_individ">
									<div class="program-info">
										<p class="program-info__name">{{ $item->name }}</p>
										<p class="program-info__text"><b>Вікова категорія:</b><br>{{ $item->age }}</p>
										<p class="program-info__text"><b>Level:</b><br>{{ $item->level }}</p>
										<p class="program-info__text"><b>Тривалість курсу:</b><br>{{ $item->duration }}</p>
									</div>
									<div class="program-price">
										@foreach( json_decode($item->price) as $price )
											<div class="program-price__item">
												<p>{{ $price->title }}</p>
												<span>{{ $price->price }}</span>
											</div>
										@endforeach
									</div>
									<div class="program-btn">
										<a href="#off_individ_detail{{ $item->id }}" class="fancybox program-btn__item program-btn__item_detail">Детальніше</a>
										<a href="#form2" class="fancybox program-btn__item program-btn__item_buy">Записатись</a>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>		
				<div class="programs-tab">
					<div class="row">
						<div class="col-12">
							<h4 class="programs__subtitle">ГРУПОВІ</h4>
						</div>
						@foreach($onGroups as $item)
							<div class="col-lg-4 col-md-6">
								<div class="program">
									<div class="program-info">
										<p class="program-info__name">{{ $item->name }}</p>
										<p class="program-info__text"><b>Вікова категорія:</b><br>{{ $item->age }}</p>
										<p class="program-info__text"><b>Level:</b><br>{{ $item->level }}</p>
										<p class="program-info__text"><b>Тривалість курсу:</b><br>{{ $item->duration }}</p>
									</div>
									<div class="program-price">
										@foreach( json_decode($item->price) as $price )
											<div class="program-price__item">
												<p>{{ $price->title }}</p>
												<span>{{ $price->price }}</span>
											</div>
										@endforeach
									</div>
									<div class="program-btn">
										<a href="#on_group_detail{{ $item->id }}" class="fancybox program-btn__item program-btn__item_detail">Детальніше</a>
										<a href="#form2" class="fancybox program-btn__item program-btn__item_buy">Записатись</a>
									</div>
								</div>
							</div>
						@endforeach
						<div class="col-12">
							<h4 class="programs__subtitle programs__subtitle_individ">ІНДИВІДУАЛЬНІ</h4>
						</div>
						@foreach($onIndivids as $item)
							<div class="col-lg-4 col-md-6">
								<div class="program program_individ">
									<div class="program-info">
										<p class="program-info__name">{{ $item->name }}</p>
										<p class="program-info__text"><b>Вікова категорія:</b><br>{{ $item->age }}</p>
										<p class="program-info__text"><b>Level:</b><br>{{ $item->level }}</p>
										<p class="program-info__text"><b>Тривалість курсу:</b><br>{{ $item->duration }}</p>
									</div>
									<div class="program-price">
										@foreach( json_decode($item->price) as $price )
											<div class="program-price__item">
												<p>{{ $price->title }}</p>
												<span>{{ $price->price }}</span>
											</div>
										@endforeach
									</div>
									<div class="program-btn">
										<a href="#on_individ_detail{{ $item->id }}" class="fancybox program-btn__item program-btn__item_detail">Детальніше</a>
										<a href="#form2" class="fancybox program-btn__item program-btn__item_buy">Записатись</a>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>

		<section class="promo">
			<div class="promo-slider">
				@foreach($banners as $item)
					<div class="promo-slider__slide">
						<div class="container">
							<div class="row align-items-end">
								<div class="col-md-6">
									<div class="promo__wrap">
										<h3 class="promo__title">{!! $item->title !!}</h3>
										<p class="promo__text">{!! $item->text !!}</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="promo__container matchHeight">
										<img src="{{ asset($item->image) }}" alt="promo image" class="promo__image">
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</section>

		<section class="partners">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="partners__title"><span>Партнери</span></h3>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-auto">
						<div class="partners-item">
							<img src="{{ asset('images/partners/1.png') }}" alt="" class="partners-item__image">
						</div>
					</div>
					<div class="col-auto">
						<div class="partners-item">
							<img src="{{ asset('images/partners/2.png') }}" alt="" class="partners-item__image">
						</div>
					</div>
					<div class="col-auto">
						<div class="partners-item">
							<img src="{{ asset('images/partners/3.png') }}" alt="" class="partners-item__image">
						</div>
					</div>
					<div class="col-auto">
						<div class="partners-item">
							<img src="{{ asset('images/partners/4.png') }}" alt="" class="partners-item__image">
						</div>
					</div>
					<div class="col-12">
						<div class="partners__line"></div>
					</div>
				</div>
			</div>
		</section>

		<section id="faq" class="faq">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class="faq__title"><span>FAQ</span></h3>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="faq-content">
							@foreach($faq as $item)
								<div class="faq-content__title">
									<i>{{ str_pad($loop->iteration, 2, 0, STR_PAD_LEFT) }}</i>
									<p>{{ $item->question }}</p>
								</div>
								<div class="faq-content__answer">{!! $item->answer !!}</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer id="contacts" class="foot">
			<div class="foot__sircle foot__sircle_item1"></div>
			<div class="foot__sircle foot__sircle_item2"></div>
			<div class="foot__sircle foot__sircle_item3"></div>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 order-2 order-md-1">
						<div class="foot__map">
						<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1SCDODMjk7aTIlGkP__X-wX7WcR7yRGE&ehbc=2E312F" width="640" height="480"></iframe>
						</div>
					</div>
					<div class="col-md-6 order-1 order-md-2">
						<h3 class="foot__title"><span>Контакти</span></h3>
						<h4 class="foot__subtitle">Адреса:</h4>
						<p class="foot__addr">{!! $contact->addr !!}</p>
						<a href="mailto:{{ $contact->email }}" class="foot__link foot__link_email">{{ $contact->email }}</a>
						<a href="tel::+{{ preg_replace('~[^0-9]~','',$contact['phone']) }}" class="foot__link foot__link_phone">{{ $contact->phone }}</a>
						<div class="foot-soc">
							<p class="foot-soc__title">Social media</p>
							<a href="{{ $contact->link }}" class="foot-soc__link" target="_blank">Instagram</a>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<div class="d-none">
		<div id="form1" class="modal">
			<form class="modal-form form_check">
				<input type="hidden" name="title" value="Записатись на перше безкоштовне пробне заняття">
				<div class="rline">
					<input type="text" name="name" class="modal-form__input rfield" placeholder="Ваше ім'я">
				</div>
				<div class="rline">
					<input type="text" name="phone" class="modal-form__input rfield" placeholder="Ваш телефон">
				</div>
				<button type="submit" class="modal-form__btn btnsubmit">Записатись</button>
			</form>
		</div>

		<div id="form2" class="modal">
			<form class="modal-form form_check">
				<input type="hidden" name="title" value="Записатись на заняття">
				<div class="rline">
					<input type="text" name="name" class="modal-form__input rfield" placeholder="Ваше ім'я">
				</div>
				<div class="rline">
					<input type="text" name="phone" class="modal-form__input rfield" placeholder="Ваш телефон">
				</div>
				<button type="submit" class="modal-form__btn btnsubmit">Записатись</button>
			</form>
		</div>

		<div id="thn" class="thn">
			<h3>Дякуємо!</h3>
			<p>Ми з Вами зв'яжемось найближчим часом!</p>
		</div>

		@foreach($offGroups as $item)
			<div id="off_group_detail{{ $item->id }}" class="modal">{!! $item->detail !!}</div>
		@endforeach

		@foreach($offIndivids as $item)
			<div id="off_individ_detail{{ $item->id }}" class="modal">{!! $item->detail !!}</div>
		@endforeach

		@foreach($onGroups as $item)
			<div id="on_group_detail{{ $item->id }}" class="modal">{!! $item->detail !!}</div>
		@endforeach

		@foreach($onIndivids as $item)
			<div id="on_individ_detail{{ $item->id }}" class="modal">{!! $item->detail !!}</div>
		@endforeach
	</div>

	<script src="{{ mix('/js/all.js') }}"></script>
	<script src="{{ mix('/js/scripts.js') }}"></script>

</body>
</html>