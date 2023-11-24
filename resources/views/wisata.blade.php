<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('bootstrap/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ url('sb-admin/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ url('assets/Traveloka.png') }}">
    <title>TravelDesU</title>
</head>

<body>
    <div class="container-xxl position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent px-4 px-lg-5 py-3 py-lg-0 fixed-top">
            <a href="#" class="navbar-brand p-0">
                <h1 class="m-0 text-white">TravelDesU</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarWeb"
                aria-expanded="true">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarWeb" class="navbar-collapse collapse">
                <div class="navbar-nav mx-auto py-2 ">
                    <a class="nav-item nav-link active text-white" href="#home">Home</a>
                    <a class="nav-item nav-link active text-white" href="#wisata">Data Wisata</a>
                    <a class="nav-item nav-link active text-white" href="#profile">About</a>
                </div>
            </div>
        </nav>
        <div class="jumbotron-fluid header-jumbotron hero-header jumbotron ">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-end">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class=" mb-4 animated slideInDown text-white">Selamat datang di Tempat Wisata Indonesia</h1>
                        <div class="card bg-transparent">
                        <strong class="pb-3 animated slideInDown text-white">
                            Selamat Berwisata ! </strong>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container" id="wisata">
        <br>
        <br>
        <br>
    <h2 align="center">Tempat Wisata di Indonesia</h2>
    <br>
    <div class="row">
        @foreach($destinations as $destination)
        <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
            
                <div class="card-body">
                    <img src="{{ url('assets/Tempat-wisata-bali.jpg') }}" class="img-fluid">
                    <h4 class="display-6 text-center mb-4">{{ $destination->name}}</h4>
                    <p>{{ $destination->details }}</p>
                </div>
                <div style="justify-content: center;">
                    <a type="button" class="btn btn-warning" href="{{ url('destinations/' . $destination->id) }}"">Cek Detail</a>
                </div>
            </div>
            <br>
        </div>
        @endforeach
    </div>
</div>
         <div class="container-fluid mt-5" id="profile">
            <div class="row">
                <div class="col-12 col-md-5">
                    <img src="unsplash9.jpg" alt="" class="img-fluid width">
                </div>
                <div class="col-12 col-md-7">
                    <b class="display-3">Tentang Saya</b>
                    <p class="mt-5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo necessitatibus nobis consequuntur ipsam praesentium nisi ad. Sequi dolores optio beatae debitis? Magnam ad blanditiis sint facilis, in hic vero numquam doloribus corrupti ab similique culpa maxime sit labore, rem optio! Molestiae fuga quis accusamus? Dolorem, eaque. Beatae, earum. Nostrum nobis voluptatibus at et cumque ducimus, recusandae quia reprehenderit amet officia magnam placeat numquam suscipit magni inventore a ab fugit ullam fuga. Nobis, asperiores! Aperiam corporis veritatis quasi quos dolorem! Libero.
                    </p>
                </div>
            </div>
        </div>
            <br>
         <footer class="bg-black text-white pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Tentang Kami</h4>
                        <p>Deskripsi singkat tentang Tempat Wisata kami.</p>
                    </div>
                    <div class="col-md-4">
                        <h4>Link Berguna</h4>
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">Home</a></li>
                            <li><a href="javascript:void(0)">Data Wisata</a></li>
                            <li><a href="javascript:void(0)">About</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Kontak</h4>
                        <p>Alamat: Jl. Contoh No. 123, Kota Contoh</p>
                        <p>Email: info@contoh.com</p>
                        <p>Telepon: 081223209190</p>
                    </div>
                </div>
                <div class="socialButton">
                    <a href="https://www.instagram.com/sir_ikoo/"><i class="bx bxl-instagram-alt"></i></a>
                    <a href="https://www.facebook.com/riko.basawara"><i class="bx bxl-facebook"></i></a>
                    <a href="https://twitter.com/sir_ikoo"><i class="bx bxl-twitter"></i></a>
                    <a href="https://discord.com/channels/@me"><i class="bx bxl-discord-alt"></i></a>
                </div>
                <!-- <div class="text-center">
                    <p>Copyright &copy; 2023 - SAEPUDIN All Rights Reserved.</p>
                </div> -->
            </div>
        </footer>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            var nav = document.querySelector('nav');
            window.addEventListener('scroll', function () {
                if (window.pageYOffset > 100) {
                    nav.classList.add('bg-dark', 'shadow');
                } else {
                    nav.classList.remove('bg-dark');
                }
            })
        </script>
</body>
</html>