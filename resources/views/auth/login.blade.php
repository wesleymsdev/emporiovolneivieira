<!DOCTYPE html>
<html lang="pt-br">

<head>
    <x-head></x-head>
</head>

<body>

    <div id="login">
        <div class="container alert">
            <div class="header-login">
                <img src="{{ asset('img/logotipos/100x100_armazem_vieira.png') }}" width="70" height="70" alt="logo" />
            </div>
            <small>Faça login para ter acesso ao sistema</small>
            <img src="{{ asset('img/logotipos/100x100_armazem_vieira.png') }}" width="70" height="70" alt="logo" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" id="username" required autofocus />
                <label for="username">email</label>
                <input type="password" name="password" id="password" required autocomplete="current-password" />
                <label for="password">Senha</label>
                <button type="submit" class="btn-submit">{{ __('Entrar') }}</button>
            </form>
            <div class="message">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24.984" viewBox="0 0 25 24.984">
                    <g transform="translate(0 -0.168)">
                        <ellipse cx="12.5" cy="12.492" rx="12.5" ry="12.492" transform="translate(0 0.168)" fill="#e04f5f" />
                        <g transform="translate(22.363 12.66) rotate(135)">
                            <rect width="2.734" height="13.949" transform="translate(5.606 0)" fill="#fff" />
                            <rect width="13.949" height="2.734" transform="translate(0 5.605)" fill="#fff" />
                        </g>
                    </g>
                </svg> -->
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
            </div>
        </div>
        <div class="content">
            <div class="overlay">
                <img src="{{ asset('img/logotipos/100x100_armazem_vieira.png') }}" width="70" height="70" alt="logo" />
                <small>Desde 2000</small>
            </div>
        </div>

    </div>
    <!--Script Menu Mobile Start-->
    <script src="assets/js/utils.js"></script>
    <!--End Script Menu Mobile-->
</body>

</html>