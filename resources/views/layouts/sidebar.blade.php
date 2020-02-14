<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('storage/'. Auth::user()->avatar) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li class="{{ (request()->is('dashboard*')) ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            
            <li class="{{ (request()->is('users*')) ? 'active' : '' }}">
                <a href="{{ route('users.index') }}">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>

            <li class="{{ (request()->is('surat_masuk*')) ? 'active' : '' }}">
                <a href="{{ route('surat_masuk.index') }}">
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