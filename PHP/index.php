<?php
include "Pelanggan.php";
session_start();

if (!isset($_SESSION['daftar_pelanggan'])) {
    $_SESSION['daftar_pelanggan'] = [];
}

// Tambah pelanggan
if (isset($_POST['tambah'])) {
    $fotoName = $_FILES['foto']['name'];
    $fotoTmp  = $_FILES['foto']['tmp_name'];
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) mkdir($targetDir);
    $targetFile = $targetDir . basename($fotoName);

    if (move_uploaded_file($fotoTmp, $targetFile)) {
        $p = new Pelanggan($_POST['id'], $_POST['nama'], $_POST['telp'], $_POST['alamat'], $targetFile);
        $_SESSION['daftar_pelanggan'][] = $p;
    }
}

// Update pelanggan
if (isset($_POST['update'])) {
    foreach ($_SESSION['daftar_pelanggan'] as $p) {
        if ($p->getID() == $_POST['id']) {
            $fotoPath = $p->getPhoto();
            if (!empty($_FILES['foto']['name'])) {
                $fotoName = $_FILES['foto']['name'];
                $fotoTmp  = $_FILES['foto']['tmp_name'];
                $targetFile = "uploads/" . basename($fotoName);
                if (move_uploaded_file($fotoTmp, $targetFile)) {
                    $fotoPath = $targetFile;
                }
            }
            $p->setNama($_POST['nama']);
            $p->setNo_Telephone($_POST['telp']);
            $p->setAlamat($_POST['alamat']);
            $p->setPhoto($fotoPath);
        }
    }
}

// Hapus pelanggan
if (isset($_GET['hapus'])) {
    foreach ($_SESSION['daftar_pelanggan'] as $i => $p) {
        if ($p->getID() == $_GET['hapus']) {
            unset($_SESSION['daftar_pelanggan'][$i]);
        }
    }
}

// Ambil data pelanggan yang mau diupdate
$updateData = null;
if (isset($_GET['update'])) {
    foreach ($_SESSION['daftar_pelanggan'] as $p) {
        if ($p->getID() == $_GET['update']) {
            $updateData = $p; 
        }
    }
}

$displayData = $_SESSION['daftar_pelanggan']; // default semua
if (isset($_GET['keyword']) && $_GET['keyword'] != '') {
    $keyword = strtolower($_GET['keyword']);
    $filtered = [];
    foreach ($displayData as $p) {
        if (strpos(strtolower($p->getID()), $keyword) !== false ||
            strpos(strtolower($p->getNama()), $keyword) !== false ||
            strpos(strtolower($p->getNo_Telephone()), $keyword) !== false) {
            $filtered[] = $p;
        }
    }
    $displayData = $filtered;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>ADD CUSTOMERS</title>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">ADD / UPDATE CUSTOMERS</h2>

    <!-- Form Tambah / Update-->
    <form method="post" enctype="multipart/form-data">
        ID: <input type="text" name="id" required value="<?= $updateData ? $updateData->getID() : ''; ?>"<?= $updateData ? 'readonly' : ''; ?>><br>
        NAMA: <input type="text" name="nama" required value="<?= $updateData ? $updateData->getNama() : ''; ?>"><br>
        NO. TELEPHONE: <input type="text" name="telp" required value="<?= $updateData ? $updateData->getNo_Telephone() : ''; ?>"><br>
        ALAMAT: <input type="text" name="alamat" required value="<?= $updateData ? $updateData->getAlamat() : ''; ?>"><br>
        FOTO: <input type="file" name="foto"><br>
        <button type="submit" name="<?= $updateData ? 'update' : 'tambah'; ?>">
            <?= $updateData ? 'UPDATE' : 'ADD'; ?>
        </button>
        <?php if($updateData): ?>
            <a href="index.php">CANCEL</a>
        <?php endif; ?>
    </form>

     <!-- Pencarian -->
    <form method="get" style="margin-top:20px; margin-bottom:20px;">
        Cari: <input type="text" name="keyword" value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : '' ?>">
        <button type="submit">CARI</button>
        <a href="index.php">RESET</a>
    </form>

    <h2>DAFTAR PELANGGAN</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>NAMA</th><th>TELEPHONE</th><th>ALAMAT</th><th>PHOTO</th><th>Aksi</th>
        </tr>
        <?php foreach ($displayData as $p): ?>
        <tr>
            <td><?= $p->getID(); ?></td>
            <td><?= $p->getNama(); ?></td>
            <td><?= $p->getNo_Telephone(); ?></td>
            <td><?= $p->getAlamat(); ?></td>
            <td><img src="<?= $p->getPhoto(); ?>" width="100"></td>
            <td>
                <a href="?hapus=<?= $p->getID(); ?>">DELETE</a>
                <a href="?update=<?= $p->getID(); ?>">UPDATE</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
