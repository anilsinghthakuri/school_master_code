<aside class="main-sidebar sidebar-light-primary elevation-3">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name ?? 'anil'}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->

       {{-- link for gallery --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-image "></i>
                        <p>
                            Gallery
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/gallery-album" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gallery Album</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/gallery-image" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gallery Image</p>
                            </a>
                        </li>
                    </ul>
                </li>

                    {{-- link for staff --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-user-tie "></i>
                        <p>
                            Staff
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/staff-category" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Staff Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/staff" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Staff</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- notice link --}}
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon far fa-newspaper "></i>
                        <p>
                            Notice
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/notice-category" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Notice Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/staff" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Staff</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
