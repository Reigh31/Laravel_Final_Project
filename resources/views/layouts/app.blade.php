<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    @vite('resources/css/app.css') <!-- For Tailwind CSS -->
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navigation -->
    <nav class="bg-blue-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-xl font-bold">MyApp</a>
            <div>
                <a href="{{ route('products.index') }}" class="text-white px-4">Products</a>
                @auth
                    <a href="{{ route('profile.edit') }}" class="text-white px-4">Profile</a>
                    <a href="{{ route('logout') }}" class="text-white px-4" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-white px-4">Login</a>
                    <a href="{{ route('register') }}" class="text-white px-4">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto p-4">
        @yield('content')
    </main>

</body>
</html>
