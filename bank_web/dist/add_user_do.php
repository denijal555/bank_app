<?php

include('functions/connect_db.php');

$client_name = $_POST['client_name'];
$client_email = $_POST['client_email'];
$client_address = $_POST['client_address'];
$client_phone = $_POST['client_phone'];
$client_datetime = date('Y-m-d H:i:s');

$query = $db->prepare("
                INSERT INTO clients
                    (client_name, client_email, client_address, client_phone, client_datetime)
                VALUES
                    (:client_name, :client_email, :client_address, :client_phone, :client_datetime)");

$query->execute(array(
            ':client_name' => $client_name,
            ':client_email' => $client_email,
            ':client_address' => $client_address,
            ':client_phone' => $client_phone,
            ':client_datetime' => $client_datetime));

header("Location: users.php");

?>
