<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style-helpdesk.css">
    <script src="https://kit.fontawesome.com/9e57034c47.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style-datatables.css"/>
   
</head>
<body>
    <div class="container-lt">
        <div class="conteudo-lt">
            <div class="logo-mn-lt">
                <div class="logo-lt">
                    <a href="/"><img src="/img/icon_help-desk.png" alt=""></a>
                </div>
                <div class="opcoes-mn-lt">
                    <ul>
                        <a href=""><li class=@yield('DashAtivo')><i class="fa-solid fa-table-columns"></i></li></a>
                        <a href="/tickets"><li class=@yield('TicketsAtivo')><i class="fa-solid fa-headset"></i></li></a>
                        <a href="/abrirticket"><li class=@yield('TicketAtivo')><i class="fa-solid fa-plus"></i></li></a>
                    </ul>
                </div>
            </div>
            <div class="user-lt">
                <a href=""><i class="fa-regular fa-user"></i></a>
            </div>
        </div>
    </div>
    <div class="container-site">
        <div class="conteudo-site">
            <div class="navtop">
                <div class="navbar-hamb-input">
                    <div class="navtop-hamburger">
                        <a href=""><i class="fa-solid fa-bars"></i></a>
                    </div>
                    <div class="navbar-input">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="text" name="" placeholder="Pesquisar...">
                    </div>
                </div>
                <div class="navbar-alert-user">
                    <div class="navbar-alert">
                        <ul>
                            <a href=""><li><i class="fa-solid fa-triangle-exclamation"></i></li></a>
                            <a href=""><li><i class="fa-solid fa-file-invoice"></i></li></a>
                        </ul>
                    </div>
                    <div class="navbar-user">
                        <img src="/img/imagem-do-usuario.png" alt="">
                        <p>Gustavo Rieg</p>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>

    
</body>
</html>
