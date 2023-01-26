@csrf

<div class="row">
    <div class="col-md-6">
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <select name="categoria_id" class="form-control" required>
                    <option value="">Selecione uma categoria</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Autor</label>
            <div class="col-sm-10">
                <select name="autor_id" class="form-control" required>
                    <option value="">Selecione um autor</option>
                    @foreach ($autores as $autore)
                    <option value="{{ $autore->idautor }}">{{ $autore->getPessoa->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="titulo" required>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Resumo</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="resumo" required></textarea>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Edicao</label>
            <div class="col-sm-10">
                <select name="edicao" class="form-control" required>
                    <option value="">Selecione uma edicao</option>
                    @foreach ($edicaos as $edicao)
                    <option value="{{ $edicao->id }}">{{ $edicao->edicao }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Ano publicado</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="ano_publicado" required>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Upload Capa</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="capa" required>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group  row">
            <label class="col-sm-2 col-form-label">Upload Material</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="caminho_livro" required>
            </div>
        </div>
    </div>
</div>

<div class="hr-line-dashed"></div>
<div class="form-group row">
    <div class="col-sm-4 col-sm-offset-2">
        <button class="btn btn-primary btn-sm" type="submit">S a l v a r </button>
    </div>
</div>
