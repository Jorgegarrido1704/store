<?php
// Connection to the database
$host = "localhost";
$user = "root";
$clave = "";
$bd = "prueba_pull";

// Connect to the database
$con = mysqli_connect($host, $user, $clave, $bd);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}$cliente="Plastic_omniun";
$calibreselect=16;
$sql = "SELECT calibre, presion FROM registro WHERE calibre =$calibreselect and Cliente='$cliente'";
$result = $con->query($sql);
$data = []; // Initialize an array to store the retrieved data

// Fetch data and store it in the array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
                'presion' => floatval($row['presion'])
        ];
    }
}

// Close the database connection
$con->close();

// Output the JSON-encoded data
header('Content-Type: application/json'); // Set the response content type
echo json_encode($data);
?>
