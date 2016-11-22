<?php
include "functions.php";
session_start();
if(isLogged()) :
deleteTest($_GET['delete']);
unset($_GET['delete']);
header('Location: ' . getHomepagePath());
endif;