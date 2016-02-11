<?php
	session_start();
	$title='Modul: Netzwerke/Internet';
	include 'header.php';
?>
	
	<div id="mainwindow">
		
			<div id="NWI">
				<p id=begrüßung"><br>Netzwerke/Internet Labor</p>
				
			
				
				<div id="kabelsalat">
				<p><img src="http://file2.npage.de/014013/83/bilder/nwi_kabelspiel_ver2.png"/></p>
				
				<p id="kabel">Welcher PC ist mit dem Server verbunden?</p>
						<form action="">
							<input type="radio" name="kabel" value="pc_A">A<br>
							<input type="radio" name="kabel" value="pc_B">B<br>
							<input type="radio" name="kabel" value="pc_C">C
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
