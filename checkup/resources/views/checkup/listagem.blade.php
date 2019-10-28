@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Check-ups</li>
                </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        <a class="btn btn-primary" href="{{ route('adicionar.checkup') }}">Novo Check-up</a>
                    </p>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                               <th>ID</th>
                               <th>Data do check-up</th> 
                               <th>Peso</th> 
                               <th>Altura</th> 
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($checkups as $checkup)
                            <tr>
                                <th scope="row">{{ $checkup->id }}</th>
                                <td>{{ $checkup->data_checkup }}</td>
                                <td>{{ $checkup->peso }}</td>
                                <td>{{ $checkup->altura }}</td>
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
