<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <x-head></x-head>
</head>

<body id="body">
    <div id="modal" class="">

        <div class="container">
            <img id="close" src="{{ asset('img/icones/btn-close.svg') }}" width="24" height="24" alt="new-category icon" />

            <h2>Cadastrar Novo Produto</h2>

            <form method="POST" action="/new-product" enctype="multipart/form-data">
                @csrf
                <div class="col">
                    <label for="category">categoria de produto</label>
                    <select name="category_id" id="category">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                        @endforeach
                    </select>

                    <label for="title">Titulo do produto:</label>
                    <input type="text" id="title" name="title" />

                    <label for="winery">Fornecedor:</label>
                    <select name="winery_id" id="winery">
                        @foreach($suppliers as $supplier)
                        <option value="{{$supplier->id}}">{{$supplier->title}}</option>
                        @endforeach
                    </select>

                    <label for="qtda_per_carton">Qtda por caixa:</label>
                    <input type="text" id="qtda_per_carton" name="qtda_per_carton" />

                    <label for="country_of_origin">País de origem:</label>
                    <input type="text" id="country_of_origin" name="country_of_origin" />

                    <label for="region">Região:</label>
                    <input type="text" id="region" name="region" />

                    <label for="classification">Classificação:</label>
                    <input type="text" id="classification" name="classification" />

                    <label for="description">Descrição:</label>
                    <textarea id="description" class="description" name="description" rows="3" cols="50"></textarea>

                    <label for="type_of_grape">Tipo de uva:</label>
                    <input type="text" id="type_of_grape" name="type_of_grape" />

                    <label for="harvest">Safra:</label>
                    <input type="text" id="harvest" name="harvest" />

                    <label for="temperature">Temperatura:</label>
                    <input type="text" id="temperature" name="temperature" />

                </div>
                <div class="col">
                    <label>Características do Produto</label>

                    <input type="text" id="olfactory" name="olfactory" />
                    <label for="olfactory">Oufativa:</label>

                    <input type="text" id="visual" name="visual" />
                    <label for="visual">Visual:</label>

                    <input type="text" id="taste" name="taste" />
                    <label for="taste">Gustativa:</label>

                    <textarea id="harmonization" class="description" name="harmonization" rows="3" cols="50"></textarea>
                    <label for="harmonization">Harmonização:</label>

                    <label for="upload-image" class="upload-image">
                        <input type="file" id="upload-image" name="image" />
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
                        Imagem do produto</label>
                    <small>formato png - 220x550</small>

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
            <h2>Produtos Cadastrados</h2>

            <div class="list-product">

                @foreach($products as $product)
                <div class="product">
                    <img src="{{ asset('storage/'.$product->image) }}" width="220" height="550" alt="vinhos" />
                    <div class="description">
                        <h3>{{ $product->title }}</h3>
                        <small>Qtda - {{ $product->qtda_per_carton }} por caixa</small>
                        <form action="#">
                            <input type="hidden" id="id-wine" name="id-wine" value="1">
                            <a href="" class="btn-destroy">Excluir</a>
                            <a href="" class="btn-edit">Editar</a>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>

            <nav class="pagination">
                <ul>
                    <li><a href="">Prev</a></li>
                    <li><a href="">Next</a></li>
                </ul>
            </nav>

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
    <script src="{{asset('js/salutation.js')}}"></script>
    <!--End Script Menu Mobile-->
</body>

</html>