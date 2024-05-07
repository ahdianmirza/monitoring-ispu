<?php

$server       = ini_get("mysql.default_host"); //Kalau X sama dalam 1 
$user         = "root";
$password     = "";
$database     = "db_monitoringispu"; //Nama Database di phpMyAdmin

$dbconnect      = mysqli_connect($server, $user, $password, $database);

function query($query)
{
    global $dbconnect;
    $result = mysqli_query($dbconnect, $query);
    $box = [];
    while ($sql = mysqli_fetch_assoc($result)) {
        $box[] = $sql;
    }
    return $box;
}

$ambilnamadevice    = $_GET["namadevice"];
$co                 = $_GET["co"];
$no2                = $_GET["no2"];
$pm25               = $_GET["pm25"];
$ispuco             = $_GET["ispuco"];
$ispuno2            = $_GET["ispuno2"];
$ispupm25           = $_GET["ispupm25"];

date_default_timezone_set("Asia/Jakarta");
$tgl                = date("Y-m-d H:i:s");


//UPDATE DATA REALTIME PADA TABEL tb_monitoring
// $sql      = "UPDATE tb_monitoring SET 
// 	   	  	              waktu	= '$tgl',namadevice	= '$ambilnamadevice',sensor1	= '$sensor1', sensor2	= '$sensor2'";
// $dbconnect->query($sql);

//INSERT DATA REALTIME PADA TABEL tb_save  	 
$sqlsave = "INSERT INTO logdatas (waktu, namadevice,co,no2,pm25,ispuco,ispuno2,ispupm25)
			 VALUES ('" . $tgl . "', '" . $ambilnamadevice . "', '" . $co . "', '" . $no2 . "', '" . $pm25 . "', '" . $ispuco . "', '" . $ispuno2 . "', '" . $ispupm25 . "')";
$dbconnect->query($sqlsave);

//MENJADIKAN JSON DATA
$response = query("SELECT * FROM logdatas ORDER BY idMonitoring DESC")[0];
//$response = query("SELECT * FROM tb_datarfid,tb_monitoring WHERE tb_datarfid.rfid='$ambilrfid'" )[0];
$result = json_encode($response);
echo $result;
