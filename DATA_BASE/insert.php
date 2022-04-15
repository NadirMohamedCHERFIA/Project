<?php

if(isset($_GET["temperature"])) {
   $temperature = $_GET["temperature"]; // get temperature value from HTTP GET
   $humidity= $_GET["humidity"];
   $pressure= $_GET["pressure"];
   $altitude= $_GET["altitude"];
   $PM10=$_GET["PM10"];
   $PM25=$_GET["PM25"];
   $PM100=$_GET["PM100"];
   $P03um=$_GET["P03um"];
   $P05um=$_GET["P05um"];
   $P10um=$_GET["P10um"];
   $P25um=$_GET["P25um"];
   $P50um=$_GET["P50um"];
   $P100um=$_GET["P100um"];
   $CO2=$_GET["CO2"];
   $TVOC=$_GET["TVOC"];
   $AIR_QUALITY=$_GET["AIR_QUALITY"];
   $GAS_RESISTANCE=$_GET["GAS_RESISTANCE"];      			   
   $servername = "localhost";
   $username = "root";
   $password = "cherfianadir";
   $database_name = "iot";

   // Create MySQL connection fom PHP to MySQL server
   $connection = new mysqli($servername, $username, $password, $database_name);
   // Check connection
   if ($connection->connect_error) {
      die("MySQL connection failed: " . $connection->connect_error);
   }

   $sql = "INSERT INTO AIR_QUALITY (temperature) VALUES ($temperature)";
   $sql = "INSERT INTO AIR_QUALITY (humidity) VALUES ($humidity)";
   $sql = "INSERT INTO AIR_QUALITY (pressure) VALUES ($pressure)";
   $sql = "INSERT INTO AIR_QUALITY (altitude) VALUES ($altitude)";
   $sql = "INSERT INTO AIR_QUALITY (PM10) VALUES ($PM10)";
   $sql = "INSERT INTO AIR_QUALITY (PM25) VALUES ($PM25)";
   $sql = "INSERT INTO AIR_QUALITY (PM100) VALUES ($PM100)";
   $sql = "INSERT INTO AIR_QUALITY (P03um) VALUES ($P03um)";
   $sql = "INSERT INTO AIR_QUALITY (P05um) VALUES ($P05um)";	
   $sql = "INSERT INTO AIR_QUALITY (P10um) VALUES ($P10um)";
   $sql = "INSERT INTO AIR_QUALITY (P25um) VALUES ($P25um)";
   $sql = "INSERT INTO AIR_QUALITY (P50um) VALUES ($P50um)";
   $sql = "INSERT INTO AIR_QUALITY (P100um) VALUES ($P100um)";
   $sql = "INSERT INTO AIR_QUALITY (CO2) VALUES ($CO2)";
   $sql = "INSERT INTO AIR_QUALITY (TVOC) VALUES ($TVOC)";
   $sql = "INSERT INTO AIR_QUALITY (AIR_QUALITY) VALUES ($AIR_QUALITY)";
   $sql = "INSERT INTO AIR_QUALITY (GAS_RESISTANCE) VALUES ($GAS_RESISTANCE)";
   if ($connection->query($sql) === TRUE) {
      echo "New record created successfully";
   } else {
      echo "Error: " . $sql . " => " . $connection->error;
   }

   $connection->close();
} else {
   echo "temperature is not set in the HTTP request";
}
?>
