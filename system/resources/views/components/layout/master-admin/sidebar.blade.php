<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="{{url('master-admin')}}" class="logo-wrapper" title="Home">
                <span class="sr-only"></span>
                <span class="icon" aria-hidden="false"></span>
                <div class="logo-text">
                    <span class="logo-title">SIPAUD</span>
                    <span class="logo-subtitle">Ketapang Cerdas</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="active" href="{{url('master-admin')}}"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <span class="system-menu__title">system</span>
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon home" aria-hidden="true"></span>Sekolah
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('master-admin/data-sekolah') }}">Data sekolah</a>
                            </li>
                            <li>
                                <a href="{{ url('master-admin/data-sekolah/create') }}"></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon user-3" aria-hidden="true"></span>Admin Sekolah
                            <span class="category__btn transparent-btn" title="Open list">
                                <span class="sr-only">Open list</span>
                                <span class="icon arrow-down" aria-hidden="true"></span>
                            </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="{{ url('master-admin/data-admin') }}">Data admin</a>
                            </li>
                            <li>
                                <a href="{{ url('master-admin/data-admin/create') }}"></a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture>
                    <source srcset="{{ url('public/master-admin') }}/img/avatar/avatar-illustrated-01.webp"
                        type="image/webp"><img
                        src="{{ url('public/master-admin') }}/img/avatar/avatar-illustrated-01.png" alt="User name">
                </picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Andrian</span>
                <span class="sidebar-user__subtitle">Master Admin</span>
            </div>
        </a>
    </div>
</aside>