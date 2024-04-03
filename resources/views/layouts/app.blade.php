<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CAMHOTUR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="https://camhoturv2-main-5keui.ondigitalocean.app/assets/img/favicon.ico" rel="icon">



        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">



       <!-- Font Awesome -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">



    @yield('css')
    
    <!-- Libraries Stylesheet -->
    <link href="https://camhoturv2-main-5keui.ondigitalocean.app/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://camhoturv2-main-5keui.ondigitalocean.app/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://camhoturv2-main-5keui.ondigitalocean.app/assets/css/style.css" rel="stylesheet">

    <style>
        .search-container {
            position: relative;
        }

        #searchInput {
            width: 200px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: none;
        }

        #results {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: white;
            /* border: 1px solid #ccc; */
            border-top: none;
            padding: 0;
            margin-top: 0;
            list-style-type: none;
            z-index: 1000;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #results li {
            padding: 10px;
            cursor: pointer;
        }

        #results li:hover {
            background-color: #f0f0f0;
        }

        .service-item {
            height: 400px;
            overflow: hidden;
        }

        .service-item-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }
    </style>

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>fabi30bongo@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+(506) 8633-6709</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">


                        {{-- <input type="text" id="searchInput" placeholder="Buscar...">
                        <ul id="results"></ul> --}}

                        {{-- <div class="search-container">
                            <input type="text" id="searchInput" placeholder="Buscar...">
                            <ul id="results"></ul>
                        </div> --}}

                        <a class="text-primary px-3" target="_blank"
                            href="https://www.facebook.com/profile.php?id=100008943519205&mibextid=ZbWKwL">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" target="_blank" href="https://wa.me/qr/P2ZRVOI4PSCFA1">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <i class="fas fa-grip-lines-vertical"></i>

                        {{-- <a class="px-3 locale-link" href="#" data-locale="en">En</a>
                        <a class="locale-link" href="#" data-locale="es">Es</a> --}}

                        <a id="btnEn" class="px-3" href="/locale/en"><img
                                src="{{ asset('images/estados-unidos2.png') }}" alt=""></a>

                        <a id="btnEs" href="/locale/es"><img src="{{ asset('images/costa-rica2.png') }}"
                                alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1 class="m-0 text-primary">CAMHOTUR</h1>
                </a>
                <div class="d-block d-lg-none text-center mt-3">

                    {{-- <a class="px-3 locale-link" href="#" data-locale="en">En</a>
                    <a class="locale-link" href="#" data-locale="es">Es</a> --}}

                    {{-- <a id="btnEnM" class="px-3" href="/locale/en">En</a>
                    <a id="btnEsM" href="/locale/es">Es</a> --}}

                    <a id="btnEn" class="px-3" href="/locale/en"><img
                            src="{{ asset('images/estados-unidos2.png') }}" alt=""></a>

                    <a id="btnEs" href="/locale/es"><img src="{{ asset('images/costa-rica2.png') }}"
                            alt=""></a>
                </div>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        {{-- <div class="search-container d-lg-none">
                            <input type="text" id="searchInput" placeholder="Buscar...">
                            <ul id="results"></ul>
                        </div> --}}
                        <div class="search-container nav-item nav-link ">
                            <input type="text" id="searchInput" placeholder="Buscar...">
                            <ul id="results"></ul>
                        </div>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfHCo6uUQ7JOScpajLcdRsxec2RGDhZCKz8_Je_OxfPpgiCgw/viewform?usp=sf_link"
                            target="_blank" class="nav-item nav-link"> {{ __('messages.formulario') }} </a>
                        <a href="{{ route('filtrar-emprendimientos-informativa', 'Productos') }}"
                            class="nav-item nav-link"> {{ __('messages.item_nav_productos') }} </a>
                        <a href="{{ route('filtrar-emprendimientos-informativa', 'Servicios') }}"
                            class="nav-item nav-link">{{ __('messages.item_nav_servicios') }}</a>
                        <a href="{{ route('filtrar-emprendimientos-informativa', 'Turismo') }}"
                            class="nav-item nav-link">{{ __('messages.item_nav_turismo') }}</a>
                        <a href="{{ route('login') }}" target="_blank"
                            class="nav-item nav-link">{{ __('messages.item_nav_login') }}</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('section')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary">CAMHOTUR</h1>
                </a>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">
                    {{ __('messages.siguenos') }}</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" target="_blank"
                        href="https://www.facebook.com/profile.php?id=100008943519205&mibextid=ZbWKwL"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square" target="_blank"
                        href="https://www.facebook.com/profile.php?id=100008943519205&mibextid=ZbWKwL"><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">
                    {{ __('messages.contactenos') }}</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Hojancha, Guanacaste</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+(506) 8633-6709</p>
                <p><i class="fa fa-envelope mr-2"></i>fabi30bongo@gmail.com</p>

            </div>
        </div>
    </div>

    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>

    @yield('js')

    {{-- <script>
        $(document).ready(function() {
            $('a.locale-link').on('click', function(e) {
                e.preventDefault();
                var locale = $(this).data('locale');
                $.ajax({
                    url: '/locale/' + locale,
                    method: 'GET',
                    success: function(data) {
                        // Si la solicitud se realiza con éxito, recarga la página
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Manejar errores si es necesario
                        console.error(error);
                    }
                });
            });
        });
    </script> --}}


    {{-- <script>
        $(document).ready(function() {
            $('a.locale-link').on('click', function(e) {
                e.preventDefault();
                var locale = $(this).data('locale');
                $.ajax({
                    url: '/set-locale', // Ruta para guardar el idioma en la sesión
                    method: 'POST',
                    data: {
                        locale: locale
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        // Si la solicitud se realiza con éxito, recarga la página
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        // Manejar errores si es necesario
                        console.error(error);
                    }
                });
            });
        });
    </script> --}}

    <script>
        let lenguajee = localStorage.getItem("lenguaje");
        let btnEs = document.getElementById("btnEs");
        let btnEn = document.getElementById("btnEn");

        if (!lenguajee) {
            localStorage.setItem("lenguaje", "es");
        }

        btnEs.addEventListener("click", (e) => {
            console.log(".");
            localStorage.setItem("lenguaje", "Es");

        });

        btnEn.addEventListener("click", (e) => {
            console.log("..");
            localStorage.setItem("lenguaje", "En");
        });
    </script>

    <script>
        function toggleSearchInput() {
            var url = window.location.href;
            var searchInput = document.getElementById("searchInput");

            if (url === "http://127.0.0.1:8000/") {
                searchInput.style.display = "block";
            } else {
                searchInput.style.display = "none";
            }
        }

        window.onload = toggleSearchInput;
    </script>

    <script>
        document.getElementById("searchInput").addEventListener("input", function() {
            var searchQuery = this.value.trim()
                .toLowerCase();
            var results = document.getElementById("results");
            results.innerHTML = '';

            if (searchQuery !== '') {
                var headings = document.querySelectorAll("h2");

                headings.forEach(function(heading) {
                    var headingText = heading.textContent.toLowerCase();
                    if (headingText.includes(searchQuery)) {
                        var li = document.createElement("li");
                        var link = document.createElement("a");
                        link.textContent = headingText;
                        link.href = "#" + heading.id;

                        link.addEventListener('click', function(event) {
                            event
                                .preventDefault();
                            var targetElement = document.querySelector(this.getAttribute('href'));
                            targetElement.scrollIntoView({
                                behavior: 'smooth',
                                duration: 2000
                            });
                        });

                        li.appendChild(link);
                        results.appendChild(li);
                    }
                });
            }
        });
    </script>


</body>

</html>
