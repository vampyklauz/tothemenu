
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>Directory</title>

<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ url('components/font-awesome/css/font-awesome.css') }}" />

<!-- page specific plugin styles -->
@yield('links')

<!-- text fonts -->
<link rel="stylesheet" href="{{ url('assets/css/ace-fonts.css') }}" />

<!-- ace styles -->
<link rel="stylesheet" href="{{ url('assets/css/ace.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

<!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ url('assets/css/ace-part2.css') }}" class="ace-main-stylesheet" />
<![endif]-->
<link rel="stylesheet" href="{{ url('assets/css/ace-skins.css') }}" />
<link rel="stylesheet" href="{{ url('assets/css/ace-rtl.css') }}" />
<link rel="stylesheet" href="{{ url('assets/css/style.css') }}" />

<link rel="stylesheet" href="{{ url('../bower_components/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ url('../bower_components/owl.carousel/dist/assets/owl.theme.default.min.css') }}" />

<!--[if lte IE 9]>
  <link rel="stylesheet" href="{{ url('assets/css/ace-ie.css') }}" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="{{ url('assets/js/ace-extra.js') }}"></script>



<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="{{ url('components/html5shiv/dist/html5shiv.min.js') }}"></script>
<script src="{{ url('components/respond/dest/respond.min.js') }}"></script>
<![endif]-->
<!--[if !IE]> -->
<script src="{{ url('components/jquery/dist/jquery.js') }}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{ url('components/jquery.1x/dist/jquery.js') }}"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='components/_mod/jquery.mobile.custom/jquery.mobile.custom.js'>"+"<"+"/script>");
</script>
<script src="{{ url('components/bootstrap/dist/js/bootstrap.js') }}"></script>

<!-- include Cycle2 -->
<script src="{{ url('../bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>