<html>
<head>
    <title>Política</title>
    <meta charset="UTF-8">
    <script src="<?php echo base_url(); ?>static/js/jquery-2.1.4.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>static/js/filtros.js"></script>


    <link href="<?php echo base_url(); ?>static/square/grey.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>static/js/icheck.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/estilo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap-social.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<?php
    $ci =& get_instance();
    $ci->load->library('facebook');
    $user = $ci->facebook->user()['data'];
?>
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url()?>">Candidatura</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                                <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url()?>p/dilma13">Sobre</a></li>
                                <li><a href="<?php echo base_url()?>propostas">Propostas</a></li>
                                <li><a href="<?php echo base_url()?>politicos">Campanhas</a></li>
                            </ul>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url()?>principal/lancecampanha">Lance sua campanha!</a></li>

                        <?php if($ci->facebook->logged_in()){

                            echo "<li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                ".$user['name']."<img class=\"usr-img\" src=\"".$user['picture']->data->url."\" ><span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"".base_url()."painel\">Painel do Usuário</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"".base_url()."login/logout\">Sair</a></li>
                                </ul>
                                </li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>