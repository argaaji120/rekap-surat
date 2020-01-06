<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/dist/img/profile_avatar.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>

            <li class="{{ (request()->is('dashboard*')) ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            
            <li class="{{ (request()->is('sekretaris*')) ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <i class="fa fa-users"></i> <span>Sekretaris</span>
                </a>
            </li>

            <li class="{{ (request()->is('surat-masuk*')) ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <i class="fa fa-download"></i> <span>Surat Masuk</span>
                </a>
            </li>

            <li class="{{ (request()->is('surat-keluar*')) ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <i class="fa fa-upload"></i> <span>Surat Keluar</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>