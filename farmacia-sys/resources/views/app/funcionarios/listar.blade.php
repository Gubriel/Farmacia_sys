@extends('app.layout.template')
@section('links')
<ul class="nav justify-content-end">

    <li class="nav-item">
        <a class="nav-link nav-txt-color" href="#">Logout</a>
    </li>
</ul>
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Lista de Funcionarios
                    </div>
                    <div class="card-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">
                                {{ Session::get('mensagem_sucesso') }}
                            </div>
                        @endif
                        <table class="table table-sm table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nome</th>
                                    <th>RG</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($funcionarios as $funcrio)
                                    <tr>
                                        <td>{{ $funcrio->id }}</td>
                                        <td>{{ $funcrio->nome }}</td>
                                        <td>{{ $funcrio->rg }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">
                                            Não há itens para listar!
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pagination justify-content-center">
                            {{ $funcionarios->links() }}
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{url('funcrios/report')}}" target="_blank" class="btn btn-sm btn-warning">
                            Relatório
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
