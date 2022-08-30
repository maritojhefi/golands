
<aside class="sidebar sidebar-left">
    <div class="sidebar-content">
        <nav class="main-menu">
            <ul class="nav metismenu">
                <li class="sidebar-header"><span>HOME</span></li>

                <li class="nav-dropdown ">
                    <a href="{{ route('admin.dashboard')}}"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i><span>Dashboard</span></a>
                </li>
                <li class="nav-dropdown ">
                    <a href="#"><i class="la la-user"></i><span>My Profile</span></a>
                    <ul class="nav-sub collapse in" style="">
                        <li><a href="{{ route('admin.profile')}}"><span>My Account</span></a></li>
                        <li><a href="{{ route('crear.usuario') }}"><span>Create User's</span></a></li>
                        <li><a href="{{ route('admin.users.list') }}"><span>List Users</span></a></li>
                        
                    </ul>
                </li>
                <li class="nav-dropdown ">
                    <a href="#"><i class="la la-building"></i><span>Letter</span></a>
                </li>
                <li class="nav-dropdown ">
                    <a href="#"><i class="zmdi zmdi-window-maximize zmdi-hc-fw"></i><span>Landings</span></a>
                </li>
                <li class="nav-dropdown ">
                    <a href=" {{ route('admin.banners.list') }}  "><i class="la la-picture-o"></i><span>Banner</span></a>
                </li>
            </ul>
        </nav>
    </div>
</aside>