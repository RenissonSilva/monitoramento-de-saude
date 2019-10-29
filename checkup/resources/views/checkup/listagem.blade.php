@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card cardCheckup">
                <ol class="breadcrumb titleCard">
                    <li class="breadcrumb-item active titleCheckup">Check-ups</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success" role="alert" id="sucessoCriacao"><strong>{{session('success')}}</strong></div>
                    @endif

                    <p>
                        <a class="btnNovoCheckup" href="{{ route('adicionar.checkup') }}">Novo Check-up</a>
                    </p>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>ID</th>
                               <th>Nome do paciente</th>
                               <th>Peso</th>
                               <th>Altura</th>
                               <th>Data do check-up</th>
                               <th>Detalhes</th>
                               <th>Editar</th>
                               <th>Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($checkups as $checkup)
                            <tr>
                                <th scope="row">{{ $checkup->id }}</th>
                                <td>{{ $checkup->user->name}}</td>
                                <td>{{ $checkup->peso }}</td>
                                <td>{{ $checkup->altura }}</td>
                                <td>{{ date('d-m-Y', strtotime($checkup->data_checkup))}}</td>
                                <td>
                                <a href="{{ route('visualizar.checkup', $checkup->id) }}" class="btnDetalhes">Detalhes</a>
                                </td>
                                <td>
                                    <a href="{{ route('edit.checkup', $checkup->id) }}" class="btn btn-success">Editar</a>
                                </td>
                                <td>
                                <a href="{{ route('deletar.checkup', $checkup->id) }}" class="btnDeletar">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div align="center">
                        {!! $checkups->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
