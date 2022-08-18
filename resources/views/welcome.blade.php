<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/icon.svg">

        <title>QubePOS</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <header>
                    <nav class="navbar navbar-light navbar-qube">
                        <div class="container-fluid">
                            <div style="padding-left: 12px">
                                <img src="assets/img/logotype.svg" alt="gambar logo" height="20px">
                            </div>
                            <form class="d-flex" action="{{ route('login') }}">
                                <button class="btn btn-qube" type="submit">Masuk</button>
                            </form>
                        </div>
                    </nav>
            </header>

            <div class="home" id="home">
                <div class="row container home-wrapper justify-content-center align-items-center">
                    <div class="col-8 col-md-8 col-sm-12">
                        <h1 class="heading">
                            <b>Bekerja lebih efisien<br>dengan<span>QubePOS</span></b>
                        </h1>
                        <div class="subheading">
                            <p>Aplikasi kasir online dengan penerapan metode <br> point of sale untuk efisiensi transaksi pada Qube Cafe.</p>
                        </div>
                        <form class="d-flex" action="{{ route('login') }}">
                            <button class="btn btn-qube btn-mulai" type="submit">Mulai Sekarang</button>
                        </form>
                    </div>
                        
                    <div class="col-4 col-md-4 col-sm-12 landing-page">
                        <img src="assets/img/landingpage.svg" alt="gambar landing page" width="400px">
                    </div>
                </div>
            </div>
        </div>
    </body>

    
    <!-- <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
</html>
