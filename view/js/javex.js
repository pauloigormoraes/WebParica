$(document).ready(function(){
    function showPage(page, when, action){
        if(when){
            params = when.split(":");
            $(params[1]).on(params[0], function(){
                $("#MainFrame").load( "view/" + page + ".php", action);
            });
        }else
            $("#MainFrame").load( "view/" + page + ".php", action);
    }

    $('a').bind('click',function(event) {
        var anchor = $(this).attr('href');
        anchor = anchor.split("#")
        anchor = anchor[1]

        showPage(anchor)
    });

    showPage("home");


});