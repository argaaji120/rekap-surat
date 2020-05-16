<aside class="main-sidebar">
    <section class="sidebar">
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

            <li class="{{ (request()->is('surat-masuk*')) ? 'active' : '' }}">
                <a href="{{ route('surat-masuk.index') }}">
                    <i class="fa fa-download"></i> <span>Surat Masuk</span>
                </a>
            </li>

            <li class="{{ (request()->is('surat-keluar*')) ? 'active' : '' }}">
                <a href="{{ route('surat-keluar.index') }}">
                    <i class="fa fa-upload"></i> <span>Surat Keluar</span>
                </a>
            </li>

            <li class="{{ (request()->is('pengaturan*')) ? 'active' : '' }}">
                <a href="{{ route('pengaturan.index') }}">
                    <i class="fa fa-cog"></i> <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </section>
</aside>