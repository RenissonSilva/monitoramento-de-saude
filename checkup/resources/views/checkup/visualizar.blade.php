@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card cardCheckup">
                    <ol class="breadcrumb titleCard">
                        <li class="breadcrumb-item titleCheckup"><a id="aC" href="{{ route('listagem.checkup') }}">Checkups</a></li>
                    </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="data_checkup">Data do check-up:</label>
                        <input class="form-control" name="data_checkup" value="{{ date('d-m-Y  H:m:s', strtotime($checkup->data_checkup))}}" type="text" readonly>
                    </div>
                    <div class="form-group">
                        <label for="peso">Peso:</label>
                        <input class="form-control" name="peso" type="text" value="{{ $checkup->peso }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="altura">Altura:</label>
                        <input class="form-control" name="altura" value="{{ $checkup->altura }}" type="number" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pressao">Pressão arterial:</label>
                        <input class="form-control" name="pressao" value="{{ $checkup->pressao }}" type="text" readonly>
                    </div>
                    <div class="form-group">
                        <label for="glicose">Nível de glicose:</label>
                        <input class="form-control" name="glicose" value="{{ $checkup->glicose }}" type="number" readonly>
                    </div>
                    <div class="form-group">
                        <label for="colesterol_LDL">Colesterol LDL:</label>
                        <input class="form-control" name="colesterol_LDL" value="{{ $checkup->colesterol_LDL }}" type="number" readonly>
                    </div>
                    <div class="form-group">
                        <label for="colesterol_HDL">Colesterol HDL:</label>
                        <input class="form-control" name="colesterol_HDL" value="{{ $checkup->colesterol_HDL }}" type="number" readonly>
                    </div>
                    <div class="form-group">
                        <label for="observacoes">Observações:</label>
                    <textarea class="form-control" name="observacoes" value="{{ $checkup->observacoes}}" type="number" readonly>{{ $checkup->observacoes}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
