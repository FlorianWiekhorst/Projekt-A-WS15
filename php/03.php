<?php
	session_start();
	$title='Modul: Netzwerke/Internet';
	include 'header.php';
?>
	
	<div id="mainwindow">
		
			<div id="NWI">
				<p id=begrüßung"><br>Netzwerke/Internet Labor</p>
				
				<!-- img Kabelsalat.png einbinden -->
				
					<div id="kabelsalat">
					<p id="kabel">Welches Kabel ist mit dem Server verbunden?</p>
						<form action="">
							<input type="radio" name="kabel" value="red">Rot<br>
							<input type="radio" name="kabel" value="yellow">Gelb<br>
							<input type="radio" name="kabel" value="green">Grün
						</form>
					</div>
					
					<div id="weiter_button">
						<p><a href="04.php"><strong>weiter --></strong></a></p>
					</div>
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
