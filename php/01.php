<?php
	session_start();
	
	if(isset($_POST['name']))
	{
		$_SESSION['name'] = $_POST['name'];
	}
	if(isset($_POST['sex']))
	{
		$_SESSION['sex'] = $_POST['sex'];
	}

	if(isset($_SESSION['name']) && isset($_SESSION['sex'])) 
	{
		header("Location: 02.php");
	}
	$title='Anmeldung';
	include 'header.php';
	

	
?>

	<div id="mainwindow">
		<header><img id="logo" src="http://www.haw-hamburg.de/fileadmin/templates/fundraising/images/logo-haw-hamburg.png"/> </header>

			<div id="anmeldeformular">
			<form action="01.php" method="post">
				<p>Willkommen an der Hochschule für angewandte Wissenschaften</p>
				<p>Dein Name:   <input type="text" value="<?php if (isset($_POST['name'])){echo ($_POST['name']);} ?>" name="name" class="nameinput"></p>
				
					
					<p>Du bist</p>
						
							<input type="radio" name="sex" value="male">männlich<br>
							<input type="radio" name="sex" value="female">weiblich
							
							<br>
							<input type="Submit" name="submit" value="Weiter">
							<?php 
							if(isset($_POST['submitpressed'])&& !isset($_SESSION['sex']))
							{
								echo('<p style="color: red">Bitte wählen Sie ein Geschlecht!</p>');
							}
							if(isset($_POST['submitpressed'])&& empty($_SESSION['name'])) {
								echo('<p style="color: red">Bitte tragen Sie ihren Namen ein!</p>');
							}
							?>
							
							
							<input type="hidden" name="submitpressed" value"true">
							
						</form>
					
					<p><br></p>
					<div id="creditpoints">
						<p id"points">Creditpoints</p>
						<p id"points">0</p>
					</div>
			</div>	
	</div>	
<?php
	include 'footer.php';
?>
