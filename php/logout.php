<?php
	session_start();
	$title='logout';
	include 'header.php';
	
	session_destroy();
?>
<p> Ihre Sitzung wurde beendet.</p>
<p>Klicken Sie hier für einen Neustart:</p>
<p><a href="Index.php"><strong>Neustart</strong></a></p>


<?php
	include 'footer.php';
?>
