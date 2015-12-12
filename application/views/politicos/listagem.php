<div class="row">
    <div class="propostas_filter col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Candidatura</h3>
            </div>
            <div class="panel-body">
                Panel content
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
                <h3 class="panel-title"><i class="fa fa-flag-o"></i>    Partidos</h3>
            </div>
            <div class="panel-body">
                Panel content
            </div>
        </div>

    </div>
    <div class="politicos_bloco col-md-9 jumbotron">
        <div class="contents">
            <?php
                $this->load->view("politicos/box_preview");
                $this->load->view("politicos/box_preview");
            ?>
        </div>
    </div>
</div>