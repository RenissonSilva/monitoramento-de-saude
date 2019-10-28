@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card cardCheckup">
                <div class="card-header titleCard">Dashboard Paciente</div>

                <div class="card-body cardList">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><a class="linkHome buttonPainel" href="{{ route('listagem.checkup') }}">Listagem de check-ups</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
