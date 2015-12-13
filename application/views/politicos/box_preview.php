<div class="politico_box">
    <div class="politico_foto_box">
        <a href="/p/<?php echo $id_Politico; ?>"><img src="<?php echo $Imagem; ?>" class="politico_perfil_mini"/></a>
    </div>
    <div class="politico_infos col-md-10">
        <a href="/p/<?php echo $id_Politico; ?>"><h5><?php echo $PoliticoNome; ?> - <span>Candidato(a) a <?php

        switch ($id_Cargo){

            case 1:
                echo "Presidente";
                break;

            case 2:
                echo "Governador do estado do ".$UF;
                break;

            case 3:
                echo "Prefeito do municipio de ".$Cidade;
                break;

            case 4:
                echo "Deputado Federal pelo estado do ".$UF;
                break;

            case 5:
                echo "Senador pelo estado do ".$UF;
                break;

            case 6:
                echo "Deputado Estadual pelo estado do ".$UF;
                break;

            case 7:
                echo "Deputado Distrital pelo Distrito Federal";
                break;

            case 8:
                echo "Vereador pelo municipio de ".$Cidade;
                break;

        }
        ?> </span><p class="politico_likes text-success">131  <i class="fa fa-thumbs-up"></i></p></h5></a>
        <p>
           <?php echo $introducao; ?>
        </p>
        <div class="politico_infos_inf">
            <a href="/p/<?php echo $id_Politico; ?>" class="btn btn-primary btn-xs">Ver campanha</a>
        </div>
    </div>
</div>
