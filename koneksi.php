<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'isyaratceria';

$koneksi = new mysqli($host, $username, $password, $dbname);
if(!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" sizes="196x196" href="./assets/img/Logo/white.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
        
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nerko+One&display=swap');
    </style>

    <title>Ceria - Website belajar isyarat</title>
</head>
