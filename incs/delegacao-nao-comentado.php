<section id="delegacao" class="sessao">
		
	<div class="poligono">
		<div class="linhas"></div><!-- /linhas -->
	</div><!-- /poligono -->	
	
	<div class="container">

		<header class="header-pagina">
			<h2>Delegações</h2>
		</header>	

		<div id="mapa-delegacoes">

			<?php //Versao > 768px ?>

			<div class="no-mobile">

				<div class="row">
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

						<div class="info-delegacao listagem no-mobile">
							
							<h3>Busque sua Delegação!</h3>
							<h4>Selecione o seu estado<br> e veja a delegação que<br> irá pro EBA 2018!</h4>
						
							<a href="#inscreva-se" class="btn-geral btn-delegacao"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Nova Delegação</a>

						</div><!-- /info-delegacao -->		

					</div><!-- /col-lg-6 -->

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

						<div class="mapa no-mobile">
							<?php include("mapa.php"); ?>
						</div><!-- /mapa -->		
									
					</div><!-- /col-lg-6 -->				

				</div><!-- /row -->				

			</div><!-- /no-mobile -->
			
			<?php //END Versao > 768px ?>

			<?php //Mobile Only ?>

			<div class="mobileonly">

				<div class="row">
					
					<div class="col-sm-12 col-xs-12">					

						<select name="estado" id="estado">

							<option>Selecione o estado</option>
							<option value="AC">ACRE</option>
							<option value="AL">ALAGOAS</option>
							<option value="AP">AMAPÁ</option>
							<option value="AM">AMAZONAS</option>
							<option value="BA">BAHIA</option>
							<option value="CE">CEARÁ</option>
							<option value="DF">DISTRITO FEDERAL</option>
							<option value="ES">ESPÍRITO SANTO</option>
							<option value="GO">GOIÁS</option>
							<option value="MA">MARANHÃO</option>
							<option value="MT">MATO GROSSO</option>
							<option value="MS">MATO GROSSO DO SUL</option>
							<option value="MG">MINAS GERAIS</option>
							<option value="PA">PARÁ</option>
							<option value="PB">PARAÍBA</option>
							<option value="PR">PARANÁ</option>
							<option value="PE">PERNAMBUCO</option>
							<option value="PI">PIAUÍ</option>
							<option value="RJ">RIO DE JANEIRO</option>
							<option value="RN">RIO GRANDE DO NORTE</option>
							<option value="RS">RIO GRANDE DO SUL</option>
							<option value="RO">RONDÔNIA</option>
							<option value="RR">RORAIMA</option>
							<option value="SC">SANTA CATARINA</option>
							<option value="SP">SÃO PAULO</option>
							<option value="SE">SERGIPE</option>
							<option value="TO">TOCANTINS</option>

						</select>						

						<div class="info-delegacao listagem2">

							<div class="text-center">

								<h3>Busque sua Delegação!</h3>
								<h4>Selecione o seu estado<br> e veja a delegação que<br> irá pro EBA 2018!</h4>
								
								<a href="#inscreva-se" class="btn-geral btn-delegacao"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Nova Delegação</a>

							</div><!-- /info-delegacao -->

							<?php 

								$estados = array( 'AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO');

								foreach($estados as $estado){

									$dele = mysql_query("SELECT * FROM delegacoes WHERE estado='$estado' AND ativo=1 AND ano='2017' GROUP BY email ORDER BY delegacao");

									$scriptestados[]= "
									if( this.value=='".$estado."') id('div".strtolower($estado)."').style.display = 'block';
									else id('div".strtolower($estado)."').style.display = 'none';";

									switch ($estado) {
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
									}//end switch

									$itens = '';

									}//end while


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


									echo '
									<!-- AQUI COMEÇA A LISTAGEM DAS DELEGAÇÕES DE '.$nomeestado.'-->
									<div id="div'.strtolower($estado).'" class="divestado" style="display:none">';

										echo'
										<header>
											<img src="./imgs/bandeiras/'.$estado.'.png" title="'.$estado.'" height="40">
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
										}//endif

									echo '</div>';

								}//end foreach

							?>

						</div><!-- /listagem2 -->

					</div><!-- /col-sm-12 -->

				</div><!-- /row -->

			</div><!-- /mobileonly -->			

			<?php //end Mobile Only?>

		</div><!-- /mapa-delegacoes -->

		<div id="inscreva-se">
			
			<header>
				<h2>Inscreva-se</h2>
				<h3>Ao fazer sua inscrição você está de acordo e tem plena ciência do <strong>manual do participante</strong>.</h3>
			</header>

			<a href="#" class="btn-pdf" target="_blank">Acessar o manual do participante</a>

			<p>Caso não esteja conseguindo fazer a inscrição, <a href="#" target="_blank">clique aqui</a>.</p>

		</div><!-- /inscricao -->

		<div id="delegacaoForm">

			<form action="#" id="form-contato">
				
				<div class="row">
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

						<label for="nome-delegacao">
							<input type="text" id="nome-delegacao" class="input" placeholder="Nome da delegação">
						</label>

						<label for="nome-responsavel">
							<input type="text" id="nome-responsavel" class="input" placeholder="Nome do responsável">
						</label>						
						
						<label for="email-delegacao">
							<input type="email" id="email-delegacao" class="input" placeholder="Email">
						</label>

						<label for="cpf-delegacao">
							<input type="text" id="cpf-delegacao" class="input" placeholder="CPF">
						</label>

						<label for="fone1-delegacao">
							<input type="text" id="fone1-delegacao" class="input fone" placeholder="Telefone 1">
						</label>																							

					</div><!-- /col-lg-6 -->

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

						<label for="fone2-delegacao">
							<input type="text" id="fone2-delegacao" class="input fone" placeholder="Telefone 2">
						</label>

						<label for="endereco-delegacao">
							<input type="text" id="endereco-delegacao" class="input" placeholder="Endereço">
						</label>																														
						<label for="cidade-delegacao">
							<input type="text" id="cidade-delegacao" class="input" placeholder="Cidade">
						</label>

						<label for="estado-delegacao">
							<input type="text" id="estado-delegacao" class="input" placeholder="Estado">
						</label>	

						<label for="cep-delegacao">
							<input type="text" id="cep-delegacao" class="input" placeholder="CEP">
						</label>					

					</div><!-- /col-lg-6 -->

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<input type="submit" class="submit" value=" Enviar ">
					</div><!-- /col-lg-12 -->

				</div><!-- /row -->				

			</form>

		</div><!-- /inscricao -->		

	</div><!-- /container -->

</section>