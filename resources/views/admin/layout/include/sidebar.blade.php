<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="{{asset('plugins/adminlte/dist/img/AdminLTELogo.png')}}" alt="logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Addmission</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('addmissionrequest') ? 'active' : '' }}"
                        href="{{route('addmissionrequest')}}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Addmission Request</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>