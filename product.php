<?php
	session_start();
	
	if(isset($_SESSION['uname'])){
		
		echo "<h2> Welcome to product page</h2>";

		echo"<br><a href='welcome.php'><input type=button name=back value=back></a>";

	}
	else{	
		
		echo "<script>location.href='index.php'</script>";
	
	}
?>