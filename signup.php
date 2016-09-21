<?php
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$firstnameError= "";
	
	//kas on üldse olemas
	if (isset ($_POST["firstname"])) {
		
		// oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["firstname"])) {
			
			//oli tõesti tühi
			$firstnameError = "See väli on kohustuslik";
			
		}
	
	}
	
	$signupPasswordError = "";
	
	//kas on üldse olemas
	if (isset ($_POST["signupPassword"])) {
		
		// oli olemas, ehk keegi vajutas nuppu
		//kas oli tühi
		if (empty ($_POST["signupPassword"])) {
			
			//oli tõesti tühi
			$signupPasswordError = "See väli on kohustuslik";
			
		} else {
			
			//oli midagi, ei olnud tühi
			
			//kas pikkus vähemalt 8
			if (strlen ($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tm pikk";
				
			}
			
		}
	
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		
		<form method="POST">
			
			<input placeholder="E-mail" name="loginEmail" type="email">
			
			<br><br>
			
			<input placeholder="Parool" name="loginPassword" type="password">
			
			
			<br><br>
			
			<input type="submit">
			
		
		</form>

	</body>
</html>


<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Loo kasutaja</h1>
		
		
		<form method="POST">
			<label>Eesnimi</label><br>
			<input name="Firstname" type="text"> <?php echo $firstnameError; ?>
			
			<label>Perekonnanimi</label><br>
			<input name="Lastname" type="text"> <?php echo $lastnameError; ?>

			<br><br>
			
			<label>E-mail</label><br>
			<input type="E-mail" name="signupEmail">

			<br><br>

			<label>Mobiiltelefoni number</label>
			<input type="number" name="mobilenumber">

			<br><br>
			
			<label>Parool</label>
			<input type="text" name="signupPassword">

			<br><br>

			<label>Parool uuesti</label>
			<input type="text" name="signupPassword">
			
			<br><br>

			<label>Sünnipäev</label>
			<input type="date" name="birthday">
			<input type="submit" value="Loo kasutaja">
			
			<br><br>

			<label>Sugu</label>
			<input type="radio" name="gender" value="Mees" checked> Mees <br>
			<input type="radio" name="gender" value="Naine"> Naine <br>
			<input type="radio" name="gender" value="Muu"> Muu <br>
		
		</form>

	</body>
</html>