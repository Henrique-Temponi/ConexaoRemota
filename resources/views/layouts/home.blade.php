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
    
    <!-- page wrapper -->
    <div id="wrapper">
        @yield('content')
    </div>
    <!-- end of page wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

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
    
</body>
</html>