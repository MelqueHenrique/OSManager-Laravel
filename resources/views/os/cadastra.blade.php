@extends('app')

@section('content')
    <div class="container">

        @if(old('nome') && empty($errors->all()))
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <p>Os de <strong>{{old('nome')}}</strong> adicionada com sucesso.</p>
            </div>
        @endif

        @if(!empty($errors->all()))
            <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            @foreach($errors->all() as $erro)
                <p>{{$erro}}</p>
            @endforeach
            </div>
        @endif
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Criar Ordem de Serviço</div>

                    <div class="panel-body">

                        <form action="" method="post">

                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="form-group row">
                                <label for="example-text-input" class="col-xs-2 text-right col-form-label">Cliente:</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="text" name="nome" value="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-xs-2 text-right col-form-label">Email:</label>
                                <div class="col-xs-10">
                                    <input class="form-control" type="email" value="" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-xs-2 text-right col-form-label">Descrição:</label>
                                <div class="col-xs-10">
                                    <textarea class="form-control" name="descricao" cols="30" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-xs-2 text-right col-form-label">Valor do serviço:</label>
                                <div class="col-xs-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">R$</span>
                                        <input type="number" value="" name="preco" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xs-4 col-xs-offset-2">
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                          <input type="checkbox" name="pago" >
                                      </span>
                                        <input type="text" value="PAGO" readonly="readonly" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <input class="btn btn-primary col-xs-4 col-xs-offset-5" type="submit" value="Cadastrar">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
