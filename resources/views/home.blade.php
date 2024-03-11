@extends('layouts.main')

@section('content')
<section class="main">
		<div class="main__info">
			{{-- <div class="main__before">Label for you</div> --}}
			<h1 class="main__title">Разрабатываем быстрые и эффективные сайты</h1>
			<div class="main__desc">Мы создали собственную CMS систему на фреймворке Laravel.
			</div>
			<button class="main__btn btn btn_purple ">Заказать</button>
		</div>
		<div class="main__img">
			<img src="/assets/site/img/main.jpg" alt="">
		</div>
	</section>
	<!-- !Найти и добавить иконки -->

	<section class="benefit section_padding">
		<div class="benefit__title">
			<h2>Преимущества сайтов на UKI</h2>
		</div>
		<div class="benefit__wrp">
			<div class="benefit__card">
				<div class="benefit__icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 682.667 682.667" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 512h512V0H0Z" fill="#fff" opacity="1" data-original="#000000"/></clipPath></defs><g clip-path="url(#a)" transform="matrix(1.33333 0 0 -1.33333 0 682.667)"><path d="M0 0c-12.497-12.497-32.758-12.497-45.255 0s-12.497 32.758 0 45.255 32.758 12.497 45.255 0S12.497 12.497 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(444.576 415.32)" fill="#fff" stroke="#0365c0" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""/><path d="M0 0c-12.497-12.497-32.758-12.497-45.255 0s-12.497 32.758 0 45.255 32.758 12.497 45.255 0S12.497 12.497 0 0Z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(112.68 51.424)" fill="#fff" stroke="#0365c0" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""/><path d="M0 0a247.164 247.164 0 0 1 48.513-4.783c135.862 0 246 110.138 246 246 0 59.309-20.992 113.713-55.947 156.196" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(207.487 14.783)" fill="#fff" stroke="#0365c0" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""/><path d="M0 0a247.138 247.138 0 0 1-48.98 4.877c-135.862 0-246-110.138-246-246 0-59.309 20.992-113.713 55.947-156.196" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(304.98 497.123)" fill="#fff" stroke="#0365c0" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""/><path d="M0 0c-40.112 0-72.63 32.517-72.63 72.63 0 40.112 32.518 72.629 72.63 72.629 40.112 0 72.63-32.517 72.63-72.629C72.63 32.517 40.112 0 0 0Zm144.835 103.983a147.303 147.303 0 0 1-20.32 49.038l19.16 19.161-44.229 44.197-19.145-19.145a147.276 147.276 0 0 1-49.037 20.319v27.077h-62.528v-27.077a147.276 147.276 0 0 1-49.037-20.319l-19.145 19.145-44.229-44.197 19.16-19.161a147.303 147.303 0 0 1-20.32-49.038h-27.148l-.034-62.527h27.181a147.317 147.317 0 0 1 20.32-49.039l-19.233-19.233 44.197-44.23 19.249 19.25a147.298 147.298 0 0 1 49.039-20.321V-99.37h62.528v27.253a147.298 147.298 0 0 1 49.039 20.321l19.249-19.25 44.197 44.23-19.233 19.233a147.317 147.317 0 0 1 20.32 49.039h27.181v62.527z" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(256 183.37)" fill="#fff" stroke="#0365c0" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""/><path d="M0 0v0" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(348.078 484.185)" fill="#fff" stroke="#0365c0" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""/><path d="M0 0v0" style="stroke-width:20;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" transform="translate(164.358 27.639)" fill="#fff" stroke="#0365c0" stroke-width="20" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" opacity="1" class=""/></g></g></svg>
				</div>
				<h3>Техническая поддержка</h3>
				<div class="benefit__desc">Все сайты размещены на наших серверах и хостингах. И вам не нужно беспокоиться об технических неполадках.</div>
			</div>
			<div class="benefit__card">
				<div class="benefit__icon"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 60 60" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M38 16c-.675 0-1.341.035-2 .095V3a3 3 0 0 0-3-3H12.83a2.985 2.985 0 0 0-2.13.883L.883 10.7A2.985 2.985 0 0 0 0 12.83V45a3 3 0 0 0 3 3h15.414A22 22 0 1 0 38 16ZM11 3.414V9a2 2 0 0 1-2 2H3.414ZM3 46a1 1 0 0 1-1-1V13h7a4 4 0 0 0 4-4V2h20a1 1 0 0 1 1 1v13.371A21.981 21.981 0 0 0 17.512 46Zm35 12a20 20 0 1 1 20-20 20.023 20.023 0 0 1-20 20Z" fill="#0365c0" opacity="1" data-original="#000000" class=""/><path d="M40.084 22.13a16.023 16.023 0 0 0-9.407 1.645 3.028 3.028 0 0 0-.84 4.666 3.049 3.049 0 0 0 3.645.643A9.913 9.913 0 0 1 38 28a10.015 10.015 0 0 1 9.968 9.192 2.815 2.815 0 0 0-1.1 4.452l2.1 2.433a2.684 2.684 0 0 0 4.049 0l2.1-2.431a2.815 2.815 0 0 0-1.149-4.473A16.033 16.033 0 0 0 40.084 22.13ZM53 39a.784.784 0 0 1 .735.472.8.8 0 0 1-.122.864l-2.1 2.429a.686.686 0 0 1-1.029 0l-2.1-2.43a.8.8 0 0 1-.122-.865A.784.784 0 0 1 49 39a1 1 0 0 0 1-1 12.013 12.013 0 0 0-12-12 11.883 11.883 0 0 0-5.421 1.3 1.037 1.037 0 0 1-1.255-.2.989.989 0 0 1-.224-.848.978.978 0 0 1 .5-.706A14.009 14.009 0 0 1 52 38a1 1 0 0 0 1 1ZM42.518 46.916A9.913 9.913 0 0 1 38 48a10.015 10.015 0 0 1-9.968-9.192 2.815 2.815 0 0 0 1.095-4.452l-2.1-2.434A2.683 2.683 0 0 0 25 31a2.684 2.684 0 0 0-2.025.923l-2.1 2.431a2.815 2.815 0 0 0 1.149 4.473A16.033 16.033 0 0 0 35.916 53.87a16.582 16.582 0 0 0 2.068.13 15.927 15.927 0 0 0 7.339-1.775 3.028 3.028 0 0 0 .84-4.666 3.045 3.045 0 0 0-3.645-.643ZM44.4 50.45A14.009 14.009 0 0 1 24 38a1 1 0 0 0-1-1 .784.784 0 0 1-.735-.472.8.8 0 0 1 .122-.864l2.1-2.429a.689.689 0 0 1 1.03 0l2.1 2.431a.8.8 0 0 1 .122.865A.784.784 0 0 1 27 37a1 1 0 0 0-1 1 12.013 12.013 0 0 0 12 12 11.883 11.883 0 0 0 5.421-1.3 1.034 1.034 0 0 1 1.255.2.989.989 0 0 1 .224.848.978.978 0 0 1-.5.702ZM7 22h13a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM16 16h13a1 1 0 0 0 0-2H16a1 1 0 0 0 0 2ZM7 28h9a1 1 0 0 0 0-2H7a1 1 0 0 0 0 2ZM14 32H7a1 1 0 0 0 0 2h7a1 1 0 0 0 0-2ZM13 38H7a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2Z" fill="#0365c0" opacity="1" data-original="#000000" class=""/></g></svg>
				</div>
				<h3>Обновления</h3>
				<div class="benefit__desc">Мы активно развиваем нашу платформу. И если Вам не хватает функционала, то напишите нам, мы его разработаем.</div>
			</div>
			<div class="benefit__card">
				<div class="benefit__icon"></div>
				<h3>Highly Secure</h3>
				<div class="benefit__desc">Lorem ipsum dolor sit amet, ei pro unum forensibus. His quis doming eu. Has
					no tollit detracto.</div>
			</div>
		</div>
	</section>
	<section class="tariff section_padding">
		<div class="tariff__title">
			<h2>Наши тарифы</h2>
		</div>
		<div class="tariff__wrp">
			<div class="tariff__card">
				<div class="tariff__name">
					<h3>Простой</h3>
				</div>
				<div class="tariff__price">5 000 руб.</div>
				<div class="tariff__desc">
					<p>Обновления платформы</p>
					<p>Тех. поддержка на сбои до 5 часов</p>
					<p>Индивидуальный менеджер</p>
				</div>
				<button class="tariff__btn btn btn_blue">
					Buy now
				</button>
			</div>

			<div class="tariff__card">
				<div class="tariff__name">
					<h3>Стандартный</h3>
				</div>
				<div class="tariff__price" style="color: #46da60;">10 000 руб.</div>
				<div class="tariff__desc">
					<p>Обновление платформы</p>
					<p>Обновление шаблона</p>
					<p>Тех. поддержка реагирование до 2х часов</p>
					<p>Индивидуальный менеджер</p>
					<p>Приоритетные предложения по доработке</p>
				</div>
				<button class="tariff__btn btn btn__green">
					Buy now
				</button>
			</div>

			<div class="tariff__card">
				<div class="tariff__name">
					<h3>Премиум</h3>
				</div>
				<div class="tariff__price">30 000 руб.</div>
				<div class="tariff__desc">
					<p>Обновление платформы</p>
					<p>Обновление шаблона</p>
					<p>Приоритетная тех. поддержка до 1 часа</p>
					<p>Индивидуальный менеджер</p>
					<p>Все модули входят в тариф</p>
					<p>Обсуждение индивидуальных условий</p>
				</div>
				<button class="tariff__btn btn btn_blue">
					Buy now
				</button>
			</div>
		</div>
	</section>

	<section class="feedback section_padding">
		<h2>Оставьте заявку</h2>
		<div class="feedback__wrp">

			<form method="POST" action="{{ route('home.feedback.store') }}" class="feedback__form">
				@csrf
				<input type="hidden" name="feedback_forms_id" value="1">
				<input type="hidden" name="status" value="0">
				<input type="hidden" name="surname" value="-">
				<input type="text" name="name" placeholder="Имя*">
				<input type="email" name="email" placeholder="E-mail*">
				<input type="text" name="phone" placeholder="+7(999)999-99-99*">
				<textarea name="content" id="" cols="30" rows="10"></textarea>
				<div class="feedback__btn">
					<button type="submit" class="btn__animation">ОТПРАВИТЬ ЗАПРОС</button>
				</div>
		</div>


		</form>
	</section>
@endsection
