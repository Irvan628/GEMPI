<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi GEMPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #3a5a40;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .registration-container {
            background-color: #d4e2d4;
            border-radius: 15px;
            border: 2px solid #007bff; /* Blue border */
            overflow: hidden;
            display: flex;
            width: 700px;
            max-width: 90%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .registration-form {
            padding: 40px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .registration-form h4 {
            font-weight: bold;
            margin-bottom: 30px;
            color: #3a5a40;
            text-align: center;
        }

        .registration-form .form-control {
            border-radius: 10px;
            margin-bottom: 20px;
            padding-left: 40px;
            font-size: 14px;
        }

        .registration-form .form-control::placeholder {
            color: #888;
        }

        .registration-form .input-icon {
            position: absolute;
            left: 15px;
            top: 10px;
            color: #888;
        }

        .register-button {
            background-color: #3a5a40;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            padding: 10px;
            margin-top: 10px;
        }

        .register-link {
            font-size: 12px;
            color: #3a5a40;
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            font-weight: bold;
            color: #3a5a40;
            text-decoration: none;
        }

        .logo-section {
            background-color: white;
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        .logo-section img {
            width: 100%;
            height: 100%;
            object-fit: contain; /* Ensures the image scales to fit without cropping */
        }
    </style>
</head>
<body>

<div class="registration-container">
    <!-- Left side (Registration form) -->
    <div class="registration-form">
        <h4>Registrasi</h4>
        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div class="position-relative mb-3">
                <span class="input-icon"><i class="bi bi-person-fill"></i></span>
                <input type="text" name="name" class="form-control" placeholder="Nama" required>
            </div>
            <div class="position-relative mb-3">
                <span class="input-icon"><i class="bi bi-envelope-fill"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="position-relative mb-3">
                <span class="input-icon"><i class="bi bi-geo-alt-fill"></i></span>
                <input type="text" name="address" class="form-control" placeholder="Alamat" required>
            </div>
            <div class="position-relative mb-3">
                <span class="input-icon"><i class="bi bi-telephone-fill"></i></span>
                <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon" required>
            </div>
            <div class="position-relative mb-3">
                <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="position-relative mb-3">
                <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password" required>
            </div>
            <!-- Role field is now hidden -->
            <input type="hidden" name="role" value="user">
            <button type="submit" class="btn register-button w-100">Registrasi</button>
            <p class="register-link">Sudah Punya Akun? <a href="login">Login Disini</a></p>
        </form>
    </div>

    <!-- Right side (Logo) -->
    <div class="logo-section">
        <img src="img/logo.png" alt="GEMPI Logo">
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
