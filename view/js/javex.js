$(window).ready(function(){

    function showPage(page, action){
        $("#MainFrame").load( "view/" + page + ".php", action);
    }

    function menu(link){
        $("#MainFrame").html("Por favor aguarde, carregando página...");
        switch(link){
            case 'cadastrogeral':
                showPage("cadastrogeral", function (){getLink();});
                break;

            case 'formulario':
                showPage(link, function(){
                    $("#inserirAlunos").submit(function(){
                        
                        $.post("./request/cadastrarAlunos", $(this).serialize(), function(info){
                            alert(info);
                        });
                    });
                });
                break;

            default:
                showPage(link);
                break;
        }
    }

    function getLink(){
        $('a').bind('click',function(event) {
            var anchor = $(this).attr('href');
            anchor = anchor.split("#");
            anchor = anchor[1];
            menu(anchor);
        });
    }

    showPage("home");
    getLink();

});