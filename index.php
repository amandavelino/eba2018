<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>EBA 2018 :: João Pessoa - PB</title>

		<!--[if lt IE 9]>
		<script src="./js/html5shiv-printshiv-3.7.3.min.js"></script>
		<![endif]-->        
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" type="image/x-icon" href="./imgs/favicon.png">
		<link rel="apple-touch-icon" href="./imgs/favicon.png">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="./css/bootstrap/bootstrap-3.3.6.min.css">
		<link rel="stylesheet" href="./css/font-awesome.min.css">
		
		<!-- Owl Stylesheets -->
	    <link rel="stylesheet" href="./css/owlSlider/owl.carousel.min.css">
	    <link rel="stylesheet" href="./css/owlSlider/owl.theme.default.min.css">

        <link rel="stylesheet" href="./css/main.css"> 

		<script src="./js/jquery-1.12.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="./js/vendor/jquery-1.12.4.min.js"><\/script>')</script>        
		
    </head>
    <!-- <body onLoad="estadosDelegacoes();"> -->
    <body> 

		<!--[if lt IE 8]>
			<div id="browserupgrade">
				<p class="browserupgrade">Você está usando uma versão antiga do Navegador. Por favor, <a href="http://browsehappy.com/">atualize seu navegador</a> para uma melhor experiência.</p>
			</div>
		<![endif]-->

		<?php include("./incs/header.php"); ?>
		<?php include("./incs/o-evento.php"); ?>
		<?php include("./incs/atracoes.php"); ?>
		<?php include("./incs/depoimentos.php"); ?>
		<?php include("./incs/programacao.php"); ?>
		<?php include("./incs/loja.php"); ?>
		<?php include("./incs/hospedagem.php"); ?>
		<?php include("./incs/delegacao.php"); ?>
		<?php include("./incs/contato.php"); ?>
		<?php include("./incs/footer.php"); ?>

        <script src="./js/bootstrap-3.3.6.min.js"></script>
        <script src="./js/smoothscroll.js"></script>
        <script src="./js/owl.carousel.min.js"></script>
        <script src="./js/maskbrfone.js"></script>
        <script src="./js/main.js"></script>
		<script>

			<?php /*

					$estados = array( 'AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO');

					foreach($estados as $estado){
						echo'
						$("#'.strtolower($estado).'").on(\'click\', function(){	
							
							$(".listagem").html(\'<div class="bg_loading"><img src="./imgs/carregando.gif" id="loader" /></div>\').fadeIn(300);
							// inicio do Ajax Jquery
							$.ajax({
								type: \'POST\',
								url: \'listadelegacoes.php\',
								cache: false,
								data: \'estado='.$estado.'\',
								success: function(formulario){
									$("#loader").fadeOut(\'slow\');
									$(".listagem").hide();
									$(".listagem").html(formulario).fadeIn(\'slow\');
									}
							});

							return false;
						});';
					}
		 	*/ ?>

		</script>  
		
		<script type="text/javascript">

			/*
			function estadosDelegacoes(){
			    id('estado').onchange = function(){
			        //if( this.value=='AL') id('dival').style.display = 'block';
			        //else id('dival').style.display = 'none';
					<?php if($scriptestados) echo join('',$scriptestados); ?>
			    }
			}
			
			function id( el ){
			    return document.getElementById( el );
			}		

			$(document).ready(function(){

				function highlight_map_states(){
				  if($(".states_section").length>0){
				     $(".states_section .list_states .item .link").hover(function(){
				       var a="#"+$(this).text().toLowerCase();
				       $(a).attr("class","state hover")
				     },function(){
				       var a="#"+$(this).text().toLowerCase();
				       $(a).attr("class","state")
				     })
				  }
				};

			});//

			window.onload = function(){

			    id('estado').onchange = function(){

					$(".listagem2").html('<div class="bg_loading"><img src="./imgs/carregando.gif" id="loader" /></div>').fadeIn(300);
					// inicio do Ajax Jquery
					$.ajax({

						type: 'POST',
						url: 'listadelegacoes.php',
						cache: false,
						data: 'estado='.this.value,
						success: function(formulario){

							$("#loader").fadeOut('slow');
							$(".listagem2").hide();
							$(".listagem2").html(formulario).fadeIn('slow');

						}

					});
				}

			}//onload
			*/

		</script>
    </body>
</html>