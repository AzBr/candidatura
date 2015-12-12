$(document).ready(function(){
    $(".atualiza_proposta").on("click", function(){
        var params = pegaFiltrosProposta();
        enviaFiltro("/propostas/lista", params);
    })

    function pegaFiltrosProposta(){
        var filtros = {
            "categorias": [],
            "estados": [],
            "partidos": []
        };
        $("input[name='categoria[]']").each(function(){
            if($(this).prop("checked")){
                filtros.categorias.push($(this).val());
            }

        });
        $("input[name='partido[]']").each(function(){
            if($(this).prop("checked")){
                filtros.partidos.push($(this).val());
            }

        })
        $("input[name='estado[]']").each(function(){
            if($(this).prop("checked")){
                filtros.estados.push($(this).val());
            }

        })
        console.log(filtros);
        return filtros;
    }

    function enviaFiltro(url, params){
        $( ".box_propostas" ).html("<i class=\"fa fa-spinner fa-pulse\"></i>");
        var request = $.ajax({
            url: url,
            method: "POST",
            data: params
        });
        request.done(function( msg ) {
            $( ".box_propostas" ).html( msg );
        });
        request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });
    }
})