<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Statistika</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            App
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('tambahData') }}" class="nav-link active">
                                <i class="fas fa-plus-circle nav-icon"></i>
                                <p>Tambah Data</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('tabelFrekuensi') }}" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Tabel Frekuensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dataBergolong') }}" class="nav-link">
                                <i class="fas fa-table nav-icon"></i>
                                <p>Data Bergolong</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>