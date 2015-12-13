<h1><?php echo $candidato->Nome; ?>, <?php echo $candidato->Num_Partido; ?> <span class="pull-right"><i class="iconlike fa fa-plus-circle"></i></span></h1>
<blockquote>
    <p><?php echo $candidato->slogan; ?></p>
</blockquote>
<p><?php echo $candidato->introducao; ?></p>
<div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube"> <div class="embed-responsive embed-responsive-16by9"> <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $candidato->video_intro; ?>?rel=0" allowfullscreen=""></iframe> </div> </div>