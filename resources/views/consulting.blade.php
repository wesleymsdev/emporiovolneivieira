<!DOCTYPE html>
<html lang="pt-br">

<head>
    <x-head></x-head>
</head>

<body>
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

    <main id="consultoria">
        <div class="overlay"></div>

        <div class="container">
            <img src="{{asset('img/logotipos/100x100_armazem_vieira.png')}}" width="100" height="100" alt="Logotipo" />
            <p>Orientações técnicas de harmonização de vinhos com alimentos; informações de quais vinhos são mais adequados
                para cada momento, para apreciar as belezas das mais diversas combinações da comida, numa escolha consciente,
                visando sempre a mais favorável relação de sabores.</p>
            <a href="#" type="button" class="btn">Fale Conosco</a>
        </div>
    </main>


    <!--Start footer-->

    <footer id="footer">
        <x-footer-web></x-footer-web>
    </footer>

    <!--Script Menu Mobile Start-->
    <script src="{{asset('js/utils.js')}}"></script>
    <!--End Script Menu Mobile-->
</body>

</html>