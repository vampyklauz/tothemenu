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
        <link rel="stylesheet" href="<?php echo url('assets/css/bootstrap.css'); ?>" />
        <link rel="stylesheet" href="<?php echo url('components/font-awesome/css/font-awesome.css'); ?>" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo url('assets/css/ace-fonts.css'); ?>" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo url('assets/css/ace.css'); ?>" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="<?php echo url('assets/css/ace-part2.css'); ?>" />
        <![endif]-->
        <link rel="stylesheet" href="<?php echo url('assets/css/ace-rtl.css'); ?>" />

        <link rel="stylesheet" href="<?php echo url('assets/css/login-style.css'); ?>" />
        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php echo url('assets/css/ace-ie.css'); ?>" />
        <![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <script src="<?php echo url('assets/js/html5shiv.js'); ?>"></script>
        <script src="<?php echo url('assets/js/respond.js'); ?>"></script>
        <![endif]-->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo url('components/_mod/jquery.mobile.custom/jquery.mobile.custom.js'); ?>'>"+"<"+"/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script type="text/javascript">
         window.jQuery || document.write("<script src='<?php echo url('assets/js/jquery1x.js'); ?>'>"+"<"+"/script>");
        </script>
        <![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo url('assets/js/jquery.mobile.custom.js'); ?>'>"+"<"+"/script>");
        </script>

        <script src="<?php echo url('assets/js/angular-v1.5.7.js'); ?>"></script>
        <script src="<?php echo url('assets/angular/loginApp.js'); ?>"></script>

    </head>

    <body class="login-layout light-login-b">
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

                            <div data-ng-app="loginApp" data-ng-init="usernameFocus=true" data-ng-controller="LoginController as login" class="position-relative">
                                <div id="login-box" class="login-form a-form widget-box a-box visible no-border">
                                    <form role="form" method="POST" action="{{ url('/register') }}">
                                        {{ csrf_field() }}
                                        <div class="section-title">
                                            <h3 class="text-primary">New User Registration</h3>
                                        </div>
                                            <fieldset>
                                            <div class="textbox-wrap form-group" ng-class="{focused: usernameFocus}">
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-left">
                                                        <input ng-focus="usernameFocus = true" ng-blur="usernameFocus = false" id="name" name="name" type="text" validate="true" value="{{ old('name') }}" class="form-control" placeholder="Name" autofocus autocomplete="off"/>
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                                        </span>
                                                    @endif
                                                </label>
                                            </div>
                                            <div class="textbox-wrap form-group" ng-class="{focused: emailnameFocus}">
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-left">
                                                        <input ng-focus="emailnameFocus = true" ng-blur="emailnameFocus = false" id="email" name="email" type="text" validate="true" value="{{ old('email') }}" class="form-control" placeholder="Email" autocomplete="off"/>
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <p class="text-danger">{{ $errors->first('email') }}</p>
                                                        </span>
                                                    @endif
                                                </label>
                                            </div>
                                            <div class="textbox-wrap form-group" ng-class="{focused: passwordFocus}">
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-left">
                                                        <input ng-focus="passwordFocus = true" ng-blur="passwordFocus = false" id="password" name="password" validate="true" type="password" class="form-control" placeholder="Password" />
                                                        <i class="ace-icon fa fa-key"></i>
                                                    </span>
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <p class="text-danger">{{ $errors->first('password') }}</p>
                                                        </span>
                                                    @endif
                                                </label>
                                            </div>
                                            <div class="textbox-wrap form-group" ng-class="{focused: c_passwordFocus}">
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-left">
                                                        <input ng-focus="c_passwordFocus = true" ng-blur="c_passwordFocus = false" id="password-confirm" name="password_confirmation" validate="true" type="password" class="form-control" placeholder="Confirm Password" />
                                                        <i class="ace-icon fa fa-key"></i>
                                                    </span>
                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="help-block">
                                                            <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                                                        </span>
                                                    @endif
                                                </label>
                                            </div>
                                            <div class="registration-form-action clearfix">
                                                <!-- <label class="remember inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl bigger-110 text-muted"> Remember Me</span>
                                                </label> -->

                                                <button id="btn_register" data-form="#signup-box" type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <span class="bigger-110">Register</span>
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
                                            </div>
                                        </fieldset>
                                    

                                        <div class="toolbar clearfix text-center">
                                            <hr>
                                                <a href="login">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Back to login
                                                </a>
                                        </div>
                                    </form>
                                </div><!-- /.login-box -->

                            </div><!-- /.position-relative -->

                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->
        <script src="<?php echo url('components/jquery/dist/jquery.js'); ?>"></script>
        <script src="<?php echo url('components/jquery-validation/dist/jquery.validate.js'); ?>"></script>
    </body>
</html>