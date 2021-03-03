<!DOCTYPE html>
<html lang="pt-br">

<head>
    <x-head></x-head>
</head>

<body id="body">
    <div id="modal" class="">

        <div class="container">
            <img id="close" src="{{ asset('img/icones/btn-close.svg') }}" width="24" height="24" alt="new-category icon" />
            <h2>Cadastrar novo usuário</h2>

            <form method="POST" action="{{ url('/user') }}">
                @csrf
                <input type="text" id="name" name="name" />
                <label for="name">Nome:</label>

                <input type="text" id="email" name="email" />
                <label for="email">Email:</label>

                <input type="password" id="password" name="password" />
                <label for="password">Senha:</label>

                <button type="submit" class="btn-submit">Cadastrar</button>

            </form>

        </div>
    </div>
    <!--Over Menu Mobile Start-->
    <div id="overlay" class=" ">
        <x-menu-mobile-admin></x-menu-mobile-admin>
    </div>
    <!--End Over Menu Mobile-->
    <!--Header Start -->
    <header class="header-admin">
        <x-header-admin></x-header-admin>
    </header>
    <!--End Header -->

    <div id="admin">

        <x-new-header-admin></x-new-header-admin>

        <x-nav-left-admin></x-nav-left-admin>

        <div class="container">
            <h2>Relação de usuários Armazem Vieira</h2>

            <div class="registered-users">


                <div class="card">
                    <p>Wesley Franca</p>
                    <small>Email: teste@teste.com.br</small>
                    <small>Função: Manager</small>
                </div>


            </div>

            <img class="new" src="{{ asset('img/icones/new.svg') }}" width="54" height="54" alt="new icon" />
        </div>
    </div>

    <!--Scripts Start-->
    <script src="{{asset('js/utils.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <!--End Script Menu Mobile-->


</body>

</html>