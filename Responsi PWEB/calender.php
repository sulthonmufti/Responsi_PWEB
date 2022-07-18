<html>
<head>
<style type="text/css">
     body{
        background-image: url(bghome4.jpg);
    }
    table  {
        border:1px solid #aaa;
        border-collapse:collapse;
        background-color:#fff;
        font-family: Verdana;
        font-size:12px;
        width: 40%;
        height: 55%;
        margin-left: auto;
        margin-right: auto;   
    }
    
    th {
        background-color:#777;
        color:#fff;
        height:32px;
    }
    
    td {
        border:1px solid #ccc;
        height:32px;
        width:32px;
        text-align:center;
    }
    .keterangan{
        font-size: 10px;
    }
    
    td.red {
        color:red;
    }
    td.bg-yellow {
        background-color:#fffea5;
    }
    
    td.bg-orange {
        background-color:#ffa500;
    }
    
    td.bg-green {
        background-color:#90ee90;
    }
    
    td.bg-white {
        background-color:#fff;
    }
    
    td.bg-blue {
        background-color:#00d9ff;
    }
    
    a {
        color: #333;
        text-decoration:none;
        
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
</style>
</head>
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
                    <li><a href="inputdata.html">Input data</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>

<table border='0'>
<?php 
// Get the current date
$date = getdate();

// Get the value of day, month, year
$mday = $date['mday'];
$mon = $date['mon'];
$wday = $date['wday'];
$month = $date['month'];
$year = $date['year'];


$dayCount = $wday;
$day = $mday;

while($day > 0) {
    $days[$day--] = $dayCount--;
    if($dayCount < 0)
        $dayCount = 6;
}

$dayCount = $wday;
$day = $mday;

if(checkdate($mon,31,$year))
    $lastDay = 31;
elseif(checkdate($mon,30,$year))
    $lastDay = 30;
elseif(checkdate($mon,29,$year))
    $lastDay = 29;
elseif(checkdate($mon,28,$year))
    $lastDay = 28;

while($day <= $lastDay) {
    $days[$day++] = $dayCount++;
    if($dayCount > 6)
        $dayCount = 0;
}   

// Days to highlight
$day_to_highlight = array(9, 30);

echo("<tr>");
echo("<th colspan='7' align='center'>$month $year</th>");
echo("</tr>");
echo("<tr>");
    echo("<td class='red bg-yellow'>Min</td>");
    echo("<td class='bg-yellow'>Sen</td>");
    echo("<td class='bg-yellow'>Sel</td>");
    echo("<td class='bg-yellow'>Rab</td>");
    echo("<td class='bg-yellow'>Kam</td>");
    echo("<td class='bg-yellow'>Jum</td>");
    echo("<td class='bg-yellow'>Sab</td>");
echo("</tr>");

$startDay = 0;
$d = $days[1];

echo("<tr>");
while($startDay < $d) {
    echo("<td></td>");
    $startDay++;
}

for ($d=1;$d<=$lastDay;$d++) {
    if (in_array( $d, $day_to_highlight))
        $bg = "bg-green";
    else
        $bg = "bg-white";
    // Highlights the current day   
    if($d == $mday)
        echo("<td class='bg-blue'><a href='#' title='Detail of day'>$d</a></td>");
    else 
        echo("<td class='$bg'><a href='#' title='Detail of day'>$d</a></td>");
    
    $startDay++;
    if($startDay > 6 && $d < $lastDay){
        $startDay = 0;
        echo("</tr>");
        echo("<tr>");
    }
}
echo("</tr>");
?>
</table>

<p class="keterangan">
    <font color="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SABTU, 9 JULI 2022 : </font><font color="white"> HARI RAYA IDUL ADHA 1443 H</font> <br>
    <font color="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SABTU, 30 JULI 2022 : </font><font color="white">TAHUN BARU ISLAM 1444 H</font>
</p>
</body>
</html>