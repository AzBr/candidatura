<html>
<head>
    <title>Politica</title>
    <script src="<?php echo base_url(); ?>static/js/jquery-2.1.4.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap.js"></script>

    <link href="<?php echo base_url(); ?>static/square/grey.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>static/js/icheck.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/estilo.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/font-awesome.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
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
                        <li class="active"><a href="#">Início <span class="sr-only">(current)</span></a></li>
                        <li><a href="<?php echo base_url()?>p/dilma13">Sobre</a></li>
                        <li><a href="<?php echo base_url()?>propostas">Propostas</a></li>
                        <li><a href="<?php echo base_url()?>politicos">Campanhas</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Pesquisar por...">
                            </div>
                            <button type="submit" class="btn btn-default">Ok</button>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>