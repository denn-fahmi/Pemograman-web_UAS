<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PS Rental Fahmi - Gaming Mode</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --ps-blue: #00439c;
            --ps-neon: #0072ff;
            --ps-dark: #0a0e14;
            --ps-accent: #00d2ff;
            --ps-surface: rgba(255, 255, 255, 0.05);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at top, #1a1f25 0%, #0a0e14 100%);
            color: #e0e0e0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        h2, .navbar-brand {
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Navbar Glassmorphism */
        .navbar {
            background: rgba(10, 14, 20, 0.85) !important;
            backdrop-filter: blur(15px);
            border-bottom: 2px solid var(--ps-neon);
            padding: 1rem 0;
        }

        .navbar-brand i {
            color: var(--ps-neon);
            filter: drop-shadow(0 0 8px var(--ps-neon));
        }

        /* Card Gaming Style */
        .card {
            background: var(--ps-surface);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            color: white;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: var(--ps-neon);
            box-shadow: 0 0 25px rgba(0, 114, 255, 0.4);
        }

        /* Form Inputs */
        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white !important;
            border-radius: 8px;
        }

        .form-control:focus, .form-select:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: var(--ps-neon);
            box-shadow: 0 0 10px var(--ps-neon);
        }

        /* Table Styling for Admin */
        .table { color: #e0e0e0; border-color: rgba(255, 255, 255, 0.1); }
        .table-dark { background: rgba(0,0,0,0.4) !important; }
        
        /* Buttons Neon */
        .btn-primary {
            background: linear-gradient(45deg, var(--ps-blue), var(--ps-neon));
            border: none;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(0, 114, 255, 0.3);
        }

        .btn-success {
            background: linear-gradient(45deg, #00b09b, #96c93d);
            border: none;
        }

        /* Pagination Neon */
        .page-link {
            background: var(--ps-surface);
            border: 1px solid rgba(255,255,255,0.1);
            color: white;
        }
        .page-item.active .page-link {
            background: var(--ps-neon);
            border-color: var(--ps-neon);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php?url=dashboard">
            <i class="bi bi-playstation fs-2 me-2"></i>RENTAL PS
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link px-3" href="index.php?url=dashboard"><i class="bi bi-grid-fill me-1"></i> Dashboard</a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="nav-link btn btn-outline-danger border-2 px-4 rounded-pill" href="logout.php" onclick="return confirm('Exit Game?')">
                        <i class="bi bi-power me-1"></i> LOGOUT
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">