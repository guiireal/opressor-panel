<div class="sidebar dark-shadow" data-color="{{$color}}" data-image="{{$backgroundImage}}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">
                {{$aliasName}}
            </a>
            <a href="#" class="simple-text logo-normal">
                {{$headerName}}
            </a>
        </div>
        <div class="user">
            <div class="photo">
                <img src="{{asset('images/default-avatar.png')}}" alt="avatar" />
            </div>
            <div class="info">
                <a data-toggle="collapse">
                    <span>{{$username}}</span>
                </a>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item {{$menuActive === 'home' ? 'active' : ''}}">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="fa fa-home"></i>
                    <p>Página Inicial</p>
                </a>
            </li>
            <li class="nav-item {{$menuActive === 'search.cpf' ? 'active' : ''}}">
                <a class="nav-link" href="{{route('search.cpf')}}">
                    <i class="fa fa-search"></i>
                    <p>Consulta CPF</p>
                </a>
            </li>
        </ul>
    </div>
</div>
