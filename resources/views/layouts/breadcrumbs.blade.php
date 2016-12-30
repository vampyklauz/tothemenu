<div class="breadcrumbs  ace-save-state" id="breadcrumbs">
    <div class="header-wrap">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="<?php echo url('/'); ?>">Home</a>
            </li>

            <li>
                <a href="<?php echo url('/'); ?>">NJ</a>
            </li>
            <?php echo isset( $breadcrumbs ) ? $breadcrumbs : ''; ?>
        </ul><!-- /.breadcrumb -->

        <!-- #section:basics/content.searchbox -->
        <div class="nav-search" id="nav-search">
            <form class="form-search">
                <span class="input-icon">
                    <input type="text" placeholder="Keyword ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                    <button class="btn btn-minier btn-primary">Search</button>
                </span>
            </form>
        </div><!-- /.nav-search -->
    </div>
    <!-- /section:basics/content.searchbox -->
</div>