<html>
<head>
	<style type="text/css">
		body{
        background-image: url(bghome4.jpg);
	    }
	    table.tabledata{
			margin-left: auto;
        	margin-right: auto;
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
	    .tabledata{
	    	background-color: white;
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
    	<p class="kembali"><a href=inputdata.html>Klik disini</a> untuk mengisi Isi data baru</p>
		<h3><u>Daftar data pengunjung :</u></h3>
<?php
	echo "<head><title>MY Guest Book</head></title>";
	$fp = fopen("daftar.txt", "r");
	echo "<table border='1' width='70%' style='text-align: center;' class=tabledata>";
	echo("<tr><td>Tanggal</td><td>Nama</td><td>NIM</td><td>Kelas</td><td>Semester</td><td>Komentar</td></tr>");
		$tanggal=date("d-m-Y");
	while ($isi = fgets($fp)) {
    	$pisah = explode('|', $isi);
    	echo("<tr><td>$tanggal</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td><td>$pisah[5]</td></tr>");
	}
?>
</body>
</head>
</html>