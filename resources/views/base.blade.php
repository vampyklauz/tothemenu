<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')        
    </head>

    <body class="no-skin">
        <!-- #section:basics/navbar.layout -->
        @include('layouts.navbar')
        <!-- /section:basics/navbar.layout -->
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <!-- #section:basics/sidebar -->
            @include('layouts.sidebar')
            <!-- /section:basics/sidebar -->
            <div class="main-content">
                <div class="main-content-inner">
                    <!-- #section:basics/content.breadcrumbs -->
                    @include('layouts.breadcrumbs')
                    <!-- /section:basics/content.breadcrumbs -->
                    <div class="page-content">
                        <!-- #section:settings.box -->
                        {{-- @include('layouts.settings') --}}
                        <!-- /.ace-settings-container -->

                        <!-- /section:settings.box -->
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
								@yield('content')
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            @include('layouts.footer')

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- page specific plugin scripts -->
        @yield('scripts')
        <!-- ace scripts -->
        <script src="<?php echo url('assets/js/src/ace.js'); ?>"></script>
        <script src="<?php echo url('assets/js/src/ace.basics.js'); ?>"></script>
        <script src="<?php echo url('assets/js/src/ace.scrolltop.js'); ?>"></script>
        <script src="<?php echo url('assets/js/src/ace.sidebar.js'); ?>"></script>
        <script src="<?php echo url('assets/js/src/ace.sidebar-scroll-1.js'); ?>"></script>
        <script src="<?php echo url('assets/js/src/ace.submenu-hover.js'); ?>"></script>
        
        <script src="<?php echo url('docs/assets/js/rainbow.js'); ?>"></script>
        <script src="<?php echo url('docs/assets/js/language/generic.js'); ?>"></script>
        <script src="<?php echo url('docs/assets/js/language/html.js'); ?>"></script>
        <script src="<?php echo url('docs/assets/js/language/css.js'); ?>"></script>
        <script src="<?php echo url('docs/assets/js/language/javascript.js'); ?>"></script>
    </body>
</html>
