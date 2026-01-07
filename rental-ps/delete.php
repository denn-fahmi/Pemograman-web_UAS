<?php
session_start();
// Cek keamanan: hanya admin yang bisa hapus
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    die("Akses ditolak!");
}

require_once 'config/database.php';
require_once 'app/models/PlaystationModel.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new PlaystationModel();
    
    if ($model->delete($id)) {
        header("Location: index.php?url=dashboard");
        exit();
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location='index.php?url=dashboard';</script>";
    }
} else {
    header("Location: index.php?url=dashboard");
}