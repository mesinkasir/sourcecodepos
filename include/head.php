<?php
session_start();

if(!isset($_SESSION['userId']))
{
  header('location:welcome.php');
}
 ?>
<?php require "assets/function.php" ?>
<?php require 'assets/db.php';?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo siteTitle(); ?></title>
  <?php require "assets/autoloader.php" ?>
  <link rel="shortcut icon" sizes="16x16" href="https://axcora.com/img/angular.png">
<link rel="shortcut icon" sizes="32x32" href="https://axcora.com/img/angular.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <style type="text/css">
  <?php include 'css/spectre.css'; ?>
  <?php include 'css/spectre-icons.css'; ?>
  <?php include 'css/docs.css'; ?>
   <?php 
 $notice="";
if (isset($_POST['saveSetting'])) {
if ($con->query("update users SET name='$_POST[name]',number='$_POST[number]' where id='$_SESSION[userId]'")) {
  $notice ="<div class='alert alert-success'>Successfully Saved</div>";
  header("location:profile.php?notice=Successfully saved");
}
else{
  $notice ="<div class='alert alert-danger'>Error is:".$con->error."</div>";
}
}
if (isset($_GET['notice'])) {
  $notice = "<div class='alert alert-success'>Successfully Saved</div>";
}
 ?>
  <?php 
 $notice="";
if (isset($_POST['saveSetting'])) {
if ($con->query("update users SET email='$_POST[email]',password='$_POST[password]' where id='$_SESSION[userId]'")) {

  $notice ="<div class='alert alert-success'>Successfully Saved</div>";
  header("location:accountSetting.php?notice=Successfully saved");
}
else{
  $notice ="<div class='alert alert-danger'>Error is:".$con->error."</div>";
}

}
if (isset($_GET['notice'])) {
  $notice = "<div class='alert alert-success'>Successfully Saved</div>";
}
 ?>
   <?php 
  $notice="";
  if (isset($_POST['safeIn'])) 
  {
    $filename = $_FILES['inPic']['name'];
    move_uploaded_file($_FILES["inPic"]["tmp_name"], "photo/".$_FILES["inPic"]["name"]);
    if ($con->query("insert into categories (name,pic) value ('$_POST[name]','$filename')")) {
      $notice ="<div class='alert alert-success'>Successfully Saved</div>";
    }
    else
      $notice ="<div class='alert alert-danger'>Not saved Error:".$con->error."</div>";
  }

   ?>
<?php 
if (isset($_POST['saveProduct'])) {
if ($con->query("insert into inventeries (catId,supplier,name,unit,price,description,company) values ('$_POST[catId]','$_POST[supplier]','$_POST[name]','$_POST[unit]','$_POST[price]','$_POST[discription]','$_POST[company]')")) {
  $notice ="<div class='alert alert-success'>Successfully Saved</div>";
}
else{
  $notice ="<div class='alert alert-danger'>Error is:".$con->error."</div>";
}
}

 ?> 
  </style>
</head>
<body>
