<form class="form-horizontal">
    <fieldset>
        <h1>Painel do Usuario</h1><hr>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Nome</label>
            <div class="col-lg-10">
                <input class="form-control" id="inputEmail" placeholder="Nome" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input class="form-control" id="inputEmail" placeholder="Email" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
                <input class="form-control" id="inputPassword" placeholder="Password" type="password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Repeat Password</label>
            <div class="col-lg-10">
                <input class="form-control" id="inputPassword" placeholder="Password" type="password">
            </div>
        </div>
        <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Descricao</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
            </div>
        </div>

        <label for="select" class="col-lg-2 control-label">Cargo</label>
        <div class="col-lg-10">
            <select class="form-control" id="select">
                <?php
                foreach ($cargos as $cargo){
                    echo "<option>$cargo->Nome</option>";
                }
                ?>
            </select></div><br><br>

        <label for="select" class="col-lg-2 control-label">Partido</label>
        <div class="col-lg-10">
            <select class="form-control" id="select">
                <?php
                foreach ($partidos as $partido){
                    echo "<option>$partido->Num_Partido - $partido->Sigla</option>";
                }
                ?>
            </select></div><br><br>

        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Numero</label>
            <div class="col-lg-10">
                <input class="form-control" id="inputEmail" placeholder="Numero" type="text">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Situacao</label>
            <div class="col-lg-10">
                <div class="radio">
                    <label>
                        <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
                        Disputando Eleicao
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                        Eleito
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                        Nao Eleito
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </fieldset>
</form>