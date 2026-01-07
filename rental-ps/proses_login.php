<?php
session_start();
require_once 'config/Database.php';
require_once 'app/models/Auth.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $auth = new Auth();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $role = $auth->login($username, $password);

    if ($role) {
        header('Location: index.php?url=dashboard');
    } else {
        echo "<script>alert('Login Gagal!'); window.location='index.php?url=login';</script>";
    }
}