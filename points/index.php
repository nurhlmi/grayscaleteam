<?php
	$url = urlencode("http://localhost/grayscaleteam/points/");
	if(isset($_SESSION['email'])) {
		echo "<script>location='login?next=$url'</script>";
	
	} else {
?>

<!Doctype HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		<meta name="description" content="Grayscale merupakan sebuah Tim kecil" />
		
		<title>Points - Grayscale Team</title>
		
		<link href="../dist/css/sb-admin-2.min.css" rel="stylesheet" type="text/css">
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
		<link rel="shorcut icon" href="../img/icon.ico">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<div class="menu-bar">
			<div class="row"><center>
				<div class="menu col-xs-3" onclick="location='#index';">
					<i class="fa fa-fw fa-home"></i><br>Beranda
				</div>
				<div class="menu col-xs-3" onclick="location='cart';">
					<i class="fa fa-fw fa-gift"></i><br>Penukaran
				</div>
				<div class="menu col-xs-3" onclick="location='profile';">
					<i class="fa fa-fw fa-user"></i><br>Akun
				</div>
				<!--<div class="menu col-xs-3" data-toggle="modal" data-target="#logout">
					<i class="fa fa-fw fa-power-off"></i><br>Keluar
				</div>-->
			</center></div>
		</div>
		<div class="form-points">
			<center>
				<img src="../img/member/hilmi.png" class="logo-user">
				<h3 style="font-weight:normal">Nur Hilmi</h3>
				<span class="points">20.000 Poin</span>
			</center>
		</div>
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8 col-sm-offset-2">
					<div class="form-board">
						<h3><i class="fa fa-fw fa-calendar"></i> Poin</h3>
						<span>1 Kali</span>
					</div>
				</div>
				
				<div class="col-sm-8 col-sm-offset-2">
					<div class="form-board">
						<h3><i class="fa fa-fw fa-trophy"></i> Peringkat</h3>
						<div class="list gold">
							<div class="pull-left">
								<span style="font-size:25px">1</span>
								<img class="logo" src="../img/member/hilmi.png">
							</div>
							<div style="font-size:18px;padding-left:90px">
								<b>Nur Hilmi</b><br>
								<span>20.000 Poin</b>
							</div>
						</div>
						<div class="list silver">
							<div class="pull-left">
								<span style="font-size:25px">2</span>
								<img class="logo" src="../img/member/agung.png">
							</div>
							<div style="font-size:18px;padding-left:90px">
								<b>Agung Kusprasetyo</b><br>
								<span>15.000 Poin</b>
							</div>
						</div>
						<div class="list bronze">
							<div class="pull-left">
								<span style="font-size:25px">3</span>
								<img class="logo" src="../img/member/satrio.png">
							</div>
							<div style="font-size:18px;padding-left:90px">
								<b>Muhammad Satrio</b><br>
								<span>10.000 Poin</b>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-8 col-sm-offset-2">
					<div class="form-board">
						<h3><i class="fa fa-fw fa-search"></i> Tebak Kata</h3>
						<span>Cari kata rahasia dari gambar yang diposting di Instagram Grayscale Team, 
						kemudian input kata itu ke sini buat dapetin poin!</span>
						<div class="form-button">
							<div class="row">
								<div class="col-xs-9">
									<input name="kata" type="text" placeholder="Tebak Kata">
								</div>
								<div class="col-xs-3">
									<button class="btn btn-danger">Kirim</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-sm-12">
					<div class="form-board">
						<h3><i class="fa fa-fw fa-gift"></i> Tukar Poin</h3>
						<div class="row">
							<!--
							<div class="col-sm-3">
								<img src="../img/hadiah/tri50.png" class="reedem">
								<span class="reedem-title">Pulsa Tri 50 Ribu</span>
								<span class="reedem-value">50.000 Poin</span><br><br>
								<button class="btn btn-danger">Tukar</button>
								<hr>
							</div>
							<div class="col-sm-3">
								<img src="../img/hadiah/xl50.png" class="reedem">
								<span class="reedem-title">Pulsa XL 50 Ribu</span>
								<span class="reedem-value">50.000 Poin</span><br><br>
								<button class="btn btn-danger">Tukar</button>
								<hr>
							</div>
							-->
							<div class="col-sm-3">
								<img src="../img/hadiah/tri20.png" class="reedem">
								<span class="reedem-title">Pulsa Tri 20 Ribu</span>
								<span class="reedem-value">20.000 Poin</span><br><br>
								<button class="btn btn-danger">Tukar</button>
								<hr>
							</div>
							<div class="col-sm-3">
								<img src="../img/hadiah/xl20.png" class="reedem">
								<span class="reedem-title">Pulsa XL 20 Ribu</span>
								<span class="reedem-value">20.000 Poin</span><br><br>
								<button class="btn btn-danger">Tukar</button>
								<hr>
							</div>
							<div class="col-sm-3">
								<img src="../img/hadiah/tri10.png" class="reedem">
								<span class="reedem-title">Pulsa Tri 10 Ribu</span>
								<span class="reedem-value">10.000 Poin</span><br><br>
								<button class="btn btn-danger">Tukar</button>
								<hr>
							</div>
							<div class="col-sm-3">
								<img src="../img/hadiah/xl10.png" class="reedem">
								<span class="reedem-title">Pulsa XL 10 Ribu</span>
								<span class="reedem-value">10.000 Poin</span><br><br>
								<button class="btn btn-danger">Tukar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php } ?>