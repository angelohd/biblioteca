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
                    <h5>Registrar autor</h5>
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
                    <form class="formcategoria" method="POST" action="{{route("biblioteca.autor.addautor")}}">
                        @csrf
                        <div class="form-group row"><label class="col-lg-2 col-form-label">Nome *</label>
                            <div class="col-lg-10">
                                <input type="text" placeholder="Angelo Mwadiavita" class="form-control" name="nome" required="required">
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-lg-2 col-form-label">Data Nasc.</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" name="data_nasc">
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-lg-2 col-form-label">Nivel academico  *</label>
                            <div class="col-lg-10">
                               <select name="nivelacademico_id" id="" class="select form-control" required="required">
                                <option value="">Selecione o nivel</option>
                                @foreach ($niveis as $nivei )
                                <option value="{{$nivei->id}}">{{$nivei->nivel}}</option>
                                @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="form-group row"><label class="col-lg-2 col-form-label">email</label>
                            <div class="col-lg-10">
                                <input type="email" placeholder="info@site.com" class="form-control" name="email">
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
                    <h5>Lista de autores no sistema</h5>
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
                                    <th>Nome</th>
                                    <th>Data nasc.</th>
                                    <th>Nivel Acad.</th>
                                    <th>Email.</th>
                                    <th>Acção</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($autores as $autore )
                                <tr>
                                    <td>{{$autore->id}}</td>
                                    <td>{{$autore->getPessoa->nome}}</td>
                                    <td>{{$autore->getPessoa->data_nasc}}</td>
                                    <td>{{$autore->getPessoa->getNivel->nivel}}</td>
                                    <td>{{$autore->email}}</td>
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
