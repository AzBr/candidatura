<div class="bloco_geral_politicos row">
    <div class=" col-md-3">
        <div class="text-center">
            <div class="propostas_bloco_filtro col-md-12">
                <img src="<?php echo $candidato->Imagem; ?>" class="politico_perfil"/>
                <ul class="nav nav-pills nav-stacked politico_menu">
                    <li <?php if($local == "inicio") echo "class=\"active\"";?>><a href="/p/<?php echo $candidato->id_Politico; ?>">Introdução</a></li>
                    <li <?php if($local == "biografia") echo "class=\"active\"";?>><a href="/p/<?php echo $candidato->id_Politico; ?>/biografia">Biografia</a></li>
                    <li <?php if($local == "realizacoes") echo "class=\"active\"";?>><a href="/p/<?php echo $candidato->id_Politico; ?>/realizacoes">Realizações</a></li>
                    <li <?php if($local == "propostas") echo "class=\"active\"";?>><a href="/p/<?php echo $candidato->id_Politico; ?>/propostas">Propostas</a></li>
                    <li <?php if($local == "multimedia") echo "class=\"active\"";?>><a href="/p/<?php echo $candidato->id_Politico; ?>/multimedia">Multimídia</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="politico_perfil_conteudo col-md-9 jumbotron">
        <?php $this->load->view("politicos/".$local); ?>
    </div>
</div>