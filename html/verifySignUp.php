<?php
session_start();
include 'database.php';
$data = [
    'name' => $_POST['name'],
    'pass' => $_POST['password'],
    'email' => $_POST['email']
];
$sql = "INSERT INTO team_members (Name, Password,Email) VALUES (:name, :pass,:email)";
$stmt= $pdo->prepare($sql);
$stmt->execute($data);
header("Location: signIn.php");
?>
