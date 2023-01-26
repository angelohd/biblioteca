@extends('in.layout.layout')
@section('info')
    <li class="breadcrumb-item">Cadastros</li>
    <li class="breadcrumb-item active"><strong>Categorias do material</strong></li>
@endsection
@section('corpo')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Lista de livros no sistema</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Categoria</th>
                                    <th>Criado em</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($livros as $livro )
                                <tr>
                                    <td>{{$livro->id}}</td>
                                    <td>{{$livro->categoria}}</td>
                                    <td>{{$livro->created_at}}</td>
                                    <td>
                                        <button class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @include('in.paginas.datatable')
@section('js')
    <script>
        $(".")
    </script>
@endsection
@endsection
