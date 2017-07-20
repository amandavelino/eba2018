<?
function ftTelefone($str) {
	$numeros = preg_replace("/[^0-9]/", "", $str);
	if(substr($numeros,0,1)=='0'){
		$numeros = substr($numeros,1);
	}
	return "(".substr($numeros,0,2).") ".substr($numeros,2,4).".".substr($numeros,6);
}

require_once('conecta.php');

$itens = '';
$dele = mysql_query("SELECT * FROM delegacoes WHERE estado='$_POST[estado]' AND ativo=1 AND ano='2017' GROUP BY email ORDER BY delegacao");
switch ($_POST['estado']) {
		case "AC":  $nomeestado = 'Acre'; break;
		case "AL":  $nomeestado = 'Alagoas'; break;
		case "AP":  $nomeestado = 'Amapá'; break;
		case "AM":  $nomeestado = 'Amazonas'; break;
		case "BA":  $nomeestado = 'Bahia'; break;
		case "CE":  $nomeestado = 'Ceará'; break;
		case "DF":  $nomeestado = 'Distrito Federal'; break;
		case "ES":  $nomeestado = 'Espírito Santo'; break;
		case "GO":  $nomeestado = 'Goiás'; break;
		case "MA":  $nomeestado = 'Maranhão'; break;
		case "MG":  $nomeestado = 'Minas Gerais'; break;
		case "MT":  $nomeestado = 'Mato Grosso'; break;
		case "MS":  $nomeestado = 'Mato Grosso do Sul'; break;
		case "PA":  $nomeestado = 'Pará'; break;
		case "PB":  $nomeestado = 'Paraíba'; break;
		case "PE":  $nomeestado = 'Pernambuco'; break;
		case "PI":  $nomeestado = 'Piauí'; break;
		case "PR":  $nomeestado = 'Paraná'; break;
		case "RJ":  $nomeestado = 'Rio de Janeiro'; break;
		case "RN":  $nomeestado = 'Rio Grande do Norte'; break;
		case "RS":  $nomeestado = 'Rio Grande do Sul'; break;
		case "RO":  $nomeestado = 'Rondônia'; break;
		case "RR":  $nomeestado = 'Roraima'; break;
		case "SC":  $nomeestado = 'Santa Catarina'; break;
		case "SP":  $nomeestado = 'São Paulo'; break;
		case "SE":  $nomeestado = 'Sergipe'; break;
		case "TO":  $nomeestado = 'Tocantins'; break;
	}

	while($row2 = mysql_fetch_array($dele)){

		if($row2['fone2'])
		{
			$telefone2 = '<br>'.ftTelefone($row2['fone2']);
		}

		$itens[] = '<li>
						<div class="delegacao">
							<p>
								<span class="delegacao-nome">'.$row2['delegacao'].'</span>
								<span class="delegacao-cidade">'.$row2['cidade'].'</span>
							</p>
						</div><!-- /delegacao -->
						<div class="responsavel">
							<p>
								<span class="resp-nome">'.$row2['nome'].'</span>
								<span class="resp-email"><a href="mailto:'.$row2['email'].'" target="_blank">'.$row2['email'].'</a></span>
								<span class="resp-fone">'.ftTelefone($row2['fone1']).$telefone2.'</span>
							</p>
						</div><!-- /responsavel -->
					</li>';
	}//end while


	echo'
	<header>
		<img src="./imgs/bandeiras/'.$_POST['estado'].'.png" title="'.$_POST['estado'].'" height="40">
		<h3>'.$nomeestado.'</h3>
	</header>';

	if(mysql_num_rows($dele)){	

		echo'
		<ul class="delegacao-itens">						
			<li class="delegacao-header">
				<div class="delegacao">
					<h5>Delegação</h5>
				</div><!-- /delegacao -->
				<div class="responsavel">
					<h5>Responsável</h5>
				</div><!-- /responsavel -->
			</li>
		   '.join('',$itens).'
		</ul>';

	}else{ 
		echo '
			<p>Nenhuma delegação encontrada.<br>Crie já a primeira delegação para o seu estado!<br><a href="delegacao.php">Clique aqui</a>.</p>';
	}

?>