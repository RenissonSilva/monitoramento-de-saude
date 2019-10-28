@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Produtos</li>
                    </ol>

                <div class="card-body">
                    <form action="{{route('salvar.checkup')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="data_checkup">Data do check-up:</label>  
                            <input type="date" value="{{old('data_checkup')}}" name="data_checkup" class="form-control"/>
                        </div>
                        @if($errors->any())
                            @foreach($errors->get('data_checkup') as $message)
                                <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                                </div>
                            @endforeach 
                        @endif

                        <div class="form-group">
                            <label for="peso">Peso:</label>  
                            <input type="number" name="peso" class="form-control" value="{{old('peso')}}" placeholder="70.5"/>
                        </div>
                        @if($errors->any())
                            @foreach($errors->get('peso') as $message)
                                <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                                </div>
                            @endforeach 
                        @endif

                        <div class="form-group">
                            <label for="altura">Altura:</label>  
                            <input type="number" name="altura" class="form-control" value="{{old('altura')}}" placeholder="1.75"/>
                        </div>
                        @if($errors->any())
                            @foreach($errors->get('altura') as $message)
                                <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                                </div>
                            @endforeach 
                        @endif

                        <div class="form-group">
                            <label for="pressao">Pressão arterial:</label>  
                            <input type="text" name="pressao" value="{{old('pressao')}}" class="form-control" placeholder="Elevada"/> 
                        </div>
                        @if($errors->any())
                            @foreach($errors->get('pressao') as $message)
                                <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                                </div>
                            @endforeach 
                        @endif 

                        <div class="form-group">
                            <label for="glicose">Nível de glicose:</label>  
                            <input type="number" name="glicose" value="{{old('glicose')}}" class="form-control" placeholder="90"/>
                        </div>
                        @if($errors->any())
                            @foreach($errors->get('glicose') as $message)
                                <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                                </div>
                            @endforeach 
                        @endif 

                        <div class="form-group">
                            <label for="colesterol_LDL">Colesterol LDL:</label>  
                            <input type="number" name="colesterol_LDL" value="{{old('colesterol_LDL')}}" class="form-control" placeholder="120"/>
                        </div>
                        @if($errors->any())
                            @foreach($errors->get('colesterol_LDL') as $message)
                                <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                                </div>
                            @endforeach 
                        @endif 
                         
                        <div class="form-group">
                            <label for="colesterol_HDL">Colesterol HDL:</label>  
                            <input type="number" name="colesterol_HDL" value="{{old('colesterol_HDL')}}" class="form-control" placeholder="5000"/>
                        </div>
                        @if($errors->any())
                            @foreach($errors->get('colesterol_HDL') as $message)
                                <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                                </div>
                            @endforeach 
                        @endif 

                        <div class="form-group">
                            <label for="observacoes">Observações:</label>  
                            <input type="number" name="observacoes" value="{{old('observacoes')}}" class="form-control" placeholder="45"/>
                        </div>
                        @if($errors->any())
                            @foreach($errors->get('observacoes') as $message)
                                <div class="alert alert-danger" role="alert">
                                  {{ $message }}
                                </div>
                            @endforeach 
                        @endif 

                        <button type="submit" class="btn btn-success">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
