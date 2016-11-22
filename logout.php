<?php
session_start();
include 'functions.php';
logout();
header('Location: ' . getLoginPath());