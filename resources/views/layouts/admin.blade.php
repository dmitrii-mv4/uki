<!doctype html>
<html class="fixed header-dark">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">

		<title>{{ $title_page }} :: UKI - Панель управления сайта</title>
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/assets/admin/porto/css/custom.css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/assets/admin/porto/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="/assets/admin/porto/vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/morris/morris.css" />
		<link rel="stylesheet" href="/assets/admin/porto/vendor/elusive-icons/css/elusive-icons.css">
		<link rel="stylesheet" href="/assets/admin/porto/vendor/simple-line-icons/css/simple-line-icons.css">
		<link rel="stylesheet" href="/assets/admin/porto/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/assets/admin/porto/css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="/assets/admin/porto/css/skins/default.css" />

		<!-- Froala 4.1.4 Style -->
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/froala_editor.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/froala_style.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/code_view.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/draggable.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/colors.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/emoticons.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/image_manager.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/image.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/line_breaker.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/table.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/char_counter.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/video.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/fullscreen.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/file.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/quick_insert.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/help.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/third_party/spell_checker.css">
		<link rel="stylesheet" href="/assets/tools/froala_editor_4.1.4/css/plugins/special_characters.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.css">

		<!-- Head Libs -->
		<script src="/assets/admin/porto/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="custom-header header">
				<div class="logo-container">
					<a href="{{ route('admin.index') }}" class="logo">
						{{-- <img src="/assets/admin/porto/img/logo.png" width="75" height="35" alt="Porto Admin" /> --}}
						<h1 style="margin: 0px 15px 0px 0px">UKI</h1>
					</a>

					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>

				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					{{-- <div id="userbox" class="userbox">
						<figure class="profile-picture">
							<img src="/assets/admin/porto/img/rate/premium.png" alt="Joseph Doe" class="rounded-circle" data-lock-picture="/assets/admin/porto/img/no_avatar.svg">
						</figure>
						<div class="profile-info" data-lock-name="admin" data-lock-email="dmitrii_mv4@mail.ru">
							<span class="name">Тариф: <strong style="color: gold;">Премиум</strong></span>
							<span class="role">Дней осталось: <strong>100</strong></span>
						</div>
					</div> --}}

					{{-- <form action="pages-search-results.html" class="search nav-form">
						<div class="input-group">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
						</div>
					</form> --}}

					{{-- <span class="separator"></span> --}}

					{{-- <ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
								<i class="bx bx-list-ol"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="float-end badge badge-default">3</span>
									Tasks
								</div>

								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-1">
												<span class="message float-start">Generating Sales Report</span>
												<span class="message float-end text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-1">
												<span class="message float-start">Importing Contacts</span>
												<span class="message float-end text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-1">
												<span class="message float-start">Uploading something big</span>
												<span class="message float-end text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-1">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
								<i class="bx bx-envelope"></i>
								<span class="badge">4</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-end badge badge-default">230</span>
									Messages
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Doe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-user.jpg" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-end">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
								<i class="bx bx-bell"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-end badge badge-default">3</span>
									Alerts
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-down bg-danger text-light"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="bx bx-lock bg-warning text-light"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-signal bg-success text-light"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2021</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-end">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul> --}}

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-bs-toggle="dropdown">
							<figure class="profile-picture">
								<img src="/assets/admin/porto/img/no_avatar.svg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="/assets/admin/porto/img/no_avatar.svg" />
							</figure>
							<div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
								<span class="name">{{ Auth::user()->name }}</span>
								<span class="role">Администратор</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="{{ route('admin.users.edit', Auth::user()->id) }}"><i class="bx bx-user-circle"></i> Мой профиль</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="{{ route('auth.logout') }}"><i class="bx bx-power-off"></i> Выйти</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Меню
				        </div>
				        <div class="castom-menu sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>

				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">

				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="{{ route('admin.index') }}">
				                            <i class="bx bx-home-alt"  aria-hidden="true"></i>
				                            <span>Панель приборов</span>
				                        </a>                        
				                    </li>

                                    <li>
				                        <a class="nav-link" href="/" target="_blank">
											<i class="icons icon-globe" aria-hidden="true"></i>
				                            <span>Перейти на сайт</span>
				                        </a>                        
				                    </li>

									<div class="sidebar-header">
										<div class="sidebar-title">
											Модули
										</div>
									</div>

                                    <li>
				                        <a class="nav-link" href="{{ route('admin.users.index') }}">
											<i class="icons icon-people" aria-hidden="true"></i>
				                            <span>Пользователи</span>
				                        </a>                        
				                    </li>

                                    <li>
				                        <a class="nav-link" href="{{ route('admin.pages.index') }}">
				                            <i class="bx bx-file" aria-hidden="true"></i>
				                            <span>Страницы сайта</span>
				                        </a>                        
				                    </li>

									<li>
				                        <a class="nav-link" href="{{ route('admin.feedback.index') }}">
											<i class="icons icon-bubbles" aria-hidden="true"></i>
				                            <span>Заявки с сайта</span>
				                        </a>                        
				                    </li>
                                    
				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bx-detail" aria-hidden="true"></i>
				                            <span>Каталог статей</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
				                                <a class="nav-link" href="{{ route('admin.articles.index') }}">
				                                    Список статей
				                                </a>
				                            </li>
				                            <li>
				                                <a class="nav-link" href="{{ route('admin.articles.categories.index') }}">
				                                    Управление категориями
				                                </a>
				                            </li>
											<li>
				                                <a class="nav-link" href="{{ route('admin.articles.tags.index') }}">
				                                    Управление тегами
				                                </a>
				                            </li>
				    
				                        </ul>
				                    </li>

									<li>
				                        <a class="nav-link" href="{{ route('admin.news.index') }}">
				                            <i class="icons icon-speech" aria-hidden="true"></i>
				                            <span>Новости сайта</span>
				                        </a>                        
				                    </li>

									<div class="sidebar-header">
										<div class="sidebar-title">
											UKI
										</div>
									</div>

									<li>
				                        <a class="nav-link" href="{{ route('admin.settings') }}">
				                            <i class="icons icon-settings" aria-hidden="true"></i>
				                            <span>Настройки</span>
				                        </a>                        
				                    </li>

									{{-- <li>
				                        <a class="nav-link" href="{{ route('admin.about_tariff') }}">
				                            <i class="icons icon-info"></i>
				                            <span>О тарифе</span>
				                        </a>                        
				                    </li> --}}

				                </ul>
				            </nav>

				        </div>

				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>

				    </div>

				</aside>
				<!-- end: sidebar -->

                @yield('content')

			</div>

		</section>

		<!-- Vendor -->
		<script src="/assets/admin/porto/vendor/jquery/jquery.js"></script>
		<script src="/assets/admin/porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="/assets/admin/porto/vendor/popper/umd/popper.min.js"></script>
		<script src="/assets/admin/porto/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="/assets/admin/porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="/assets/admin/porto/vendor/common/common.js"></script>
		<script src="/assets/admin/porto/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="/assets/admin/porto/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="/assets/admin/porto/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="/assets/admin/porto/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="/assets/admin/porto/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="/assets/admin/porto/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="/assets/admin/porto/vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js"></script>
		<script src="/assets/admin/porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.js"></script>
		<script src="/assets/admin/porto/vendor/flot/jquery.flot.js"></script>
		<script src="/assets/admin/porto/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
		<script src="/assets/admin/porto/vendor/flot/jquery.flot.pie.js"></script>
		<script src="/assets/admin/porto/vendor/flot/jquery.flot.categories.js"></script>
		<script src="/assets/admin/porto/vendor/flot/jquery.flot.resize.js"></script>
		<script src="/assets/admin/porto/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="/assets/admin/porto/vendor/raphael/raphael.js"></script>
		<script src="/assets/admin/porto/vendor/morris/morris.js"></script>
		<script src="/assets/admin/porto/vendor/gauge/gauge.js"></script>
		<script src="/assets/admin/porto/vendor/snap.svg/snap.svg.js"></script>
		<script src="/assets/admin/porto/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="/assets/admin/porto/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="/assets/admin/porto/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="/assets/admin/porto/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="/assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="/assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="/assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="/assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="/assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="/assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="/assets/admin/porto/js/theme.js"></script>

		<!-- Theme Custom -->
		<script src="/assets/admin/porto/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="/assets/admin/porto/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="/assets/admin/porto/js/examples/examples.dashboard.js"></script>

		<!-- Froala 4.1.4 Style -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js"></script>
  		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/xml/xml.min.js"></script>
    	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.2.7/purify.min.js"></script>

		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/froala_editor.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/align.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/char_counter.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/code_beautifier.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/code_view.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/colors.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/draggable.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/emoticons.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/entities.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/file.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/font_size.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/font_family.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/fullscreen.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/image.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/image_manager.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/line_breaker.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/inline_style.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/link.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/lists.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/paragraph_format.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/paragraph_style.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/quick_insert.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/quote.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/table.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/save.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/url.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/video.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/help.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/print.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/third_party/spell_checker.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/special_characters.min.js"></script>
		<script type="text/javascript" src="/assets/tools/froala_editor_4.1.4/js/plugins/word_paste.min.js"></script>

		<script>
			(function () {
			new FroalaEditor("#edit")
			})()
		</script>

	</body>
</html>