$(document).ready(function(){
    $("#bt_sim").click(function(){
        if (objeto_perguntas != null){
            if (objeto_perguntas[0].solucao.indexOf("s-") == -1 ){
                $("#pergunta_info").text(objeto_perguntas[0].solucao);
                $("#bt_sim").hide();
                $("#bt_nao").hide();
                $("#bt_voltar").css("display", "inline");
            }
            else{
                $("#pergunta_info").text("Um momentinho...");
                $("#bt_sim").hide();
                $("#bt_nao").hide();
                window.location.assign("/solucao/"+objeto_perguntas[0].solucao);
            }
        }
    });
    
    
    $("#bt_nao").click(function(){
        objeto_perguntas.shift();
        
        if (objeto_perguntas[0] != null){
            $("#pergunta_info").text(objeto_perguntas[0].pergunta);
        }
        else{
            $("#pergunta_selecionada").hide();
            $("#bt_sim").hide();
            $("#bt_nao").hide();
            $("#cadastrarSintoma").show();
        }
    });
    
    $("#btn-enviar-sugest").click(function(){
        $("#final").text("Obrigado pela sua colaboração!");
        $("#label-sugestao").hide();
        $("#texto-novo-sintoma").hide();
        $("#btn-enviar-sugest").hide();
    });
});


