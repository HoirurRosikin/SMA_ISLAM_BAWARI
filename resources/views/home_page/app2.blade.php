<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    @yield('head')

</head>

<body>
    <div class="container-fluid">
        <marquee class="fs-2"> Selamat Datang di Website SMA ISLAM BAWARI PONTIANAK</marquee>
        <img class="mx-auto d-block mt-2 mb-2" src="{{ asset('Sma/sma bawari.png') }}" alt="">
    </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded fs-4 " aria-label="Thirteenth navbar example">
        <div class="container-fluid" style="background-color: #1a7db7">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
                aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <a class="navbar-brand col-lg-3 me-0" href="#"></a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('visi-misi') }}" aria-current="page"
                            href="{{ url('profile') }}">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-expanded="false">Tentang</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item  {{ checkRouteActive('visi-misi') }}  "
                                    href="{{ url('visi-misi') }}">Visi & Misi</a></li>
                            <li><a class="dropdown-item  {{ checkRouteActive('sejarah-singkat') }}  "
                                    href="{{ url('sejarah-singkat') }}">Sejarah Singkat</a></li>
                            <li><a class="dropdown-item  {{ checkRouteActive('sarjana') }}  "
                                    href="{{ url('sarjana') }}">Sarjana & Prasajana</a></li>
                            <li><a class="dropdown-item  {{ checkRouteActive('struktur-organisasi') }}  "
                                    href="{{ url('struktur-organisasi') }}">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item  {{ checkRouteActive('sambutan-kepala-sekolah') }}  "
                                    href="{{ url('sambutan-kepala-sekolah') }}">Sambutan Kepala Sekolah</a></li>
                            <li><a class="dropdown-item  {{ checkRouteActive('kemitraan') }}  "
                                    href="{{ url('kemitraan') }}">Kemitraan</a></li>
                            <li><a class="dropdown-item  {{ checkRouteActive('program-kerja') }}  "
                                    href="{{ url('program-kerja') }}">Program Kerja</a></li>
                            <li><a class="dropdown-item  {{ checkRouteActive('komite-sekolah') }}  "
                                    href="{{ url('komite-sekolah') }}">komite Sekolah</a></li>
                            <li><a class="dropdown-item  {{ checkRouteActive('prestasi') }}  "
                                    href="{{ url('prestasi') }}">Presitasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown" aria-expanded="false">Guru</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ checkRouteActive('direktori-guru') }}"
                                    href="{{ url('direktori-guru') }}">Direktori Guru</a></li>
                            <li><a class="dropdown-item {{ checkRouteActive('prestasi-guru') }}"
                                    href="{{ url('prestasi-guru') }}">Prestasi Guru</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown" aria-expanded="false">Siswa</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ checkRouteActive('direktori-siswa') }}"
                                    href="{{ url('direktori-siswa') }}">Direktori Siswa</a></li>
                            <li><a class="dropdown-item {{ checkRouteActive('prestasi-siswa') }}"
                                    href="{{ url('prestasi-siswa') }}">Prestasi Siswa</a></li>
                            <li><a class="dropdown-item {{ checkRouteActive('ektrakurikuler') }}"
                                    href="{{ url('ektrakurikuler') }}">Ektrakurikuler</a></li>
                            <li><a class="dropdown-item {{ checkRouteActive('osis') }}"
                                    href="{{ url('osis') }}">Osis</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown" aria-expanded="false">Berita</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ checkRouteActive('berita-sekolah') }}"
                                    href="{{ url('berita-sekolah') }}">Berita Sekolah</a></li>
                            <li><a class="dropdown-item" {{ checkRouteActive('berita-umum') }}
                                    href="{{ url('berita-umum') }}">Berita Umum</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">Informasi</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item {{ checkRouteActive('kalender-akademik') }}"
                                    href="{{ url('kalender-akademik') }}">Kalender Akademik</a></li>
                            <li><a class="dropdown-item {{ checkRouteActive('beasiswa') }}"
                                    href="{{ url('beasiswa') }}">Beasiswa</a></li>
                            <li><a class="dropdown-item {{ checkRouteActive('penerimaan-siswa-baru') }}"
                                    href="{{ url('penerimaan-siswa-baru') }}">Penerimaan Siswa baru</a></li>
                            <li><a class="dropdown-item {{ checkRouteActive('informasi-alumni') }}"
                                    href="{{ url('informasi-alumni') }}">Informasi Alumni</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ checkRouteActive('agenda') }}" aria-current="page"
                            href="{{ url('agenda') }}">Agenda</a>
                    </li>
                </ul>

                {{-- <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <button class="btn btn-primary">Button</button>
                </div> --}}
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('isi')

    </div>

    <div class="container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.8180321829004!2d109.329896!3d-0.021776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d58f6738b9437%3A0xa967ded534725396!2sSMA%20Islam%20Bawari%20Plus!5e0!3m2!1sid!2sid!4v1694784635237!5m2!1sid!2sid"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">© 2023 SISKOM Untan, A | R </span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted"
                        href="https://www.youtube.com/channel/UCtV9Alrgh8OZQ9UFtndUM6g"><img class="bi"
                            width="24" height="24"src="{{ asset('Sma/youtube.png') }}"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/smaislambawari/?hl=id"><img
                            class="bi" width="24" height="24"
                            src="{{ asset('Sma/instagram.png') }}"></a></li>
                <li class="ms-3"><a class="text-muted" href="https://wa.me/+6281347414738"><img class="bi"
                            width="24" height="24" src="{{ asset('Sma/whatsapp.png') }}">
                    </a></li>
            </ul>
        </footer>
    </div>
</body>
@yield('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>


</html>

@php
    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
