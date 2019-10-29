@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('listagem.checkup') }}">Edit Checkups</a></li>
                    </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="{{ route('update.checkup') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$checkup->id}}">
                    <div class="form-group">
                        <label for="data_checkup">Data do check-up:</label>
                        <input class="form-control" name="data_checkup" value="{{ date('d-m-Y  H:m:s', strtotime($checkup->data_checkup))}}" type="text" readonly>
                    </div>
                    <div class="form-group">
                        <label for="peso">Peso:</label>
                        <input class="form-control" name="peso" type="text" value="{{ $checkup->peso }}">
                    </div>
                    <div class="form-group">
                        <label for="altura">Altura:</label>
                        <input class="form-control" name="altura" value="{{ $checkup->altura }}" type="number">
                    </div>
                    <div class="form-group">
                        <label for="pressao">Pressão arterial:</label>
                        <input class="form-control" name="pressao" value="{{ $checkup->pressao }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="glicose">Nível de glicose:</label>
                        <input class="form-control" name="glicose" value="{{ $checkup->glicose }}" type="number">
                    </div>
                    <div class="form-group">
                        <label for="colesterol_LDL">Colesterol LDL:</label>
                        <input class="form-control" name="colesterol_LDL" value="{{ $checkup->colesterol_LDL }}" type="number">
                    </div>
                    <div class="form-group">
                        <label for="colesterol_HDL">Colesterol HDL:</label>
                        <input class="form-control" name="colesterol_HDL" value="{{ $checkup->colesterol_HDL }}" type="number">
                    </div>
                    <div class="form-group">
                        <label for="observacoes">Observações:</label>
                    <textarea class="form-control" name="observacoes"  type="number">{{ $checkup->observacoes}}</textarea>
                    </div>
                    <button type="submit" class="linkHome">Adicionar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
