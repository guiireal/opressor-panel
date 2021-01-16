<nav class="navbar navbar-dark navbar-expand-lg dark-shadow" style="background-color: #757575;">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-success btn-fill btn-round btn-icon d-none d-lg-block">
                    <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                    <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                </button>
            </div>
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/alien-monster.svg')}}" width="40" alt="alien">
                    {{$greeting}}
                <img src="{{asset('images/alien-monster.svg')}}" width="40" alt="alien"> </a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nc-icon nc-bullet-list-67"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a href="{{route('logout')}}" class="dropdown-item text-danger">
                            <i class="nc-icon nc-button-power"></i> Sair
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
