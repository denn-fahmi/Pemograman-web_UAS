<?php
session_start();
require_once 'config/database.php';
require_once 'app/models/PlaystationModel.php';
require_once 'app/models/Auth.php';

$url = $_GET['url'] ?? 'login';
$psModel = new PlaystationModel();

if ($url == 'login') {
    include 'views/login.php';
} elseif ($url == 'dashboard') {
    if (!isset($_SESSION['user_id'])) header('Location: index.php?url=login');
    $search = $_GET['search'] ?? '';
    $filter = $_GET['filter'] ?? '';
    $page = $_GET['page'] ?? 1;
    $limit = 6;
    $offset = ($page - 1) * $limit;
    $data['ps'] = $psModel->getAllData($search, $filter, $limit, $offset);
    $totalData = $psModel->countAll($search, $filter);
    $data['totalPages'] = ceil($totalData / $limit);
    include 'views/layout/header.php';
    include 'views/ps/index.php';
    include 'views/layout/footer.php';
} elseif ($url == 'tambah') {
    include 'views/layout/header.php';
    include 'views/ps/tambah.php';
    include 'views/layout/footer.php';
} elseif ($url == 'ubah') {
    $data['ps'] = $psModel->getById($_GET['id']);
    include 'views/layout/header.php';
    include 'views/ps/ubah.php';
    include 'views/layout/footer.php';
} elseif ($url == 'proses_tambah') {
    $gambar = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'public/img/' . $gambar);
    $psModel->create([
        'nama_unit' => $_POST['nama_unit'],
        'jenis' => $_POST['jenis'],
        'harga_per_jam' => $_POST['harga_per_jam'],
        'status' => $_POST['status'],
        'gambar' => $gambar
    ]);
    header('Location: index.php?url=dashboard');
} elseif ($url == 'proses_ubah') {
    $gambar = $_POST['gambar_lama'];
    if ($_FILES['gambar']['name'] != "") {
        $gambar = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'public/img/' . $gambar);
    }
    $psModel->update([
        'id_ps' => $_POST['id_ps'],
        'nama_unit' => $_POST['nama_unit'],
        'jenis' => $_POST['jenis'],
        'harga_per_jam' => $_POST['harga_per_jam'],
        'status' => $_POST['status'],
        'gambar' => $gambar
    ]);
    header('Location: index.php?url=dashboard');
}