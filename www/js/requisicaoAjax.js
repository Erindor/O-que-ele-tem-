var objeto_perguntas;

function separarDados(dados){
    var perguntas = dados.split("#");
    return perguntas;
}

function separarPerguntas (perguntas){
    
    var perguntasCategoria = [];
    
    for (i = 0; i < perguntas.length; i++){
        if (perguntas[i] != ""){
            var p_info = perguntas[i].split("!");
            
            var p = new Pergunta();
            p.id         = p_info [0];
            p.pergunta   = p_info [1];
            p.solucao    = p_info [2];
            perguntasCategoria.push(p);
        }
    }
    
    return perguntasCategoria;
}


function exibirPergunta(){
    $("#selecionar_categorias").fadeOut("slow");
    $("#pergunta_selecionada").fadeIn(3000);
}


$(document).ready(function(){
    $("#polhos").click(function(){
        $.ajax({type : "POST",
                url : "/classes/controle/getPerguntasBanco.php",
                data : {categoria : "olhos"},
                success : function (result){
                    objeto_perguntas = null;
                    var string_perguntas = separarDados(result);
                    objeto_perguntas = separarPerguntas(string_perguntas);
                    $("#pergunta_info").text(objeto_perguntas[0].pergunta);
                }
        });
        
        exibirPergunta();
    });
    
    $("#presp").click(function(){
        $.ajax({type : "POST",
                url : "/classes/controle/getPerguntasBanco.php",
                data : {categoria : "respiracao"},
                success : function (result){
                    objeto_perguntas = null;
                    var string_perguntas = separarDados(result);
                    objeto_perguntas = separarPerguntas(string_perguntas);
                    $("#pergunta_info").text(objeto_perguntas[0].pergunta);
                }
        });
        
        exibirPergunta();
    });
    
     $("#ppele").click(function(){
        $.ajax({type : "POST",
                url : "/classes/controle/getPerguntasBanco.php",
                data : {categoria : "pele"},
                success : function (result){
                    objeto_perguntas = null;
                    var string_perguntas = separarDados(result);
                    objeto_perguntas = separarPerguntas(string_perguntas);
                    $("#pergunta_info").text(objeto_perguntas[0].pergunta);
                }
        });
        exibirPergunta();
    });
    
     $("#pesto").click(function(){
        $.ajax({type : "POST",
                url : "/classes/controle/getPerguntasBanco.php",
                data : {categoria : "estomago"},
                success : function (result){
                    objeto_perguntas = null;
                    var string_perguntas = separarDados(result);
                    objeto_perguntas = separarPerguntas(string_perguntas);
                    $("#pergunta_info").text(objeto_perguntas[0].pergunta);
                }
        });
        exibirPergunta();
    });
    
     $("#pouv").click(function(){
        $.ajax({type : "POST",
                url : "/classes/controle/getPerguntasBanco.php",
                data : {categoria : "ouvido"},
                success : function (result){
                    objeto_perguntas = null;
                    var string_perguntas = separarDados(result);
                    objeto_perguntas = separarPerguntas(string_perguntas);
                    $("#pergunta_info").text(objeto_perguntas[0].pergunta);
                }
        });
        exibirPergunta();
    });
    
     $("#pnas").click(function(){
        $.ajax({type : "POST",
                url : "/classes/controle/getPerguntasBanco.php",
                data : {categoria : "nariz"},
                success : function (result){
                    objeto_perguntas = null;
                    var string_perguntas = separarDados(result);
                    objeto_perguntas = separarPerguntas(string_perguntas);
                    $("#pergunta_info").text(objeto_perguntas[0].pergunta);
                }
        });
        exibirPergunta();
    });
    
     $("#phabsan").click(function(){
        $.ajax({type : "POST",
                url : "/classes/controle/getPerguntasBanco.php",
                data : {categoria : "sanitario"},
                success : function (result){
                    objeto_perguntas = null;
                    var string_perguntas = separarDados(result);
                    objeto_perguntas = separarPerguntas(string_perguntas);
                    $("#pergunta_info").text(objeto_perguntas[0].pergunta);
                }
        });
        exibirPergunta();
    });
    
});
