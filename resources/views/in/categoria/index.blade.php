@extends('in.layout.layout')
@section('info')
    <li class="breadcrumb-item">Cadastros</li>
    <li class="breadcrumb-item active"><strong>Categorias do material</strong></li>
@endsection
@section('corpo')
    <div class="row">
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Inserir categoria</h5>
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
                    <form class="formcategoria" method="POST" action="{{route("biblioteca.categorias.addcategoria")}}">
                        @csrf
                        <div class="form-group row"><label class="col-lg-2 col-form-label">Categoria</label>
                            <div class="col-lg-10">
                                <input type="text" placeholder="Informatica" class="form-control" name="categoria">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-sm btn-primary btnsavecategoria" type="submit">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Lista de categorias no sistema</h5>
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
                                @foreach ($categorias as $categoria )
                                <tr>
                                    <td>{{$categoria->id}}</td>
                                    <td>{{$categoria->categoria}}</td>
                                    <td>{{$categoria->created_at}}</td>
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
