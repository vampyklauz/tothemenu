<div id="navbar" class="navbar navbar-fixed-top">
    <div class="navbar-container ace-save-state header-wrap " id="navbar-container">
        <!-- #section:basics/sidebar.mobile.toggle -->

        <!-- /section:basics/sidebar.mobile.toggle -->
        <div class="navbar-header pull-left">
            <!-- #section:basics/navbar.layout.brand -->
            <a href="<?php echo url('/'); ?>" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    To The Menu
                </small>
            </a>

            <!-- /section:basics/navbar.layout.brand -->

            <!-- #section:basics/navbar.toggle -->

            <!-- /section:basics/navbar.toggle -->
        </div>

        <!-- #section:basics/navbar.dropdown -->
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">

                <li class="dropdown-modal">
                     <div class="main-menu">
                        <ul>
                            <li><a href="<?php echo url('/'); ?>">Home</a></li>
                            <li><a href="<?php page_url('about',$county); ?>">About us</a></li>
                            <li><a href="<?php page_url('contact',$county); ?>">Contact</a></li>
                        </ul>
                    </div>
                </li>

                <!-- #section:basics/navbar.user_menu -->
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo url('assets/avatars/user.jpg'); ?>" alt="Jason's Photo" />
                        <span class="user-info">
                            <small>Welcome,</small>
                            Klaus
                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="profile.html">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="logout">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- /section:basics/navbar.user_menu -->
            </ul>
        </div>

        <!-- /section:basics/navbar.dropdown -->
    </div><!-- /.navbar-container -->
</div>