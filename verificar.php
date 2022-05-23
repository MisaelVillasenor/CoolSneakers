<?php
	session_start();	
	if (isset($_SESSION['id'])) {
		echo "<script>window.location.href = '#'</script>";
	} else
	{
		echo "<script>window.location.href = '/COOLSNEAKERS/php/login2.php'</script>";
	}
?>