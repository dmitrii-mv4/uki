<!doctype html>
<html class="fixed header-dark">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Установщий :: UKI</title>
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

        <div class="row">
            <div class="col-lg-6" style="width: 50%; margin: 10% 0px 0px 25%;">
                <section class="card form-wizard" id="w3">
                    <header class="card-header">
                        <h2 class="card-title">Установщий</h2>
                    </header>
                    <div class="card-body">
                        <div class="wizard-progress">
                            <div class="steps-progress">
                                <div class="progress-indicator" style="width: 100%;"></div>
                            </div>
                            <ul class="nav wizard-steps">
                                <li class="nav-item completed">
                                    <a class="nav-link" href="#w3-account" data-bs-toggle="tab"><span>1</span>Настройка БД</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#w3-profile" data-bs-toggle="tab"><span>2</span>Регистрация аккаунта</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#w3-billing" data-bs-toggle="tab"><span>3</span>Информация о сайте</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link active" href="#w3-confirm" data-bs-toggle="tab"><span>4</span>Confirmation</a>
                                </li>
                            </ul>
                        </div>
                        <form class="form-horizontal p-3" novalidate="novalidate">
                            <div class="tab-content">
                                <div id="w3-account" class="tab-pane">
                                    <div class="form-group row pb-3">
                                        <label class="col-sm-4 control-label text-sm-end pt-1" for="w3-username">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control valid" name="username" id="w3-username" required="" aria-invalid="false">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-end pt-1" for="w3-password">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control valid" name="password" id="w3-password" minlength="6" required="" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                                <div id="w3-profile" class="tab-pane">
                                    <div class="form-group row pb-3">
                                        <label class="col-sm-4 control-label text-sm-end pt-1" for="w3-first-name">First Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="first-name" id="w3-first-name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-end pt-1" for="w3-last-name">Last Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="last-name" id="w3-last-name">
                                        </div>
                                    </div>
                                </div>
                                <div id="w3-billing" class="tab-pane">
                                    <div class="form-group row pb-3">
                                        <label class="col-sm-4 control-label text-sm-end pt-1" for="w3-cc">Card Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="cc-number" id="w3-cc" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label text-sm-end pt-1" for="inputSuccess">Expiration</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="exp-month" required="">
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="exp-year" required="">
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2021</option>
                                                <option>2021</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="w3-confirm" class="tab-pane active">
                                    <div class="form-group row pb-3">
                                        <label class="col-sm-4 control-label text-sm-end pt-1" for="w3-email">Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="email" id="w3-email" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="checkbox-custom">
                                                <input type="checkbox" name="terms" id="w3-terms" required="">
                                                <label for="w3-terms">I agree to the terms of service</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <ul class="pager">
                            <li class="previous">
                                <a><i class="fas fa-angle-left"></i> Previous</a>
                            </li>
                            <li class="finish float-end">
                                <a>Finish</a>
                            </li>
                            <li class="next disabled">
                                <a>Next <i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

        </div>

        <script src="/assets/admin/porto/js/examples/examples.wizard.js"></script>
        <script src="/assets/admin/porto/js/theme.init.js"></script>
        <script src="/assets/admin/porto/js/theme.js"></script>
        <script src="/assets/admin/porto/vendor/pnotify/pnotify.custom.js"></script>
        <script src="/assets/admin/porto/vendor/bootstrapv5-wizard/jquery.bootstrap.wizard.js"></script>
        <script src="/assets/admin/porto/vendor/jquery-validation/jquery.validate.js"></script>
        <script src="/assets/admin/porto/vendor/jquery-placeholder/jquery.placeholder.js"></script>
        <script src="/assets/admin/porto/vendor/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="/assets/admin/porto/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="/assets/admin/porto/vendor/common/common.js"></script>
        <script src="/assets/admin/porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="/assets/admin/porto/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/admin/porto/vendor/popper/umd/popper.min.js"></script>
        <script src="/assets/admin/porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="/assets/admin/porto/vendor/jquery/jquery.js"></script>

    </body>
</html>