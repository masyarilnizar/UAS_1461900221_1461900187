<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Toko Halo</title>

    <!-- Bootstrap core CSS -->
    <link href='{{ asset("booststrap2/css/bootstrap.min.css")}}' rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href='{{ asset("css/fontawesome.css")}}'>
    <link rel="stylesheet" href='{{ asset("css/templatemo-sixteen.css")}}'>
    <link rel="stylesheet" href='{{ asset("css/owl.css")}}'>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Toko <em>Halo</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/user">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/keranjang">Keranjang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pembayaran">Pembelian</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('body')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    

    


    <!-- Bootstrap core JavaScript -->
    <script src='{{ asset("jquery/jquery.min.js")}}'></script>
    <script src='{{ asset("bootstrap/js/bootstrap.bundle.min.js")}}'></script>

    
    <!-- Additional Scripts -->
    <script src='{{ asset("js/custom.js")}}'></script>
    <script src='{{ asset("js/owl.js")}}'></script>
    <script src='{{ asset("js/slick.js")}}'></script>
    <script src='{{ asset("js/isotope.js")}}'></script>
    <script src='{{ asset("js/accordions.js")}}'></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>