<?php
session_start();
if(!isset($_SESSION['diurnas_h']) && !isset($_SESSION['noturnas_h'])){
	$_SESSION['diurnas_h'] = 00;
	$_SESSION['diurnas_m'] = 00;
	$_SESSION['noturnas_h'] = 00;
	$_SESSION['noturnas_m'] = 00;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<title>Document</title>
	
</head>
<body>
	<div class="container mb-5">
		<div class="row justify-content-center mt-5">

			<div class="col-md-auto mt-5">
				<h1>Horario diurno</h1>
				<div class="row justify-content-center">
					<div class="col-md-auto">
						<?php echo "<h3>".$_SESSION['diurnas_h'].":".$_SESSION['diurnas_m']."<h3>";?>
					</div>
				</div> 
			</div>
			
			<div class="col-md-auto mt-5">
				<h1>Horario noturno</h1>
				<div class="row justify-content-center">
					<div class="col-md-auto">
					<?php echo "<h3>".$_SESSION['noturnas_h'].":".$_SESSION['noturnas_m']."<h3>";?>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-auto mt-5">
				<h1>Informe o periodo trabalhado</h1>
			</div>
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-md-auto mt-5">
				<div class="row">
					<div class="col-5 text-center mb-3">
						<label for="inicio">Inicio</label>
					</div>
					<div class="col text-center">
						<label for="termino">Término</label>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="row">
							<div class="col-5">
								<select name="inicio_h" id="inicio_h">
								
									<?php
										$i = 0;
										while ($i <= 23) {
									?>
											<option value='<?php echo $i;?>'><?php echo $i;?></option>
									<?php
											$i+=1;
										}
									?>
								</select>
							</div>
							<div class="col-1">
								<p class="h5">:</p>
							</div>
							<div class="col">
								<select name="inicio_m" id="inicio_m">
									
									<?php
										$i = 0;
										while ($i <= 59) {
									?>
											<option value='<?php echo $i;?>'><?php echo $i;?></option>
									<?php
											$i+=1;
										}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="col">
						
							<div class="row">
								<div class="col-5">
									<select name="termino_h" id="termino_h">
									
										<?php
											$i = 0;
											while ($i <= 23) {
										?>
												<option value='<?php echo $i;?>'><?php echo $i;?></option>
										<?php
												$i+=1;
											}
										?>
									</select>
								</div>
								<div class="col-1">
									<p class="h5">:</p>
								</div>
								<div class="col">
									<select name="termino_m" id="termino_m">
										
										<?php
											$i = 0;
											while ($i <= 59) {
										?>
												<option value='<?php echo $i;?>'><?php echo $i;?></option>
										<?php
												$i+=1;
											}
										?>
									</select>
								</div>
							</div>
						
					</div>
				</div>
				
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-auto mt-3">
				<button class="btn btn-primary" id="calculo">Calcular</button>
			</div>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
	$(function(){
		$("#calculo").click(()=>{
			alert($("#inicio_h").val());
		})
	})
</script>
</html>
