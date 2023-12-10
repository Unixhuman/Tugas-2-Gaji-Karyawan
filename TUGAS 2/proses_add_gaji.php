<?php

require_once 'GajiHandler.php';

$obj = new GajiHandler($pdo);
$obj->saveData($_POST);

echo '<script>alert("Data Berhasil Ditambah");window.location="gaji.php"</script>';
exit;