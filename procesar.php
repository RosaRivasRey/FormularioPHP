	   <?php 
		$nombre=$_POST['nombre'];
		$password=$_POST['password'];
		if($nombre=='Rosa'&& $password=='unitel'){
			// echo "$nombre Biennn";
			header('Location:usuarioA.php');
			exit;
		}
		else{
			if($nombre=='Angela' && $password=='Torrejon'){
				header('Location:usuarioB.php');
				exit;
			}
			else{
				if($nombre=='Vero' && $password=='coquito'){
					header('Location:usuarioC.php');
					exit;
				}
				else{
					if($nombre=='Eva' && $password=='Perea'){
						header('Location:usuarioD.php');
						exit;
					}
					else{
						if($nombre=='Alberto' && $password=='Flores'){
							header('Location:usuarioE.php');
							exit;
						}
						else{
							exit;
						}
					}
				}
			}	
		}
		?>
		</div>
<?php include("includes/footer.php");?>