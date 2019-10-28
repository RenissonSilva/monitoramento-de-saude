@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="cardPainel">
                <center>
                    <div class="card-header">Painel de controle - Médico</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a class="linkHome buttonPainel" href="{{ route('adicionar.checkup') }}">Cadastrar um novo check-up</a>
                        <a class="linkHome buttonPainel" href="{{ route('listagem.checkup') }}">Listagem de check-ups</a>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
