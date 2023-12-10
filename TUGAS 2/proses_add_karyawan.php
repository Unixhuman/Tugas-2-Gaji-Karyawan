<?php

require_once 'KaryawanHandler.php';

$obj = new KaryawanHandler($pdo);
$obj->saveData($_POST);

echo '<script>alert("Data Berhasil Ditambah");window.location="index.php"</script>';
exit;