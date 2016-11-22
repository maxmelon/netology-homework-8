<?php
include 'functions.php';
session_start();

header('Content-Type: image/png');
header('Content-Disposition: inline; filename="Certificate.png"');

if (isset($_SESSION['guest'])) {
    $name = htmlspecialchars($_SESSION['guest']);
} else {
    $name = 'Администратор';
}

imageTextCenter('/assets/certificate.png', '/fonts/font.ttf', 30, $name, 0.5);