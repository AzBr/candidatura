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

                <input type="checkbox" name="categoria[]" id="cat[1]" checked>
                <label for="cat[1]">Educação</label><br>

                <input type="checkbox" name="categoria[]" id="cat[1]" checked>
                <label for="cat[1]">Educação</label><br>

                <input type="checkbox" name="categoria[]" id="cat[1]" checked>
                <label for="cat[1]">Educação</label><br>

                <input type="checkbox" name="categoria[]" id="cat[1]" checked>
                <label for="cat[1]">Educação</label>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Estados</h3>
            </div>
            <div class="panel-body">
                Panel content
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Partidos</h3>
            </div>
            <div class="panel-body">
                Panel content
            </div>
        </div>

    </div>
    <div class="propostas_conteudo col-md-9 jumbotron">
        <div class="propostas_titulo">
            <h2>Lista de propostas</h2>
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
            </ul>
        </div>

        <div class="proposta_box">
            <div class="proposta_superior">
                <h3 class="proposta_title"><a href="#">Bolsa família de 1milhao de dinheiros</a></h3>
                <div class="proposta_rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                <span>por <a href="#">Dilma 13</a></span>
            </div>
            <p class="proposta_texto">Nullam quis risus eget vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>

            <span class="proposta_vis">3132 <i class="fa fa-eye"></i></span><a href="#" class="btn btn-primary btn-xs">Veja mais</a>
        </div>

        <div class="proposta_box">
            <div class="proposta_superior">
                <h3 class="proposta_title">Bolsa família de 1milhao de dinheiros</h3>
            </div>
            <p class="proposta_texto">Nullam quis risus eget vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
            <a href="#" class="btn btn-primary btn-xs">Veja mais</a>
        </div>

        <div class="proposta_box">
            <div class="proposta_superior">
                <h3 class="proposta_title">Bolsa família de 1milhao de dinheiros</h3>
            </div>
            <p class="proposta_texto">Nullam quis risus eget vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
            <a href="#" class="btn btn-primary btn-xs">Veja mais</a>
        </div>
    </div>
</div>