<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" href="components/font-awesome/css/font-awesome.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.css" />

		<link rel="stylesheet" href="assets/css/login-style.css" />
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.css" />
		<![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.js"></script>
		<![endif]-->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='components/_mod/jquery.mobile.custom/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 window.jQuery || document.write("<script src='assets/js/jquery1x.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>

		<script src="assets/js/angular-v1.5.7.js"></script>
		<script src="assets/angular/loginApp.js"></script>

	</head>

	<body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="register-container">
							<!-- <div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Ace</span>
									<span class="gray" id="id-text2">Application</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Company Name</h4>
							</div> -->
							<br><br><br><br><br><br>
							<div class="space-6"></div>
							
							<div data-ng-app="loginApp" data-ng-init="user_nameFocus=true" data-ng-controller="LoginController as login" class="position-relative">
								<div id="signup-box" class="login-form a-form widget-box a-box visible no-border">
									<form name="form" ng-submit="submit()">
										<div class="section-title">
											<h3 class="text-primary">New User Registration</h3>
										</div>
										<fieldset class="pull-left">
											<div class="textbox-wrap form-group" ng-class="{focused: user_nameFocus,'has-error':hasError()}">
												<label class="block clearfix">
													<span class="block input-icon input-icon-left other-icon-right">
														<input ng-focus="user_nameFocus = true" ng-blur="user_nameFocus = false" ng-model="user_name" validateuser name="user_name"  type="text" class="form-control" placeholder="Username" autofocus autocomplete="off"/>
														<i class="ace-icon fa fa-user"></i>
														<i ng-show="form.user_name.$pending.result" class="ace-icon fa fa-spinner fa-spin blue bigger-120 other-icon"></i>
													</span>
		    										<div ng-show="form.user_name.$error.result" class="help-block">This username is already taken!</div>
												</label>
											</div>
											<div class="textbox-wrap form-group" ng-class="{focused: fnameFocus,'has-error':hasError()}">	
												<label class="block clearfix">
													<span class="block input-icon input-icon-left">
														<input ng-focus="fnameFocus = true" ng-blur="fnameFocus = false" name="fname" ng-model="fname" validateuser type="text" class="form-control" placeholder="First Name" autocomplete="off"/>
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
											</div>
											<div class="textbox-wrap form-group" ng-class="{focused: lnameFocus}">
												<label class="block clearfix">
													<span class="block input-icon input-icon-left">
														<input ng-focus="lnameFocus = true" ng-blur="lnameFocus = false" name="lname" type="text" class="form-control" placeholder="Last Name" autocomplete="off"/>
														<i class="ace-icon fa fa-user"></i>
													</span>
												</label>
											</div>
										</fieldset>
										<fieldset class="pull-right">
											<div class="textbox-wrap form-group" ng-class="{focused: emailFocus}">
												<label class="block clearfix">
													<span class="block input-icon input-icon-left">
														<input ng-focus="emailFocus = true" ng-blur="emailFocus = false" name="email" type="text" class="form-control" placeholder="Email" autofocus/>
														<i class="ace-icon fa fa-envelope"></i>
													</span>
												</label>
											</div>
											<div class="textbox-wrap form-group" ng-class="{focused: passwordFocus}">
												<label class="block clearfix">
													<span class="block input-icon input-icon-left">
														<input ng-focus="passwordFocus = true" ng-blur="passwordFocus = false" name="password" id="password" type="password" class="form-control" placeholder="Password" />
														<i class="ace-icon fa fa-lock"></i>
													</span>
												</label>
											</div>
											<div class="textbox-wrap form-group" ng-class="{focused: r_passwordFocus}">
												<label class="block clearfix">
													<span class="block input-icon input-icon-left">
														<input ng-focus="r_passwordFocus = true" ng-blur="r_passwordFocus = false" name="r_password" type="password" class="form-control" placeholder="Repeat password" />
														<i class="ace-icon fa fa-retweet"></i>
													</span>
												</label>
											</div>
										</fieldset>
										<div class="clearfix"></div>
										<div class="registration-form-action clearfix">

											<div class="clearfix pull-right">
												<button type="reset" class="btn btn-sm">
													<i class="ace-icon fa fa-refresh"></i>
													<span class="bigger-110">Reset</span>
												</button>

												<button id="btn_register" data-form="#signup-box" type="submit" class="btn btn-sm btn-primary">
													<span class="bigger-110">Register</span>

													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</div>
										
										<div class="toolbar clearfix text-center">
											<hr>
												<a href="login">
													<i class="ace-icon fa fa-arrow-left"></i>
													Back to login
												</a>
										</div>
										
									</form>
								</div><!-- /.signup-box -->

							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
		<script src="components/jquery/dist/jquery.js"></script>
	</body>
</html>