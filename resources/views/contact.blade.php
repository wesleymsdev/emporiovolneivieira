<!DOCTYPE html>
<html lang="pt-br">

<head>
    <x-head></x-head>
</head>

<body id="body">
    <!--Over Menu Mobile Start-->
    <div id="overlay" class=" ">
        <x-menu-mobile-web></x-menu-mobile-web>
    </div>
    <!--End Over Menu Mobile-->
    <!--Header Start -->
    <header class="header">
        <x-header-web></x-header-web>
    </header>
    <!--End Header -->

    <main id="top-pages">

        <h1>Comece agora a viver o melhor do
            mundo do vinho!</h1>
        <p>Só aqui você encontra os rótulos ideais para
            todos os seus momentos.</p>

    </main>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert-danger">{{ $error }}</div>
    @endforeach
    @endif

    @if (session('response'))
    <div class="alert-success">
        {{ session('response') }}
    </div>
    @endif
    <div id="sessionOneContact">

        <div class="sessionTwo">
            <div class="banner">
                <div class="overlay">
                    <h1>Momentos especiais merecem o melhor!</h1>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <form method="POST" action="/contact" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" id="nome" required />
                <label for="nome">Nome</label>

                <input type="text" name="company" id="company" />
                <label for="company">Empresa</label>

                <input type="mail" name="email" id="email" required />
                <label for="email">E-mail</label>

                <input type="phone" name="phone" id="phone" required />
                <label for="phone">Telefone</label>

                <input type="text" name="topic" id="topic" />
                <label for="topic">assunto</label>

                <label for="terms"></label>
                <div class="terms">
                    <input type="checkbox" class="btn-terms" name="terms" id="terms" required />
                    <small>Estou ciente da proibição legal contida no art. 81, II da Lei nº .069/90 de venda de bebidas
                        alcoólicas para crianças e adolescentes menores de 18 anos de idade.</small>
                </div>

                <div class="footer-form">
                    <button type="submit" class="btn-cadastro">Enviar
                    </button>
                </div>
            </form>

        </div>

    </div>

    <!--Start footer-->

    <footer id="footer">
        <x-footer-web></x-footer-web>
    </footer>

    <!--Script Menu Mobile Start-->
    <script src="{{asset('resources/js/utils.js')}}"></script>
    <!--End Script Menu Mobile-->
</body>

</html>