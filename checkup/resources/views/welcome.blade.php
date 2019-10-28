<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monitoramento de saúde</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="teste">
            <div class="flex-center position-ref full-height">

                <div class="content">
                    <div class="title m-b-md">
                        <strong>Monitoramento de saúde</strong>
                    </div>
                    <div class="textoExp">
                        Veja on-line os dados do seu check-up. <br> 
                        Praticidade na hora de ver o resultado de seus exames.
                    </div> 
                </div>

            </div>
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a class="linkHome" href="{{ url('/home') }}">Início</a>
                        @else
                            <a class="linkHome" href="{{ route('login') }}">Entrar</a>

                            @if (Route::has('register'))
                                <a class="linkHome" href="{{ route('register') }}">Cadastrar</a>
                            @endif
                        @endauth
                    </div>
                @endif
        </div>
    </body>
</html>