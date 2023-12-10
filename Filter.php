<?php
$sql= sprintf("SELECT * FROM contacts where id = $id");
$result= $conn->query($sql);
$contact = $result->fetch_assoc();
$support = $contact['type']

$sql= sprintf("SELECT * FROM contacts where id = $id");
$result= $conn->query($sql);
$contact = $result->fetch_assoc();
$sales = $contact['type']

$sql= sprintf("SELECT * FROM contacts where id = $id");
$result= $conn->query($sql);
$contact = $result->fetch_assoc();
?>