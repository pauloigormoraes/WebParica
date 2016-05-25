<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PARICÁ - Início</title>
<link rel="shortout icon" href="img/favicon.png"/>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

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
				<a class="navbar-brand" href="index.html"><span>PARICÁ </span>ACADÊMICO</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Sair</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div>
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

		<ul class="nav menu">
			<li><a href="home.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg> Início</a></li>
			<li><a href="buscar.php"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Buscar aluno</a></li>
			<li><a href="declaracao.php"><svg class="glyph stroked table"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Declarações/Atas</a></li>
			<li><a href="formulario.php"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Matricular</a></li>

			<li role="presentation" class="divider"></li>
		</ul>

	</div>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Início</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bem vindo ao PARICÁ</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-green panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-plus-sign"></use></svg>
						</div>
						<a href="formulario.html">
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">Cadastrar</div>
								<div class="text-muted">novo aluno</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-green panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked bag"><use xlink:href="#stroked-clipboard-with-paper"></use></svg>
						</div>
						<a href="buscar.html">
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">Buscar</div>
							<div class="text-muted">aluno</div>
						</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-green panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-blank-document"></use></svg>
						</div>
						<a href="#">
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">Ata de Reunião</div>
								<div class="text-muted">professores</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-green panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-blank-document"></use></svg>
						</div>
						<a href="#">
							<div class="col-sm-9 col-lg-7 widget-right">
								<div class="large">Ata de Reunião</div>
								<div class="text-muted">coordenação</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

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
