
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="../../dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline">{{request()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header bg-primary">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{ request()->user()->name }}
                        <small>Member since {{ optional(request()->user()->created_at)->diffForHumans() }}</small>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="/profile/edit" class="btn btn-default btn-flat">Edit Profile</a>
                    <a href="javascript:void(0);" class="btn btn-default btn-flat float-right"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sign out
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
