<div class="proposta_box">
    <div class="proposta_superior">
        <h3 class="proposta_title"><a href="#"><?php echo $proposta->Titulo?></a></h3>
        <div class="proposta_rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
        <span>por <a href="<?php echo base_url()?>"><?php echo $proposta->id_Usuario?></a></span>
    </div>
    <p class="proposta_texto"><?php echo $proposta->Descricao?></p>

    <span class="proposta_vis">3132 <i class="fa fa-eye"></i></span><a href="<?php echo base_url()?>proposta/?p=<?php echo $proposta->id_Proposta?>" class="btn btn-primary btn-xs">Veja mais</a>
</div>