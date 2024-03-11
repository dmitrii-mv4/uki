<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>{{ $title_page }} {{ $name_site }}</title>
    <meta name="description" content="{{ $description_site }}">
	<link rel="stylesheet" type="text/css" href="/assets/site/css/style.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://code.jquery.com/jquery-3.6.3.js"
		integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/assets/site/css/animate.css">
</head>

<body>
	<header class="header">
		<div class="header__logo">{{ $name_site }}</div>

		<div class="header__icon header__icon_toggle">
			<span></span>
		</div>
		<div class="header__menu menu">
			<ul>
				<li class="header__item">
					<a href="">Главная</a>
				</li>
				<li class="header__item">
					<a href="">Новости</a>
				</li>
				<li class="header__item">
					<a href="">Features</a>
				</li>
				<li class="header__item">
					<a href="">Pricing</a>
				</li>
				<li class="header__item">
					<a href="">Faq</a>
				</li>
				<li class="header__item">
					<a href="">Buy Now</a>
				</li>
			</ul>
		</div>


	</header>

    @yield('content')

    <footer class="footer section_padding">
		<div class="footer__menu">
			<h4>Меню</h4>
			<ul>
				<li class="footer__item">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
						<path fill="currentColor"
							d="M10.707 17.707L16.414 12l-5.707-5.707l-1.414 1.414L13.586 12l-4.293 4.293z" />
					</svg>
					<a href="">Главная</a>
				</li>
				<li class="footer__item">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
						<path fill="currentColor"
							d="M10.707 17.707L16.414 12l-5.707-5.707l-1.414 1.414L13.586 12l-4.293 4.293z" />
					</svg>
					<a href="">About</a>
				</li>
				<li class="footer__item">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
						<path fill="currentColor"
							d="M10.707 17.707L16.414 12l-5.707-5.707l-1.414 1.414L13.586 12l-4.293 4.293z" />
					</svg>
					<a href="">Features</a>
				</li>
				<li class="footer__item">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
						<path fill="currentColor"
							d="M10.707 17.707L16.414 12l-5.707-5.707l-1.414 1.414L13.586 12l-4.293 4.293z" />
					</svg>
					<a href="">Pricing</a>
				</li>
				<li class="footer__item">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
						<path fill="currentColor"
							d="M10.707 17.707L16.414 12l-5.707-5.707l-1.414 1.414L13.586 12l-4.293 4.293z" />
					</svg>
					<a href="">Faq</a>
				</li>
				<li class="footer__item">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
						<path fill="currentColor"
							d="M10.707 17.707L16.414 12l-5.707-5.707l-1.414 1.414L13.586 12l-4.293 4.293z" />
					</svg>
					<a href="">Buy Now</a>
				</li>
			</ul>
		</div>
		<div class="footer__social">
			<div class="footer__title">
				<h4>Наши соц. сети</h4>
			</div>
			<div class="footer__info">
				Подписывайтесь на нас и следите за нашими новостями.
			</div>
			<div class="footer__icons">
				<a href=""><svg class="vk" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 152 152" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="Layer 2"><g data-name="Color Icon"><g data-name="22.VK"><path fill="#49b5e7" d="M140 0H12A12 12 0 0 0 0 12v128a12 12 0 0 0 12 12h128a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12z" opacity="1" data-original="#4c75a3" class=""/><path fill="#ffffff" fill-rule="evenodd" d="M75 103.77h5.86a5 5 0 0 0 2.68-1.17 4.34 4.34 0 0 0 .76-2.6s-.12-7.87 3.54-9 8.22 7.6 13.13 11c3.7 2.55 6.52 2 6.52 2l13.11-.18s6.86-.43 3.61-5.82c-.27-.44-1.9-4-9.75-11.28-8.22-7.63-7.12-6.39 2.78-19.59 6-8 8.44-12.94 7.69-15s-5.15-1.48-5.15-1.48l-14.76.1a3.38 3.38 0 0 0-1.91.33 4.18 4.18 0 0 0-1.3 1.59 85.71 85.71 0 0 1-5.45 11.5c-6.58 11.16-9.2 11.75-10.28 11.06-2.5-1.61-1.87-6.49-1.87-10 0-10.82 1.64-15.32-3.2-16.49a24.94 24.94 0 0 0-6.89-.74c-5.26 0-9.72 0-12.24 1.26-1.68.82-3 2.65-2.19 2.76a6.61 6.61 0 0 1 4.36 2.19c1.51 2.05 1.46 6.68 1.46 6.68s.86 12.73-2 14.31c-2 1.08-4.72-1.13-10.58-11.26A94.08 94.08 0 0 1 47.63 53a4.38 4.38 0 0 0-1.22-1.64 4.33 4.33 0 0 0-.75-.44 5.65 5.65 0 0 0-2.4-.47l-13.14.09s-2.11 0-2.88 1-.06 2.5-.06 2.5 11 25.69 23.42 38.64C62 104.54 75 103.77 75 103.77z" opacity="1" data-original="#ffffff" class=""/></g></g></g></g></svg>
				</a>
				<a href=""><svg class="telegram" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 176 176" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="Layer 2"><rect width="176" height="176" fill="#49b5e7" rx="24" opacity="1" data-original="#1c8adb" class=""/><path fill="#ffffff" d="m135.94 45.5-1.82.66-98.78 35.59a3.31 3.31 0 0 0 .29 6.4l25.57 7 4.77 14 4.77 14a4.54 4.54 0 0 0 7.32 1.63l13.21-12.48 25.94 17.59c3.17 2.16 7.69.56 8.5-3l17.18-75.91c.84-3.76-3.12-6.85-6.95-5.48zm-12.61 16.85L78.7 98.83l-2.1 1.72a2.27 2.27 0 0 0-.84 1.48l-.47 3.88-1.29 10.9a.5.5 0 0 1-1 .08L69.37 106l-3.75-11.15a2.26 2.26 0 0 1 1.08-2.67l46.44-26.62 8.74-5c1.27-.74 2.57.87 1.45 1.79z" opacity="1" data-original="#ffffff" class=""/></g></g></svg>
				</a>
				</div>


		</div>
	</footer>
	<section class="copyright">
		© UKI 2024
	</section>

</body>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
</html>