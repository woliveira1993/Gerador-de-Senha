<!DOCTYPE Html>
	<head>
		<title> Gerador de Senha </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	</head>
	
	<body bgcolor="black">
			<div class="row">
				<div class="d-flex justify-content-center mt-5">
					<div class="container">
				
					<div class="jumbotron jumbotron-fluid">
					  <div class="container">
						<h1 class="display-4">Gerador de Senha</h1>
						<p class="lead">Selecione os caracteres que deseja usar para formar sua senha.</p>
					  </div>
					  
					</div>
						<form method="post" action="">
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="maiusculas" id="flexCheckDefault" name="maiusculas">
							  <label class="form-check-label" for="flexCheckDefault">
								Maiúsculas
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="minusculas" id="flexCheckDefault" name="minusculas">
							  <label class="form-check-label" for="flexCheckDefault">
								Minúsculas
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="numeros" id="flexCheckDefault" name="numeros">
							  <label class="form-check-label" for="flexCheckDefault">
								Números
							  </label>
							</div>
							<div class="form-check">
							  <input class="form-check-input" type="checkbox" value="simbolos" id="flexCheckDefault" name="simbolos">
							  <label class="form-check-label" for="flexCheckDefault">
								Símbolos
							  </label>
							</div>
								<label for="customRange1" class="form-label">Tamanho</label>
								<input type="range" class="form-range" id="customRange1" min=0 max=100 value=10 name="tamanho">
							<button type="submit" class="btn btn-warning mt-3" name="botao">Gerar Senha</button>
						</form>
				
				
				<div class="d-flex justify-content-center mt-5">
					<?php
						if(isset($_POST['botao'])){
							$senha = "";
							$tamanho = $_POST['tamanho'];
							
							$ma = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
							$mi = "abcdefghijklmnopqrstuvwxyz";
							$nu = "1234567890";
							$si = "!@#$%&*_";
							
							if(isset($_POST['maiusculas'])){
								$maiusculas = $_POST['maiusculas'];
								$senha = str_shuffle($ma);
								}
							if(isset($_POST['minusculas'])){
								$minusculas = $_POST['minusculas'];
								$senha .= str_shuffle($mi);
								}
							if(isset($_POST['numeros'])){
								$numeros = $_POST['numeros'];
								$senha .= str_shuffle($nu);
								}
							if(isset($_POST['simbolos'])){
								$simbolos = $_POST['simbolos'];
								$senha .= str_shuffle($si);
								}

							
							$pass = substr(str_shuffle($senha), 0, $tamanho);
						}
						
						
							if(!empty($senha)){
					?>
					
						<div class="input-group flex-nowrap">
						  <span class="input-group-text" id="addon-wrapping">Senha</span>
						  <input type="text" class="form-control" value="<?php echo $pass; ?>" aria-label="password">
						</div>
						
							<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>