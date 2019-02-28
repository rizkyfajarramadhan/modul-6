<html>
	<head>
		<title>Hapus Cookie</title>
	</head>
	<body>

		<?php
			setcookie('username','Oktavian1234');
			if(isset($_COOKIE['username'])){
            echo 'cookie di set<br/>';
            
				//menghapus cookie dengan masa berlaku 1 jam yang lalu
				setcookie('username','', time() - 1 * 3600);
				echo 'cookie dihapus';
			}else{
            echo 'unset';
            
			}
		?>

		<p>Tekan Refresh(f5);
	</body>
</html>