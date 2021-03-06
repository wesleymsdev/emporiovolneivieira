<!DOCTYPE html>
<html lang="pt-br">

<head>
    <x-head></x-head>
</head>

<body id="body">
    <div id="modal" class="">

        <div class="container">
            <img id="close" src="{{ asset('img/icones/btn-close.svg') }}" width="24" height="24" alt="new-category icon" />
            <h2>Cadastrar nova categoria</h2>
            <form method="POST" action="/admin/categories" enctype="multipart/form-data">
                @csrf

                <input type="text" id="category" name="category" />
                <label for="category">Titulo da categoria:</label>
                <button type="submit" class="btn-submit">Cadastrar</button>
            </form>
        </div>
    </div>
    <!--Overlay Menu Mobile Start-->
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
            <h2>Categorias Cadastradas</h2>

            <div class="list_of_categories">

                <ul>
                    @foreach($categories as $category)
                    <li>{{ $category->category }}<a href="">Excluir</a></li>
                    @endforeach
                </ul>

            </div>

            <img class="new" src="{{ asset('img/icones/new.svg') }}" width="64" height="64" alt="new icon" />

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

        </div>

    </div>

    <!--Scripts Start-->
    <script src="{{asset('js/utils.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <!--End Script Menu Mobile-->
</body>

</html>