

				
				
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
		<title>Desafio</title>
	</head>
	<body>
		<h2>Desafio</h2>
		<table>
			<thead>
				<tr>
					<th>Total de alunos estudando|</th>
					<th>Alunos divididos por alunos estudando|</th>
					<th>Multiplicado por 100|</th>
					
				</tr>
			</thead>
			<tbody>
				<?php 
					//seleciona alunos estudando
					$numTotalAlunos = "SELECT * FROM answers WHERE alternative_id=37";
					$sqlTotal = mysqli_query($conexao, $numTotalAlunos);
					$total = mysqli_num_rows($sqlTotal);
					
					
				
					//seleciona ex alunos
					$numTotalExAlunos = "SELECT * FROM students ";
					$sqlExTotal = mysqli_query($conexao, $numTotalExAlunos);
					$totalEx = mysqli_num_rows($sqlExTotal);
					
					//ex alunos divididos por alunos estudando
					$divisao = $totalEx / $total;
					
					//alunos estudando
					$multiplicacao = $total * 100;
					
					//ex alunos 
					$multiplicacao2 = $totalEx * 100;
					
					//ex alunos + alunos estudando 
					$multiplicacao3 = $divisao * 100;
					
					
				
					
					//mostra dados na tela
					echo "
						<tr>
							<td>$total|</td>
							<td>$divisao</td>
							<td>$multiplicacao3</td>
				
							
							
							
						</tr>
					";
					
				?>
				
			</tbody>
		</table>	
	</body>
	 <a href="http://localhost:8106"><button style="font-weight: bold; font-size: 50px; color: white;">Voltar para a tela de inicio</button></a>
</html>