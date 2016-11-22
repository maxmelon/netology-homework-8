<?php

$uploadDir = "uploads/";

if (!file_exists($uploadDir) || (file_exists($uploadDir) && !is_dir($uploadDir))) {
    mkdir($uploadDir);
}

$temp = explode('.', $_FILES['testJson']['name']);

// Используем марку времени (до миллисекунд) для названия файла
$timeStampExploded = explode('.', microtime(true));
$timeStampImploded = implode ($timeStampExploded);
$newFileName = $timeStampImploded . '.' . end($temp);

$uploadFile = $uploadDir . $newFileName;

if (move_uploaded_file($_FILES['testJson']['tmp_name'], $uploadFile)) {
    header('Location: list.php');
} else {
echo "Не удалось переместить файл в директорию на сервере\n";
}

