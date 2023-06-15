@extends('app.layout.template')
@section('title', 'Farmacx - Formulario')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Dados do funcionario
                        <a href="{{ url('funcionario.listar') }}" class="btn btn-success btn-sm float-end">
                            Listar funcionarios
                        </a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">
                                {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif
                        @if(Session::has('mensagem_erro'))
                            <div class="alert alert-danger">
                                {{ Session::get('mensagem_erro') }}
                            </div>
                        @endif

                        @if(Route::is('funcionario.index'))
                            {!! Form::model($funcionario,
                                            ['method'=>'PATCH',
                                            'files'=>'True',
                                            'url'=>'funcionario/'.$funcionario->id]) !!}
                            <div class="text-center">
                            </div>
                        @else
                            {!! Form::open(['method'=>'POST', 'files'=>'True', 'url'=>'tipo']) !!}
                        @endif
                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'nome',
                                        null,
                                        ['class'=>'form-control',
                                         'placeholder'=>'Nome',
                                         'required',
                                         'maxlength'=>50,
                                         'autofocus']) !!}
                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::file('',
                                        ['class'=>'form-control  btn-sm']) !!}
                        {!! Form::submit('Salvar',
                                        ['class'=>'float-end btn btn-primary mt-3']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
