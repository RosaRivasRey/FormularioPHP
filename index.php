<?php include("includes/header.php");?>

	<div class='container'>
	<form class="form-horizontal">
	  <div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
		  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
		</div>
	  </div>
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-10">
		  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <div class="checkbox">
			<label>
			  <input type="checkbox"> Recordar
			</label>
		  </div>
		</div>
	  </div>
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Enviar</button>
		</div>
	  </div>
	</form>
        <form method="post" action="procesar.php">
			<label for="nombre">Nombre</label>
			<input name='nombre' type='text' placeholder='Escribe tu nombre'required>
			<label for='email'>email</label>
			<input name='email' type='email' placeholder='Escribe tu email'required>
			<label for="poblacion">Poblacion</label>
			<input name='poblacion' type='text' placeholder='Escribe tu poblacion'required>
			<button class='btn btn-primary' type='submit'>Enviar</button>
		</form>
		</div>
<?php include("includes/footer.php")?>