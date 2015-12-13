<h1>Histórico de realizações</h1>
<table class="table table-striped table-hover ">
    <thead>
    <tr>
        <th></th>
        <th><b>Realização</b></th>
        <th><b>Data de conclusão</b></th>
        <th><b>Deletar</b></th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td><i>nome de uma proposta</i></td>
        <td>dd/mm/aaaa</td>
        <td>X</td>
    </tr>
    <tr>
        <td>2</td>
        <td><i>nome de uma proposta</i></td>
        <td>dd/mm/aaaa</td>

    </tr>

    <tr>
        <td>3</td>
        <td><i>nome de uma proposta</i></td>
        <td>dd/mm/aaaa</td>

    </tr>

    <tr>
        <td>4</td>
        <td><i>nome de uma proposta</i></td>
        <td>dd/mm/aaaa</td>

    </tr>

    <tr>
        <td>n</td>
        <td><i>nome de uma proposta</i></td>
        <td>dd/mm/aaaa</td>

    </tr>
    </tbody>
</table>

<form class="form-horizontal">
    <fieldset>
        <legend>Adicione uma nova realização:</legend>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Título da realização</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputzrealizacao" placeholder="digite um título aqui">
            </div>
        </div>

        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Descrição da realização</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="15" id="textArea" placeholder="Compartilhe sua realização aqui"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="data" class="col-lg-2 control-label">Data de conclusão</label>
            <div class="col-lg-2">
                <input type="date" class="form-control" id="inputzrealizacao" placeholder="dd/mm/aaaa">
            </div>


            <div class="form-group"><br><br><br>
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="reset" class="btn btn-default">Esvaziar campos</button>
                    <button type="submit" class="btn btn-primary">Enviar Realização</button>
                </div>
            </div>
    </fieldset>
</form>