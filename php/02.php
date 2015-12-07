<?php
	session_start();
	
	
	$title='Vorkurs';
	include 'header.php';
	
?>
	
	<div id="mainwindow">

			<div id="Vorkurs">
				<p id=vorkurs">Zu Beginn ein kleiner Vorkurs um sie einstufen zu können.<br>
								Versuchen Sie die Fragen intuitiv zu bearbeiten.<br>
								Viel Spaß!</p>
				<?php 
				echo $_SESSION['name'];
				?>
				<div id="vk_fragen">
					<p id="vk_frage1">In welchem Roman bzw. Film heißt es "Big Brother is Watching you"?</p>
						<form action="">
							<input type="radio" name="vk_frage1" value="1">"1984" 
							<input type="radio" name="vk_frage1" value="2">"RTL2"
							<input type="radio" name="vk_frage1" value="3">"Das Leben des Brian"
						</form>
						
						<p id="vk_frage2">Wie heißt der griechische Traumgott?</p>
						<form action="">
							<input type="radio" name="vk_frage1" value="1">Ra
							<input type="radio" name="vk_frage1" value="2">Morpheus
							<input type="radio" name="vk_frage1" value="3">Herakles
						</form>
						
						<p id="vk_frage3">Was bedeutet das Wort "Advent"? </p>
						<form action="">
							<input type="radio" name="vk_frage1" value="1">Heilig
							<input type="radio" name="vk_frage1" value="2">Ankunft
							<input type="radio" name="vk_frage1" value="3">Abend
						</form>
						
						<p id="vk_frage4">Wie nennt man wissenschaftlich einen Zustand völliger Leere?</p>
						<form action="">
							<input type="radio" name="vk_frage1" value="1">Student
							<input type="radio" name="vk_frage1" value="2">nix
							<input type="radio" name="vk_frage1" value="3">Vakuum
						</form>
				</div>
				
				<!--  Abschicken-Button hier einfügen  -->
				<div>
					<p><a href="03.php"><strong>Abschicken</strong></a></p>
				</div>
					
					<div id="creditpoints">
						<p id"points">Creditpoints</p>
						<p id"points">0</p>
					</div>
			</div>	
	</div>	
<?php
	include 'footer.php';
?>
