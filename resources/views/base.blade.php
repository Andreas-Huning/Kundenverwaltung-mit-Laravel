<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <!-- Stylesheets einbinden -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="container">
        <!-- Navigationsleiste -->
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    <a href="./">Home</a><br>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a><br>
                        <a href="{{ route('kunden_index') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Kunden Übersicht</a><br>
                        <a href="{{ route('kunden_anlegen') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Kunden anlegen</a><br>
                        <a href="{{ route('kontakt_art') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Kontakt Art</a>
                    @else

                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
        @endif

    </nav>
</header>

<main>
    @include('errormsg')
    <!-- Hauptinhalt -->
    <div class="container">
    @yield('content')
    </div>
</main>

<footer class="container">
    <!-- Fußzeile -->
    <br>
    <hr>
    <div class="footer d-flex justify-content-around"> 			
			<a class="impressum-link" href="#">Impressum / Kontakt </a>
			<a class="datenschutz-link" href="#"> Datenschutz </a>
			<p class="copyright"> Copyright &copy; 2024 Andreas Huning </p> 
	</div>
</footer>

<!-- JavaScript-Dateien einbinden -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
