@extends('layouts.home')

@section('content')
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PUC MINAS <sup>Labs</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Institutos
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-building"></i>
            <span>FCA</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Laboratórios:</h6>
                <a class="collapse-item" href="buttons.html">LAB-1</a>
                <a class="collapse-item" href="cards.html">LAB-2</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-building"></i>
            <span>ICEI</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Laboratórios:</h6>
                <a class="collapse-item" href="utilities-color.html">LAB-1</a>
                <a class="collapse-item" href="utilities-border.html">LAB-2</a>
                <a class="collapse-item" href="utilities-animation.html">LAB-3</a>
                <a class="collapse-item" href="utilities-other.html">LAB-4</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">PUC MINAS</span>
                        <!-- <img class="img-profile rounded-circle"
                            src="img/undraw_profile.svg"> -->
                    </a>
                    <!-- Dropdown - User Information -->
                    <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div> -->
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-1 text-gray-800">FCA</h1>
            <p class="mb-4">Máquinas do laboratório LAB-1</p>

            <!-- Content Row -->
            <div class="row">

                <!-- Border Bottom Utilities -->
                <div class="col-lg-2">

                    <div id="maq1" class="card mb-2 py-1 border-bottom-primary">
                        <div class="card-body">
                            <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 1</a>
                            <h4 class="text-center"><span class="badge badge-danger">Indisponível</span></h4>
                        </div>
                    </div>

                    <div id="maq2" class="card mb-2 py-1">
                        <div class="card-body">
                            <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 2</a>
                            <h4 id="testAjax">nice</h4>
                        </div>
                    </div>

                </div>
                <!-- </div> -->

            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; PUC Minas|CRC 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Acesso Remoto:</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Acessar a máquina remotamente</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="login.html">Acessar</a>
            </div>
        </div>
    </div>
</div>
<!-- end logout modal -->


<!-- 
    ajax -> chamar uma rota automaticamente de 5s em 5s pra função de pingar todas as maquinas 
-->

<script>

    function testAjax(){
        $.ajax({
            url: "/",
            data: { 'primeiro': 1, 'segundo': 2 }
        })
        .done(function(data) {
            $('#testAjax').replaceWith(data.responseText);
            console.log(this.responseText);
            console.log("ok");
        })
        .fail(function(){
            console.log(this.responseText);
            console.log("nok");
        });
    }

    setTimeout(testAjax, 5000);

</script>
@endsection