<script>
    $(document).ready(function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_minimal-grey',
            radioClass: 'iradio_minimal-grey',
            increaseArea: '20%' // optional
        });
    });
</script>
<div class="row">
    <div class="propostas_filter col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Categorias</h3>
            </div>
            <div class="panel-body">
                <input type="checkbox" name="categoria[]" id="cat[todos]" checked>
                <label for="cat[todos]"> &nbsp; &nbsp;Todos</label><br>

                <?php

                foreach ($categorias as $categoria){
                    echo '<input type="checkbox" name="categoria[]" id="cat['.$categoria->id_Categoria.']" checked>
                        <label for="cat['.$categoria->id_Categoria.']"> &nbsp; &nbsp;'.$categoria->Nome.'</label><br>';
                }

                ?>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Estados</h3>
            </div>
            <div class="panel-body">
                <input type="checkbox" name="categoria[]" id="estado[todos]" checked>
                <label for="estado[todos]"> &nbsp; &nbsp;Todos</label><br>

                <?php

                foreach ($estados as $estado){
                    echo '<input type="checkbox" name="estado[]" id="estado['.$estado->Sigla.']" checked>
                        <label for="estado['.$estado->Sigla.']"> &nbsp; &nbsp;'.$estado->Sigla.'</label><br>';
                }

                ?>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Partidos</h3>
            </div>
            <div class="panel-body">
                <input type="checkbox" name="categoria[]" id="part[todos]" checked>
                <label for="part[todos]"> &nbsp; &nbsp;Todos</label><br>

                <?php

                foreach ($partidos as $partido){
                    echo '<input type="checkbox" name="partido[]" id="part['.$partido->Num_Partido.']" checked>
                        <label for="part['.$partido->Num_Partido.']"> &nbsp; &nbsp;'.$partido->Sigla.'</label><br>';
                }

                ?>
            </div>
        </div>

    </div>
    <div class="propostas_conteudo col-md-9 jumbotron">
        <div class="propostas_titulo">
            <h2>Lista de propostas
            <ul class="propostas_ordem nav nav-pills">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        Ordenar por <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Pontuação</a></li>
                        <li><a href="#">Visualizações</a></li>
                        <li><a href="#">Comentários</a></li>
                    </ul>
                </li>
            </h2>
            </ul>
        </div>
        <?php
            foreach($propostas as $proposta){
                $data["proposta"] = $proposta;
                $this->load->view("propostas/box_preview", $data);
            }
        ?>
    </div>
</div>