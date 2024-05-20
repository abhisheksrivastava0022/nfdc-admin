<nav class="navbar navbar-default navbar-fixed-top navbar-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="hamburger btn-link">
                <span class="hamburger-inner"></span>
            </button>
            <ol class="breadcrumb hidden-xs">
                <li class="active">
                    <a href="http://localhost/nfdc-admin/public/admin"><i class="voyager-boat"></i>
                        Dashboard</a>
                </li>
                <li>Menus</li>
            </ol>
        </div>
        <ul class="nav navbar-nav  navbar-right ">
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button"
                    aria-expanded="false"><img src="{{ asset('img/user-default-logo.png') }}" class="profile-img">
                    <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="profile-img">
                        <img src="{{ asset('img/user-default-logo.png') }}" class="profile-img">
                        <div class="profile-body">
                            <h5>Admin</h5>
                            <h6>admin@admin.com</h6>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="class-full-of-rum">
                        <a href="http://localhost/nfdc-admin/public/admin/profile">
                            <i class="voyager-person"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="/" target="_blank">
                            <i class="voyager-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="voyager-power"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
