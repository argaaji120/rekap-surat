<header class="main-header">
    <a href="javascript:void(0)" class="logo">
        <span class="logo-mini"><b>PCC</b></span>
        <span class="logo-lg"><b>Rekap Surat</b>
    </a>

    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-body text-center bg-primary">
                            <h4>{{ Auth::user()->name }}</h4>
                            <p>{{ Auth::user()->roles }}</p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-righ">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-default btn-flat btn-block">Sign Out</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
