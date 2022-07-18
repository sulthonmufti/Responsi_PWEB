<html>
<head>
	<style type="text/css">
		body{
        background-image: url(bghome4.jpg);
	    }
	    .navbar {
	        height: 60px;
	        top: 0;
	        margin: 0;
	        display: flex;
	        background-color: #ff8244;
	    }
	    .logo {
	        display: flex;
	        flex: 1;
	        margin-left: 20px;
	        color: #000000;
	    }
	    .menu{
	    flex: 1;
	    margin-right: 20px;
	    }
	    .menu ul{
	        display: flex;
	        list-style: none;
	        float: right;
	    }
	    .menu li{
	        margin-left: 40px;
	    }
	    .menu a{
	        text-decoration: none;
	        color: #323232;
	    }
	    .link1{
	    	font-size: 16px;
	    }
	    .link2{
	    	font-size: 16px;
	    }
	</style>
<body>
		<div class="header">
        <div class="navbar">
            <div class="logo">
                <p>Tugas Akhir Pemrograman Web </p>
                <img src="komputer.png" class="logoku">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="calculator.html">Calculator</a></li>
                    <li><a href="calender.php">Tanggal</a></li></li>
                </ul>
            </div>
        </div>
    	</div>
    	<br>
	<?php
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas = $_POST['kelas'];
		$semester = $_POST['semester'];
		$komentar = $_POST['komentar'];
		$tanggal=date("d-m-Y");

		echo "<head><title>Daftar Pengunjung</head></title>";
		$fp = fopen("daftar.txt", "a+");
		fputs($fp, "$tanggal|$nama|$nim|$kelas|$semester|$komentar\n");
		fclose($fp);

		echo "<div align=center class=kotak><strong><font size=3 face=Arial><u>Data diri anda akan tersimpan pada daftar pengunjung</u></font></strong></div><br>";
		echo "<center><a href=inputdata.html class=link1>Input Data Lain</a></center><br>";
		echo "<center><a href=data.php class=link2>Data Pengunjung</a></center><br>";
	?>
</body>
</head>
</html>