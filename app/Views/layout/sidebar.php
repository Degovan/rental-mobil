<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route_to('dashboard') ?>" aria-expanded="false"><i class="me-3 fa fa-tachometer-alt" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route_to('orders') ?>" aria-expanded="false"><i class="me-3 fa fa-table" aria-hidden="true"></i><span class="hide-menu">Order</span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="me-3 fa fa-users"></i><span class="hide-menu">Data Santri </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="<?= route_to('santri') ?>" class="sidebar-link"><i class="me-3 fa fa-list"></i> Daftar</a></li>
                        <li class="sidebar-item"><a href="<?= route_to('santri.create') ?>" class="sidebar-link"><i class="me-3 fa fa-plus"></i> Tambah</a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="me-3 fa fa-car"></i><span class="hide-menu">Data Mobil </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="<?= route_to('car') ?>" class="sidebar-link"><i class="me-3 fa fa-list"></i> Daftar Mobil</a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= route_to('logout') ?>" aria-expanded="false"><i class="me-3 fa fa-sign-out-alt" aria-hidden="true"></i><span class="hide-menu">Logout</span></a></li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
