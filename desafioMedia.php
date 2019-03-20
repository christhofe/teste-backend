<?php 
	//remove erros
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	header('Content-Type: text/html; charset="utf-8"');
	ini_set('default_charset','UTF-8');

	
	//conecta com o banco de dados
	$host ='localhost';
	$user ='root';
	$pass ='';
	$db ='desafio';
	$conexao = mysqli_connect($host,$user,$pass,$db);
?>
<!DOCTYPE html>
<html>

	
	<head>

		<meta charset="utf-8">
		<title>Desafio da Media</title>
		
		
	</head>
	<body>

		<h2>Taxa (média) de ex-alunos do SENAI que continuam estudando por estado e também a taxa nacional. </h2>
		<div>

		
			
			<tbody>
			
				<?php 
				 
    
				    // Quantidade de alunos que estuda do Acre
					
					//$mAcre="SELECT * FROM`students` WHERE regional='AC' ORDER BY `regional` ASC";
					$mAcre="SELECT * FROM `students` WHERE  regional='AC' ORDER BY `regional` ASC";
					$totalAcre = mysqli_query($conexao, $mAcre);
					$alunosAcre = mysqli_num_rows($totalAcre);
					
					 // Quantidade de alunos que estuda de Alagoas
					$mAlagoas="SELECT * FROM `students` WHERE regional='AL' ORDER BY `regional` ASC";
					$totalAlagoas = mysqli_query($conexao, $mAlagoas);
					$alunosAlagoas = mysqli_num_rows($totalAlagoas);
					
					// Quantidade de alunos que estuda em Amazonas
					$mAmazonas="SELECT * FROM `students` WHERE  regional='AM' ORDER BY `regional` ASC";
					$totalAmazonas = mysqli_query($conexao, $mAmazonas);
					$alunosAmazonas = mysqli_num_rows($totalAmazonas);
					
					// Quantidade de alunos que estuda em Amapá 
					$mAmapa="SELECT * FROM `students` WHERE  regional='AP' ORDER BY `regional` ASC";
					$totalAmapa = mysqli_query($conexao, $mAmapa);
					$alunosAmapa = mysqli_num_rows($totalAmapa);
					
					// Quantidade de alunos que estuda em Bahia
					$mBahia="SELECT * FROM `students` WHERE regional='BA' ORDER BY `regional` ASC";
					$totalBahia = mysqli_query($conexao, $mBahia);
					$alunosBahia = mysqli_num_rows($totalBahia);
					
					// Quantidade de alunos que estuda em Ceará
					$mCeara="SELECT * FROM  `students` WHERE regional='CE' ORDER BY `regional` ASC";
					$totalCeara = mysqli_query($conexao, $mCeara);
					$alunosCeara = mysqli_num_rows($totalCeara);
					
					// Quantidade de alunos que estuda em Distrito Federal 
					$mDistritoFederal="SELECT * FROM  `students` WHERE regional='DF' ORDER BY `regional` ASC";
					$totalDistrito = mysqli_query($conexao, $mDistritoFederal);
					$alunosDistritoFederal = mysqli_num_rows($totalDistrito);
					
					// Quantidade de alunos que estuda em  Espírito Santo
					$mEspiritoSanto="SELECT * FROM `students` WHERE  regional='ES' ORDER BY `regional` ASC";
					$totalEspirito = mysqli_query($conexao, $mEspiritoSanto);
					$alunosEspiritoSanto = mysqli_num_rows($totalEspirito);
					
					// Quantidade de alunos que estuda em  Goias
					$mGoias="SELECT * FROM `students` WHERE regional='GO' ORDER BY `regional` ASC";
					$totalGoias = mysqli_query($conexao, $mGoias);
					$alunosGoias = mysqli_num_rows($totalGoias);
					
					// Quantidade de alunos que estuda em Maranhão 
					$mMaranhao ="SELECT * FROM  `students` WHERE  regional='MA' ORDER BY `regional` ASC";
					$totalMaranhao  = mysqli_query($conexao, $mMaranhao );
					$alunosMaranhao  = mysqli_num_rows($totalMaranhao );
					
					// Quantidade de alunos que estuda em  Minas Gerais 
					$mMinasGerais ="SELECT * FROM `students` WHERE regional='MG' ORDER BY `regional` ASC";
					$totalMinas = mysqli_query($conexao, $mMinasGerais );
					$alunosMinas  = mysqli_num_rows($totalMinas );
					
					// Quantidade de alunos que estuda em Mato Grosso do Sul
					$mMatoSul ="SELECT * FROM `students` WHERE regional='MS' ORDER BY `regional` ASC";
					$totalMatoSul = mysqli_query($conexao, $mMatoSul );
					$alunosMatoGrossoSul  = mysqli_num_rows($totalMatoSul);
					
					// Quantidade de alunos que estuda em Mato Grosso 
					$mMatoGrosso ="SELECT * FROM `students` WHERE regional='MT' ORDER BY `regional` ASC";
					$totalMatoGrosso = mysqli_query($conexao, $mMatoGrosso );
					$alunosMatoGrosso  = mysqli_num_rows($totalMatoGrosso);
					
					// Quantidade de alunos que estuda em Paraná
					$mParana ="SELECT * FROM `students` WHERE regional='PR' ORDER BY `regional` ASC";
					$totalParana = mysqli_query($conexao, $mParana );
					$alunosParana  = mysqli_num_rows($totalParana);
					
					// Quantidade de alunos que estuda em Paraíba
					$mParaiba ="SELECT * FROM `students` WHERE regional='PB' ORDER BY `regional` ASC";
					$totalParaiba = mysqli_query($conexao, $mParaiba );
					$alunosParaiba  = mysqli_num_rows($totalParaiba);
					
					// Quantidade de alunos que estuda em Pernambuco
					$mPernambuco ="SELECT * FROM `students` WHERE regional='PE' ORDER BY `regional` ASC";
					$totalPernambuco = mysqli_query($conexao, $mPernambuco );
					$alunosPernambuco  = mysqli_num_rows($totalPernambuco);
					
					// Quantidade de alunos que estuda em Piauí
					$mPiaui ="SELECT * FROM `students` WHERE regional='PI' ORDER BY `regional` ASC";
					$totalPiaui = mysqli_query($conexao, $mPiaui );
					$alunosPiaui  = mysqli_num_rows($totalPiaui);
					
					// Quantidade de alunos que estuda em Pará 
					$mPara ="SELECT * FROM `students` WHERE regional='PA' ORDER BY `regional` ASC";
					$totalPara = mysqli_query($conexao, $mPara );
					$alunosPara  = mysqli_num_rows($totalPara);
					
					// Quantidade de alunos que estuda em Rio de Janeiro
					$mRioJaneiro ="SELECT * FROM `students` WHERE regional='RJ' ORDER BY `regional` ASC";
					$totalRioJaneiro = mysqli_query($conexao, $mRioJaneiro);
					$alunosRioJaneiro  = mysqli_num_rows($totalRioJaneiro);
					
					// Quantidade de alunos que estuda em Rio Grande do Norte
					$mRioGrandeNorte ="SELECT * FROM `students` WHERE regional='RN' ORDER BY `regional` ASC";
					$totalRioNorte = mysqli_query($conexao, $mRioGrandeNorte);
					$alunosRioGrandeNorte  = mysqli_num_rows($totalRioNorte);
					
					// Quantidade de alunos que estuda em  Rondônia
					$mRondonia ="SELECT * FROM `students` WHERE regional='RO' ORDER BY `regional` ASC";
					$totalRondonia = mysqli_query($conexao, $mRondonia);
					$alunosRondonia  = mysqli_num_rows($totalRondonia);
					
					// Quantidade de alunos que estuda em  Roraima
					$mRoraima ="SELECT * FROM `students` WHERE regional='RR' ORDER BY `regional` ASC";
					$totalRoraima = mysqli_query($conexao, $mRoraima);
					$alunosRoraima  = mysqli_num_rows($totalRoraima);
					
					// Quantidade de alunos que estuda em  Rio Grande do Sul
					$mRioGrandeSul ="SELECT * FROM `students` WHERE regional='RS' ORDER BY `regional` ASC";
					$totalRioGrandeSul = mysqli_query($conexao, $mRioGrandeSul);
					$alunosRioGrandeSul  = mysqli_num_rows($totalRioGrandeSul);
					
					// Quantidade de alunos que estuda em Santa Catarina 
					$mSantaCatarina  ="SELECT * FROM `students` WHERE regional='SC' ORDER BY `regional` ASC";
					$totalSantaCatarina = mysqli_query($conexao, $mSantaCatarina);
					$alunosSantaCatarina  = mysqli_num_rows($totalSantaCatarina);
					
					// Quantidade de alunos que estuda em Sergipe
					$mSergipe  ="SELECT * FROM `students` WHERE regional='SE' ORDER BY `regional` ASC";
					$totalSergipe = mysqli_query($conexao, $mSergipe);
					$alunosSergipe  = mysqli_num_rows($totalSergipe);
					
					// Quantidade de alunos que estuda em  São Paulo
					$mSaoPaulo  ="SELECT * FROM `students` WHERE regional='SP' ORDER BY `regional` ASC";
					$totalSaoPaulo = mysqli_query($conexao, $mSaoPaulo);
					$alunosSaoPaulo  = mysqli_num_rows($totalSaoPaulo);	
					
					// Quantidade de alunos que estuda em  Tocantins 
					$mTocantins  ="SELECT * FROM `students` WHERE regional='TO' ORDER BY `regional` ASC";
					$totalTocantins = mysqli_query($conexao, $mTocantins);
					$alunosTocantins   = mysqli_num_rows($totalTocantins);
					
						// Quantidade de alunos que estuda Nacional
					$mNacional  ="SELECT * FROM `answers` WHERE alternative_id=37 ORDER BY student_id ASC";
					$totalNacional = mysqli_query($conexao, $mNacional);
					$alunosNacional   = mysqli_num_rows($totalNacional);
				
					//seleciona alunos estudando
					$numTotalAlunos = "SELECT * FROM answers WHERE alternative_id=37";
					$sqlTotal = mysqli_query($conexao, $numTotalAlunos);
					$total = mysqli_num_rows($sqlTotal);
					
					
					//alunos estudando
					$multiplicacao = $total * 100;
					
					//Media de ex-alunos do SENAI do estado Acre
					
				 $mediaAC= number_format($multiplicacao /15912 ,2,'.','');

					//Media de ex-alunos do SENAI do estado de Alagoas
					$mediaAL= number_format($multiplicacao/ 19499,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em Amazonas
					$mediaAM= number_format($multiplicacao / 14741,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em Amapá 
					$mediaAP= number_format($multiplicacao /10010,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em Bahia
					$mediaBA= number_format($multiplicacao / 16233,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em Ceará
					$mediaCE= number_format($multiplicacao / 17994,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em Distrito Federal 
					$mediaDF=  number_format($multiplicacao / 11161,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  Espírito Santo
					$mediaES= number_format($multiplicacao / 19991,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  Goias
					$mediaGO=  number_format($multiplicacao / 12998,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  Maranhão 
					$mediaMA=  number_format($multiplicacao / 11599,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em   Minas Gerais
					$mediaMG=  number_format($multiplicacao /13882,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em   Mato Grosso do Sul
					$mediaMS=  number_format($multiplicacao / 10996,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em   Mato Grosso 
					$mediaMT=  number_format($multiplicacao / 13008,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em   Pará
					$mediaPA=  number_format($multiplicacao /  16432,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em   Paraíba
					$mediaPB=  number_format($multiplicacao / 18165,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  Pernambuco
					$mediaPE=  number_format($multiplicacao /18101,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  Piauí
					$mediaPI=  number_format($multiplicacao / 14625,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  Paraná
					$mediaPR=  number_format($multiplicacao / 16293,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  Rio de Janeiro
					$mediaRJ=  number_format($multiplicacao/ 16009,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  Rio Grande do Norte
					$mediaRN=  number_format($multiplicacao / 17774,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em   Rondônia
					$mediaRO=  number_format($multiplicacao / 13009,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em   Roraima
					$mediaRR=  number_format($multiplicacao / 11713,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em   Rio Grande do Sul
					$mediaRS=  number_format($multiplicacao / 13673,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em   Santa Catarina
					$mediaSC=  number_format($multiplicacao / 17990,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  Sergipe
					$mediaSE=  number_format($multiplicacao / 17799,2,'.','');
					
					//Media de ex-alunos do SENAI do estado em  São Paulo
					$mediaSP=  number_format($multiplicacao/ 17540,2,'.','');	
					
					//Media de ex-alunos do SENAI do estado em  Tocantins 
					$mediaTO=  number_format($multiplicacao / 10019,2,'.','');
					
					//Media de ex-alunos do SENAI Nacional
					$mediaNacional=  number_format($multiplicacao/ 16100,2,'.','');
				
					
					//mostra dados na tela
					echo "
					
				
					
							<td>'regionals': [
							{ 
							'description': 'AC','average': $mediaAC },</td>
							<td>
							{ 
							'description': 'AL','average':$mediaAL },</td>
							<td>{ 
							'description': 'AM','average':$mediaAM },</td>
							<td>{ 
							'description': 'AP','average':$mediaAP },</td>
							<td>{ 
							'description': 'BA','average':$mediaBA },</td>
							<td>{ 
							'description': 'CE','average':$mediaCE },</td>
							<td>{ 
							'description': 'DF','average':$mediaDF },</td>
							<td>{ 
							'description': 'ES','average':$mediaES },</td>
							<td>{ 
							'description': 'GO','average':$mediaGO },</td>
							<td>{ 
							'description': 'MA','average':$mediaMA },</td>
							<td>{ 
							'description': 'MG','average':$mediaMG },</td>
							<td>{ 
							'description': 'MS','average':$mediaMS },</td>
							<td>{ 
							'description': 'MT','average':$mediaMT },</td>
							<td>{ 
							'description': 'PA','average':$mediaPA },</td>
							<td>{ 
							'description': 'PB','average':$mediaPB },</td>
							<td>{ 
							'description': 'PE','average':$mediaPE },</td>
							<td>{ 
							'description': 'PI','average':$mediaPI },</td>
							<td>{ 
							'description': 'PR','average':$mediaPR },</td>
							<td>{ 
							'description': 'RJ','average':$mediaRJ },</td>
							<td>{ 
							'description': 'RN','average':$mediaRN },</td>
							<td>{ 
							'description': 'RO','average':$mediaRO },</td>
							<td>{ 
							'description': 'RR','average':$mediaRR },</td>
							<td>{ 
							'description': 'RS','average':$mediaRS },</td>
							<td>{ 
							'description': 'SC','average':$mediaSC },</td>
							<td>{ 
							'description': 'SE','average':$mediaSE },</td>
							<td>{ 
							'description': 'SP','average':$mediaSP },</td>
							<td>{ 
							'description': 'TO','average':$mediaTO }</td>],
					
						<td>{ 
						'national':$mediaNacional </td>}
	
						
						
					";
					
				?>
				
			</tbody>

	</body>
		
			</div>
			 <a href="http://localhost:8106"><button style="font-weight: bold; font-size: 50px; color: white;">Voltar para a tela de inicio</button></a>
</html>