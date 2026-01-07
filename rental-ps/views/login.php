<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PS Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background: #0a0e14;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-image: radial-gradient(circle at center, #1e3c72 0%, #0a0e14 100%);
        }

        .login-box {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            padding: 40px;
            border-radius: 25px;
            border: 1px solid rgba(0, 114, 255, 0.3);
            box-shadow: 0 0 50px rgba(0, 114, 255, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .ps-symbols {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5rem;
            color: #0072ff;
            letter-spacing: 15px;
            margin-bottom: 20px;
            text-shadow: 0 0 15px #0072ff;
        }

        h3 { font-family: 'Orbitron', sans-serif; color: white; margin-bottom: 30px; }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            padding: 12px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            box-shadow: 0 0 15px #0072ff;
        }

        .btn-start {
            background: linear-gradient(45deg, #0072ff, #00d2ff);
            border: none;
            color: white;
            font-weight: 800;
            padding: 12px;
            letter-spacing: 2px;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0, 114, 255, 0.4);
        }

        .btn-start:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px #0072ff;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="ps-symbols">△○✕☐</div>
        <h3>PRESS START</h3>
        <form action="proses_login.php" method="POST">
            <input type="text" name="username" class="form-control" placeholder="USERNAME" required>
            <input type="password" name="password" class="form-control" placeholder="PASSWORD" required>
            <button type="submit" class="btn btn-start w-100 rounded-pill">LOGIN PLAYER</button>
        </form>
    </div>
</body>
</html>