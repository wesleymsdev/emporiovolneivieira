<!DOCTYPE html>
<html lang="pt-br">

<head>
    <x-head></x-head>
</head>

<body id="body">
    <div id="modal" class="">

        <div class="container">
            <img id="close" src="{{ asset('img/icones/btn-close.svg') }}" width="24" height="24" alt="new-category icon" />
            <h2>Cadastrar novo País</h2>

            <form method="POST" action="/admin/countries" enctype="multipart/form-data">
                @csrf
                <div class="col">
                    <input type="text" id="name" name="name" />
                    <label for="name">Nome:</label>

                    <input type="text" id="uf" name="uf" />
                    <label for="uf">UF:</label>

                    <label for="upload-image" class="upload-image">
                        <input type="file" id="upload-image" name="flag" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="32.972" viewBox="0 0 42 32.972">
                            <g transform="translate(0 -55.032)">
                                <g transform="translate(0 55.032)">
                                    <g transform="translate(0 0)">
                                        <path d="M34.994,65.957a14.436,14.436,0,0,0-28.4,2.467A7.874,7.874,0,0,0,7.906,84.067h6.562V81.443H7.906a5.249,5.249,0,0,1,0-10.5,1.312,1.312,0,0,0,1.312-1.312,11.811,11.811,0,0,1,23.4-2.3,1.312,1.312,0,0,0,1.116,1.05,6.562,6.562,0,0,1-.892,13.058H27.592v2.625h5.249a9.186,9.186,0,0,0,2.152-18.111Z" transform="translate(0 -55.032)" />
                                        <path d="M186.284,249.393l-5.249,5.249,1.85,1.85,3.018-3.005v12.586h2.625V253.487l3.005,3.005,1.85-1.85-5.249-5.249A1.312,1.312,0,0,0,186.284,249.393Z" transform="translate(-166.186 -233.1)" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Flag país</label>
                    <small>formato png/svg</small>

                    <button type="submit" class="btn-submit">Cadastrar</button>
                </div>
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

            <h2>Países Cadastrados</h2>

            <div class="list-of-countries">
                @foreach($countries as $country)
                <div class="countries">
                    <img src="{{ asset('storage/'.$country->flag) }}" width="50px" height="50px" alt="">
                    <h3>{{ $country->name }}</h3>
                    <small>{{ $country->uf }}</small>
                    <form action="#">
                        <input type="hidden" id="name" name="name" value="1">
                        <input type="hidden" id="uf" name="uf" value="1">
                        <a href="#" class="btn-destroy">Excluir</a>
                        <a href="#" class="btn-edit">Editar</a>
                    </form>
                </div>
                @endforeach
            </div>


            <img class="new" src="{{ asset('img/icones/add.svg') }}" width="44" height="44" alt="new icon" />
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
            <footer class="footer-admin">
                <nav class="pagination">
                    <ul>
                        <li><a href="">Prev</a></li>
                        <li><a href="">Next</a></li>
                    </ul>
                </nav>
            </footer>
        </div>

    </div>

    <!--Scripts Start-->
    <script src="{{asset('js/utils.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <script src="{{asset('js/salutation.js')}}"></script>
    <!--End Script Menu Mobile-->

</body>

</html>