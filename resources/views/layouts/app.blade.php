<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <title>HOME Dochmart</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://www.dochmart.com/assets/icons/iso_svg.svg" width="100" height="50"
                class="d-inline-block align-top" alt="">

        </a>
        <h2 style="color: #0019cb; font-weight: 600;"> <i class="fas fa-calendar"></i> RESERVA TU ENTREGA </h2>
    </nav>
    <div class="container p-5">
        @yield('content')


    </div>
    <!-- Page footer-->
    <footer class="footer-section theme-footer"
        style="color: white !important; background-color: #2E3336;  text-align: center; padding-left: 20% !important; padding-right: 20% !important;">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left" style="color: white !important;"">

            <!-- Grid row -->
            <div class="row container">

                <!-- Grid column -->
                <div class="col-md-3 mt-md-0 mt-3">

                    <!-- Content -->
                    <a href="/">
                        <img style="height: 150px; width:150px;" class="img-fluid"
                            src="https://www.dochmart.com/assets/icons/iso_svg.svg">
                    </a>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-9" style="margin-top: 2%;text-align: left; padding-top: 50px;">

                    <!-- Links -->
                    <p>© 2025 dochmart SAPI de CV. Todos los derechos reservados </p>



                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">


                <!-- Grid column -->


                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->

        <!-- Copyright -->

    </footer>
    <script type="text/javascript" src="{{asset('js/ReservationDochmarts.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
