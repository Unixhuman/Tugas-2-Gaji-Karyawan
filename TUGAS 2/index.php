<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
  <link rel="stylesheet" href="style.css?<?php echo time();?>">
</head>
<body>

<!-- Header -->
<header>
    <h4>Sistem Karyawan</h4>
</header>
<!-- end Header -->

<!-- navbar -->
<nav>
  <a class="active" aria-current="page" href="./index.php">
    <i class="fa-solid fa-user"></i>
      <span>Data Karyawan</span>
  </a>
  <a class="" href="./gaji.php">
    <i class="fa-solid fa-money-bill-wave"></i>
      <span>Data Gaji</span>
  </a>
</nav>
<!-- end navbar -->



<?php 

require_once 'KaryawanHandler.php';
require_once 'function.php';
$obj = new KaryawanHandler($pdo);
$datas = $obj->displayAllData();
?>

<!-- section content -->
<section style="margin-top:60px;" class="content">
  <div class="title">
    <h4>Table Data Karyawan</h4>
    <a class="btn_add" href="./add_karyawan.php">Add Karyawan</a>
  </div>
  <table id="table">
  <tr>
    <th>No</th>
    <th>NIK</th>
    <th>Nama Lengkap</th>
    <th>Alamat</th>
    <th>Gaji Pokok</th>
    <th>Action</th>
  </tr>
  <?php if(!empty($datas)):?>
  <?php $no=1;?>
  <?php foreach($datas as $data):?>
  <tr>
    <td><?=$no?></td>
    <td><?=$data['nik']?></td>
    <td><?=$data['nama_lengkap']?></td>
    <td><?=$data['alamat']?></td>
    <td><?=rupiah($data['gaji_pokok']) ?></td>
    <td>
      <a href="./add_gaji.php?nik=<?=$data['nik']?>" class="btn_set">Set Gaji</a>
    </td>
  </tr>
  <?php $no++;?>
  <?php endforeach;?>
  <?php endif;?>
  
</table>
</section>
<!-- end content -->
  
</body>
</html>