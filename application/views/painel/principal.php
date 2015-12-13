<h1>Painel do Usuario</h1><hr>

<ul class="nav nav-tabs">
    <li class="active"><a href="#informacoes" data-toggle="tab" aria-expanded="true">Informações</a></li>
    <li class=""><a href="#biografia" data-toggle="tab" aria-expanded="false">Biografia</a></li>
    <li class=""><a href="#realizacoes" data-toggle="tab" aria-expanded="false">Realizações</a></li>
    <li class=""><a href="#propostas" data-toggle="tab" aria-expanded="false">Propostas</a></li>
    <li class=""><a href="#multi" data-toggle="tab" aria-expanded="false">Multimídias</a></li>

</ul>

<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="informacoes">
        <?php $this->load->view("painel/informacoes")?>
    </div>
    <div class="tab-pane fade" id="biografia">
        <?php $this->load->view("painel/biografia")?>
    </div>
    <div class="tab-pane fade" id="realizacoes">
        <?php $this->load->view("painel/realizacoes")?>
    </div>
    <div class="tab-pane fade" id="propostas">
        <?php $this->load->view("painel/propostas")?>
    </div>
</div>