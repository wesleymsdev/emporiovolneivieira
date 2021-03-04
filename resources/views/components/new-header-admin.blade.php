<div class="teste">
    <div class="logo">
        <picture>
            <img src="{{ asset('img/logotipos/100x100_armazem_vieira.png') }}" width="70" height="70" alt="logo" />
        </picture>
    </div>
    <div class="log">

        <div class="image">Foto</div>

        <div class="user-log">
            <p>{{ Auth::user()->name }}</p>
            <small>Seja bem vindo(a)</small>
        </div>
        <form method="POST" action="{{ route('logout') }}" enctype="multipart/form-data">
            @csrf
            <img src="{{ asset('img/icones/exit.svg') }}" width="24" height="24" alt="exit icon" />

            <a :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">Sair</a>

        </form>


    </div>
</div>