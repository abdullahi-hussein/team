<?php
session_start();
// set variables
$email=$_POST['email'];
$Pass=$_POST['pass'];
// echo $Pass;
include 'database.php';
$sql='select password,email from team_members where Email=? and Password=?';
$stmt=$pdo->prepare($sql);
$stmt->execute([$email,$Pass]);
$posts=$stmt->fetchAll();

if ($posts) {
  header("Location: home.php");
} else {
  header("Location: signIn.php");
}
?>
