<?php
ob_start(); 
session_start();
session_regenerate_id();    
if (!defined('header')) {
    echo('Not this time biitch:p ');
    exit();
}
$timezone=  date_default_timezone_set('Africa/Tunis');
// connection with db
 require "db.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Riask is a platfrom that aim to make the information accessible for everyone around the globe">
    <meta name="keywords" content="Riask, riask, ask, question, Answer, Ask, Question, Education,knowledge, math, science, medical science, economie, business, sharing, helping, research ">
    <meta name="author" content="Khoubaib Bouhghalmi">

    <link rel="stylesheet" href="css/front.css">
    <!-- <script src="/font_awsome/all.js"></script> -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Montserrat&display=swap" rel="stylesheet">
    <!--Notification-->
    <script src="js_ex/notification/simpleNotify.min.js"></script>
    <link rel="manifest" href="js/manifest.json"></link>
    <link rel="stylesheet" href="js_ex/notification/simpleNotifyStyle.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<link rel="shortcut icon" href="images/icons/logo_transparent.ico" />
<script src="js/index.js"></script>

<meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="PWAGram">
  <link rel="apple-touch-icon" href="images/pwa_img/48x48.png" sizes="48x48">
  <link rel="apple-touch-icon" href="images/pwa_img/96x96.png" sizes="96x96">
  <link rel="apple-touch-icon" href="images/pwa_img/256x256.png" sizes="256x256">
  <link rel="apple-touch-icon" href="images/pwa_img/144x144.png" sizes="144x144">
  <meta name="msapplication-TileImage" content="images/pwa_img/144x144.png">
  <meta name="msapplication-TileColor" content="#fff">
  <meta name="theme-color" content="#fff">
<title>Riask</title>
</head>

