<?php
function pingAddress(string $endereco)
{
    $resposta = false;

    //$cmd = shell_exec("ping -c 1 -w 1 $endereco");
     $cmd = shell_exec("ping /n 1 $endereco");

    /*
     * Saída do comando ping quando a máquina existe:
     * 1 packets transmitted, 0 received, 100% packet loss, time 0ms
     *
     * Saída quando não existe:
     * ping: PMG34INFLB20331.pucminas.net: Nome ou serviço desconhecido
     */

     $dati_mount = explode(",", $cmd); // split por vírgula ,

    //  echo print_r($dati_mount);

    $out = null;

    if (sizeof($dati_mount) > 1){ // Caso haja mais de uma string no split, a máquina existe

        if (preg_match("/1/", $dati_mount[1], $out))
        {

            $cmd = shell_exec("query user /server:$endereco");

            $dados = explode(",", $cmd); // split por vírgula ,

           // print_r($cmd);

            $out = null;

            if (sizeof($dados) > 0){ // Caso haja mais de uma string no split, a máquina existe

               // echo "Esta verificando se tem alguem conectado";

                if (preg_match("/Ativo/i", $dados[0], $out))
                {
                    $resposta = false;
                    //echo "TEM ALGUEM LOGADO";
                }
                else {
                    $resposta = true;
                   // echo "TEM ALGUEM LOGADO MAS DESATIVO";
                }
            }
            else{
                $resposta = true;
                //echo "NÃO TEM NINGUEM LOGADO";
                echo "Disponível";
            }
        }
    }
    else{
        $resposta = null;
        //echo "Nao pingou";
    }

    return $resposta;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Máquinas</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="{{ asset('css/') }}" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="css/tipso.css">

    <!-- scripts for the font -->
    <script src="https://kit.fontawesome.com/06714c4939.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-building"></i>
                    <span>ICEI</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                   <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">FCA</h1>
                    <p class="mb-4">Máquinas do laboratório LAB-1</p>
                   
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Border Bottom Utilities -->
                        <div class="col-lg-2">

                            <div id="maq1" class="card mb-4 py-1">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 1</a>
                                    <h4 class="text-center">
                                    <?php 
                                        $maq1 = pingAddress("10.7.2.2");
                                        
                                        if($maq1 == 1) {
                                            echo '<span class="badge badge-success">Disponível</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Indisponível</span>';
                                        }
                                    ?></h4>
                                </div>
                            </div>
                            
                            <div id="maq2" class="card mb-4 py-1">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 2</a>
                                    <h4 class="text-center">
                                    <?php 
                                        $maq2 = pingAddress("10.7.2.3");
                                        
                                        if($maq2 == 1) {
                                            echo '<span class="badge badge-success">Disponível</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Indisponível</span>';
                                        }
                                    ?></h4>
                                </div>
                            </div>

                            <div id="maq3" class="card mb-4 py-1">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 3</a>
                                    <h4 class="text-center">
                                    <?php 
                                        $maq3 = pingAddress("10.2.8.1");
                                        
                                        if($maq3 == 1) {
                                            echo '<span class="badge badge-success">Disponível</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Indisponível</span>';
                                        }
                                    ?></h4>
                                </div>
                            </div>

                            <div id="maq4" class="card mb-4 py-1">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 4</a>
                                    <h4 class="text-center">
                                    <?php 
                                        $maq4 = pingAddress("10.2.8.2");
                                        
                                        if($maq4 == 1) {
                                            echo '<span class="badge badge-success">Disponível</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Indisponível</span>';
                                        }
                                    ?></h4>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-2">

                        <div id="maq5" class="card mb-4 py-1">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 5</a>
                                    <h4 class="text-center">
                                    <?php 
                                        $maq5 = pingAddress("10.4.2.101");
                                        
                                        if($maq5 == 1) {
                                            echo '<span class="badge badge-success">Disponível</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Indisponível</span>';
                                        }
                                    ?></h4>
                                </div>
                            </div>

                            <div id="maq6" class="card mb-4 py-1">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 6</a>
                                    <h4 class="text-center">
                                    <?php 
                                        $maq6 = pingAddress("10.4.2.3");
                                        
                                        if($maq6 == 1) {
                                            echo '<span class="badge badge-success">Disponível</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Indisponível</span>';
                                        }
                                    ?></h4>
                                </div>
                            </div>

                            <div id="maq7" class="card mb-4 py-1">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 7</a>
                                    <h4 class="text-center">
                                    <?php 
                                        $maq7 = pingAddress("10.3.15.167");
                                        
                                        if($maq7 == 1) {
                                            echo '<span class="badge badge-success">Disponível</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Indisponível</span>';
                                        }
                                    ?></h4>
                                </div>
                            </div>

                            <!-- <div id="maq8" class="card mb-4 py-1">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 8</a>
                                    <h4 class="text-center">
                                    <?php 
                                        // $maq8 = pingAddress("10.3.15.161");
                                        
                                        // if($maq8 == 1) {
                                        //     echo '<span class="badge badge-success">Disponível</span>';
                                        // } else {
                                        //     echo '<span class="badge badge-danger">Indisponível</span>';
                                        // }
                                    ?></h4>
                                </div>
                            </div> -->

                            <!-- <div class="card mb-4 py-1 border-bottom-primary">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 7</a>
                                </div>
                            </div>
                            
                            <div class="card mb-4 py-1 border-bottom-primary">
                                <div class="card-body">
                                    <a class="dropdown-item text-center" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-desktop" style="padding-right: 2em;"></i>Máquina 8</a>
                                </div>
                            </div> -->

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

                    

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

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <!-- <script src="resouces/js/Chart.min.js"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="resouces/js/chart-area-demo.js"></script>
    <script src="resouces/js/chart-pie-demo.js"></script>
    <script src="resouces/js/tipso.js"></script> -->

    <script>
        $('.card').tipso({
            titleContent: 'Softwares Instalados',
            content: 'Word; Photoshop; AutoCAD',
            background: '#4d94ff',
            size: 'small',
            delay: 2
        });
    </script>

    <script>
        function startRefresh() {
            $.get('', function (data) {
                $(document.body).html(data);
            });
        }
        // $(function () {
        //     setTimeout(startRefresh, 5000);
        // });
    </script>

        <?php 
        if ($maq1 == 1) {
            
            echo '<script type="text/javascript"> document.getElementById("maq1").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq1").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq1").classList.add("border-bottom-success"); </script>';
        }
        else {
            echo '<script type="text/javascript"> document.getElementById("maq1").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq1").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq1").classList.add("border-bottom-danger"); </script>';
        }

        if ($maq2 == 1) {
            echo '<script type="text/javascript"> document.getElementById("maq2").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq2").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq2").classList.add("border-bottom-success"); </script>';
        }
        else {
            echo '<script type="text/javascript"> document.getElementById("maq2").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq2").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq2").classList.add("border-bottom-danger"); </script>';
        }
        if ($maq3 == 1) {
            echo '<script type="text/javascript"> document.getElementById("maq3").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq3").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq3").classList.add("border-bottom-success"); </script>';
        }
        else {
            echo '<script type="text/javascript"> document.getElementById("maq3").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq3").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq3").classList.add("border-bottom-danger"); </script>';
        }
        if ($maq4 == 1) {
            echo '<script type="text/javascript"> document.getElementById("maq4").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq4").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq4").classList.add("border-bottom-success"); </script>';
        }
        else {
            echo '<script type="text/javascript"> document.getElementById("maq4").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq4").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq4").classList.add("border-bottom-danger"); </script>';
        }
        if ($maq5 == 1) {
            echo '<script type="text/javascript"> document.getElementById("maq5").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq5").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq5").classList.add("border-bottom-success"); </script>';
        }
        else {
            echo '<script type="text/javascript"> document.getElementById("maq5").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq5").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq5").classList.add("border-bottom-danger"); </script>';
        }
        if ($maq6 == 1) {
            echo '<script type="text/javascript"> document.getElementById("maq6").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq6").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq6").classList.add("border-bottom-success"); </script>';
        }
        else {
            echo '<script type="text/javascript"> document.getElementById("maq6").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq6").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq6").classList.add("border-bottom-danger"); </script>';
        }
        if ($maq7 == 1) {
            echo '<script type="text/javascript"> document.getElementById("maq7").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq7").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq7").classList.add("border-bottom-success"); </script>';
        }
        else {
            echo '<script type="text/javascript"> document.getElementById("maq7").classList.remove("border-bottom-primary"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq7").classList.remove("border-bottom-danger"); </script>';
            echo '<script type="text/javascript"> document.getElementById("maq7").classList.add("border-bottom-danger"); </script>';
        }
    ?>

</body>

</html>