<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PARICÁ - Sistema Acadêmico</title>
    <link rel="shortout icon" href="view/img/favicon.png"/>

    <link href="view/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/css/datepicker3.css" rel="stylesheet">
    <link href="view/css/styles.css" rel="stylesheet">
    <link href="view/css/datatables.css" rel="stylesheet">

    <!--Icons-->
    <script src="view/js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="view/js/html5shiv.js"></script>
    <script src="view/js/respond.min.js"></script>
    <![endif]-->

    <style>
        @-webkit-keyframes roading {
            from{-webkit-transform:rotate(0deg);}
            to{-webkit-transform:rotate(360deg);}
        }
        #loading{
            -webkit-animation: roading 2.5s linear infinite;
        }
    </style>

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#home">
                <img style="margin: 0 0 0 0" src='view/img/favicon.png'> | 
                <span>SISTEMA ACADÊMICO </span>PARICÁ</a>
            <a class="navbar-brand" href="#info" title="Saiba mais sobre o projeto" style="float: right !important;">SOBRE
                <span>PARICÁ</span></a>
        </div>

    </div>
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <ul class="nav menu">
        <li><a href="#home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Início</a></li>
        <!--li><a href="#buscar"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Buscar aluno</a></li-->
        <li><a href="#cadastrogeral"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Cadastro Geral</a></li>
        <li><a href="#listagemgeral"><svg class="glyph stroked open-folder"><use xlink:href="#stroked-open-folder"></use></svg> Listagem Geral</a></li>
        <!--li><a href="#atualizarAluno"><svg class="glyph stroked table"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Atualiza Usuario [Teste]</a></li-->
        <li role="presentation" class="divider"></li>
        <li style="margin-top: auto; align: center;"><a href="#info" class="glyphicon glyphicon-info-sign"><b class="fonte"> Sobre o Sistema Paricá</b></a></li>
    </ul>

</div>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" id="MainFrame"></div>

<script src="view/js/jquery-1.11.1.min.js"></script>
<script src="view/js/bootstrap.min.js"></script>
<script src="view/js/bootstrap-datepicker.js"></script>
<script src="view/js/datatables.js"></script>
<script src="view/js/javex.js"></script>

<script>

    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
