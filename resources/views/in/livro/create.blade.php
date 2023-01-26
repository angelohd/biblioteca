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
                    <h5>Adicionar livro no sistema</h5>
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

                    <form method="post" action="{{ route('biblioteca.livro.salvarlivro') }}" enctype="multipart/form-data">
                       @include("in.livro.form")
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
