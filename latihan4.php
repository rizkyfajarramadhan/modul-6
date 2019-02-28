<html>
	<head>
		<title>Set Session</title>
	</head>
	<body>
		<?php
			//inisialiasi data session
			session_start();
			
			//set session jika belum ada
			if(!isset($_SESSION['test'])){
				$_SESSION['test'] = 'value';
				
			}else{
				echo 'session di set <br/>';
				
				//mencetak nilai session test
				echo 'Nilai : '.$_SESSION['test'].'<br/>';
				
				//mencetak semua elemen session
				print_r($_SESSION);
			}
		?>
		<p>Tekan Refresh(f5);
	</body>
</html>