<?php

require_once 'GajiHandler.php';


$obj = new GajiHandler($pdo);
$obj->updateData($_POST);

echo '<script>alert("Data Berhasil Diupdate");window.location="gaji.php"</script>';
exit;