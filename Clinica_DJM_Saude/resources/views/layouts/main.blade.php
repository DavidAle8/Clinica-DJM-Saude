<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/CSS/estilos.css">
        <script src="/JS/scripts.js"></script>

        <!-- /Google Fonts-->
        
        <!-- Roboto -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- Bebas Neue -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

        <!-- Fonte Lobster-->
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

        <!-- Google Fonts\-->

        <!-- CSS Bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- CSS Bootstrap-->

    </head>

    <body> 

        <div class="container text-center">
            <a href="/" class="logo-link"> 
                <img src="/IMG/logo.png" alt="Meu Site" class="logo"> 
            </a>
        </div>    
        
        <main>

            <div class="container-fluid">

                <div class="row">

                    @if (session('msg'))
                        <p class="msg"> {{ session('msg') }} </p>
                    @endif

                </div>

            </div>

        </main>
        
        @yield('conteudo');
        <div class="footer"> 
            <footer>
                <p> Clínica DJM Saúde &copy; 2024</p>
            </footer>
        </div>
        
        <!-- Ionicons-->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!-- Ionicons-->
    </body>

</html>
