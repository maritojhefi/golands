<nav class="top-toolbar navbar navbar-desktop flex-nowrap">
    <ul class="navbar-nav nav-left">


        <li class="nav-item">
            <a href="javascript:void(0)" data-toggle-state="content-menu-close">
                <i class="icon dripicons-align-left"></i>
            </a>
        </li>
    </ul>


    <ul class="navbar-nav nav-center site-logo">
        <li>
            <a href="index.html">
                <div class="logo_mobile">

                </div>

                <h1 class="brand-text">LANDINGS</h1>
            </a>


<div>
    <a href="{{ route('admin.dashboard')}}" class="logo logo-light">
                <span class="logo-sm text-rotate">
                    <div class="row log_mobile">
                        <div class="col pl-4 pr-0" style="    top: -5px;
                        right: 11px;">
                            <span class="span-text">
                                <img src="{{ asset('images/logogosen1.png') }}" alt="" height="auto" width="20%">
                            </span>
                        </div>
                    </div>
                </span>
            </a>
</div>
            

        </li>
    </ul>
    <ul class="navbar-nav nav-right">
        <li class="nav-item">
            <a href="javascript:void(0)" class="open-search-button" data-q-action="open-site-search">
                <i class="icon dripicons-search"></i>
            </a>
        </li>
        <li class="nav-item dropdown dropdown-menu-lg">
            <a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">
                <i class="icon dripicons-view-apps"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right p-0">
                <div class="dropdown-menu-grid">
                    <div class="menu-grid-row">
                        <div><a class="dropdown-item  border-bottom border-right" href=""><i
                                    class="la la-newspaper-o"></i><span>Usuarios</span></a></div>
                        <div><a class="dropdown-item  border-right" href=""><i
                                    class="zmdi zmdi-assignment-check zmdi-hc-fw"></i><span>Productos
                                    Vendidos</span></a></div>

                    </div>

                    <div class="menu-grid-row">

                        <div><a class="dropdown-item  border-bottom" href=""><i
                                    class="la la-unlock-alt"></i><span>Compras</span></a></div>


                        <div> <a class="dropdown-item" href="javascript:void(0)"><i
                                    class="icon dripicons-calendar"></i><span>Promociones</span></a></div>
                    </div>

                </div>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <strong>
                    {{ auth()->user()->username }}
                </strong>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                <div class="dropdown-header pb-3">
                    <div class="media d-user">
                        <strong>
                            {{ auth()->user()->username }}
                        </strong>
                    </div>
                </div>
                <a class="dropdown-item" href="javascript:void(0);"><i class="icon dripicons-mail"></i> Mi Empresa </a>

                <a class="dropdown-item" href="{{ route('admin.profile')}}" ><i
                        class="icon dripicons-user"></i> My Profile</a>
                <a class="dropdown-item" href=""><i class="icon dripicons-gear"></i>Productos</a>
                <div class="dropdown-divider"></div>
                <div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="icon dripicons-lock-open"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
        <li class="nav-item">
        </li>
    </ul>
    <form role="search" action="javascript:void(0);" class="navbar-form">
        <div class="form-group">
            <input type="text" placeholder="Busca alguna funcion del sistema..." class="form-control navbar-search"
                autocomplete="off">
            <i data-q-action="close-site-search" class="icon dripicons-cross close-search"></i>
        </div>
        <button type="submit" class="d-none">Submit</button>
    </form>
</nav>

