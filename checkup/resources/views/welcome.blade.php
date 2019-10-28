<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Monitoramento de saúde</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Patua+One&display=swap');
            html, body {
                background-color: #021859;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-size: cover;
                background-blend-mode: luminosity;
                background-image: url({{ asset('imgs/bg-home.jpg')}});
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                color:#f073ad;
                position: fixed;
                top:3%;
                left:8%;
                font-size:3em;
                text-shadow: 2px 2px 3px #032CA6;
            }
            .linkHome{
                background-color: #f073ad;
                color: #000!important;
                border:3px solid #f073ad;
                transition-duration: 0.3s;
                border-radius:42px;
                padding:16px 31px!important;
            }  
            .linkHome:hover{
                background-color: #f073ad;
                color: black!important;
                box-shadow: -4px 4px 3px 1px #c45287;
            } 
            .links ,.linkHome{
                margin: 15px;
            }
            .textoExp{
                color:#f073ad;
                font-size: 3em;
                text-align: left;
                font-family: 'Patua One', cursive;
                text-shadow: 2px 2px 3px #000;
                -webkit-text-stroke-width: 1px;
                -webkit-text-stroke-color: #032CA6;

            }
        </style>
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