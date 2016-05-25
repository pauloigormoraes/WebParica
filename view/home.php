<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PARICÁ - Início</title>
<link rel="shortout icon" href="view/img/favicon.png"/>

<link href="view/css/bootstrap.min.css" rel="stylesheet">
<link href="view/css/datepicker3.css" rel="stylesheet">
<link href="view/css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="view/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="view/js/html5shiv.js"></script>
<script src="view/js/respond.min.js"></script>
<![endif]-->

</head>

<body>

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
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-green panel-widget ">
					<p>hhh</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<script src="view/js/jquery-1.11.1.min.js"></script>
	<script src="view/js/bootstrap.min.js"></script>
	<script src="view/js/chart.min.js"></script>
	<script src="view/js/chart-data.js"></script>
	<script src="view/js/easypiechart.js"></script>
	<script src="view/js/easypiechart-data.js"></script>
	<script src="view/js/bootstrap-datepicker.js"></script>
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
