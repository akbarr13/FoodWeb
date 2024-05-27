<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    @yield('css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul class="nav-ul">
                <li><a href="/"><img width="160px" src="{{ asset('logo.png') }}" alt="logo"></a></li>
                <li>
                    <form action="/p" method="get">
                        <div class="search-container">
                            <i><img src="{{ asset('search.png') }}" alt="search"></i>

                            <input onsubmit="search()" type="search" name="search" id="search_input"
                                placeholder="Lagi cari apa?">

                        </div>
                    </form>
                </li>
                <ul class="nav-right-content">
                    <li><a href="/cart"><img id="cart-btn" src="{{ asset('shopping-cart.png') }}" alt="cart"></a>
                    </li>
                    @guest
                        <li class="login-list"><a class="login-link" href="/login"><button
                                    id="login-btn">Login</button></a></li>
                    @endguest
                    @auth
                        <a href="/profile">
                            <img src="{{ asset('man.png') }}" alt="" width="50px">
                        </a>
                    @endauth

                </ul>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <script>
        function search() {

        }
    </script>
</body>

</html>
