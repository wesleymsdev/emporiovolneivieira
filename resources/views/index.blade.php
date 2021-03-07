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
    <div id="bannerHome">
        <div class="over">

        </div>
    </div>
    <!--<div class="bannerPromoHome" id="bannerPromoHome">
    <x-banner-promotions-web></x-banner-promotions-web>
    </div>-->

    <div class="whatsapp">
        <x-whatsapp-web></x-whatsapp-web>
    </div>
    <div class="title-pages">
        <h1>Produtos em destaque</h1>
        <hr />
    </div>

    <!--Start Products one-->
    <div id="productsHome">
        <div class="banner">
            banner promotion one
        </div>
        @foreach($feactured as $values)
        <div class="product">
            <div class="image">
                <img src="{{ $values->image }}" width="140" height="350" alt="Vinhos, bebidas em atacado armazem vieira" />
            </div>
            <p class="title-product">{{ $values->title }}</p>

            <div class="description">
                <p>{{ $values->description }}</p>
                <small>
                    <span class="description-bold">Graduação alcoólica:</span> 10,8%vol
                </small>
                <small>
                    <span class="description-bold">Volume:</span> 1,5L
                </small>
                <small>
                    <span class="description-bold">Caixa:</span> {{ $values->qtda_per_carton }} unidades | 40x27x29 | 18 Kg
                </small>

                <a href="{{ 'product/'.$values->id }}" class="btn">Ver mais</a>
            </div>
        </div>
        @endforeach
    </div>

    <!--Start Products Thu-->
    <div class="title-pages">
        <h1>Vinhos Empório</h1>
        <hr />
    </div>

    <div id="productsHome">
        @foreach($wines as $values)
        <div class="product">
            <div class="image">
                <img src="{{ $values->image }}" width="140" height="350" alt="Vinhos, bebidas em atacado armazem vieira" />
            </div>
            <p class="title-product">{{ $values->title }}</p>

            <div class="description">
                <p>{{ $values->description }}</p>
                <small>
                    <span class="description-bold">Graduação alcoólica:</span> 10,8%vol
                </small>
                <small>
                    <span class="description-bold">Volume:</span> 1,5L
                </small>
                <small>
                    <span class="description-bold">Caixa:</span> {{ $values->qtda_per_carton }} unidades | 40x27x29 | 18 Kg
                </small>

                <a href="{{ 'product/'.$values->id }}" class="btn">Ver mais</a>
            </div>
        </div>
        @endforeach
    </div>

    </div>

    <!--Start Products Thu-->
    <div class="title-pages">
        <h1>Sucos Empório</h1>
        <hr />
    </div>

    <div id="productsHome">
        @foreach($juices as $values)
        <div class="product">
            <div class="image">
                <img src="{{ $values->image }}" width="140" height="350" alt="Vinhos, bebidas em atacado armazem vieira" />
            </div>
            <p class="title-product">{{ $values->title }}</p>

            <div class="description">
                <p>{{ $values->description }}</p>
                <small>
                    <span class="description-bold">Graduação alcoólica:</span> 10,8%vol
                </small>
                <small>
                    <span class="description-bold">Volume:</span> 1,5L
                </small>
                <small>
                    <span class="description-bold">Caixa:</span> {{ $values->qtda_per_carton }} unidades | 40x27x29 | 18 Kg
                </small>

                <a href="{{ 'product/'.$values->id }}" class="btn">Ver mais</a>
            </div>
        </div>
        @endforeach
    </div>


    <div class="title-pages" id="wineries">
        <h1>Alguns Parceiros</h1>
        <hr />
    </div>
    <div class="divider-20"></div>
    <!--Start Logo Wineries-->
    <div id="wineries-logo">
        <x-providers-logo-web></x-providers-logo-web>
    </div>
    <div class="divider-20"></div>

    <div class="title-pages">
        <h1>Outros Produtos</h1>
        <hr />
    </div>

    <div id="productsHome">
        @foreach($sparkling as $values)
        <div class="product">
            <div class="image">
                <img src="{{ $values->image }}" width="140" height="350" alt="Vinhos, bebidas em atacado armazem vieira" />
            </div>
            <p class="title-product">{{ $values->title }}</p>

            <div class="description">
                <p>{{ $values->description }}</p>
                <small>
                    <span class="description-bold">Graduação alcoólica:</span> 10,8%vol
                </small>
                <small>
                    <span class="description-bold">Volume:</span> 1,5L
                </small>
                <small>
                    <span class="description-bold">Caixa:</span> {{ $values->qtda_per_carton }} unidades | 40x27x29 | 18 Kg
                </small>

                <a href="{{ 'product/'.$values->id }}" class="btn">Ver mais</a>
            </div>
        </div>
        @endforeach
    </div>

    <!--Start footer-->
    <footer id="footer">
        <x-footer-web></x-footer-web>
    </footer>

    <!--Scripts Start-->
    <script src="{{asset('js/utils.js')}}"></script>
    <!--End Script Menu Mobile-->
</body>

</html>