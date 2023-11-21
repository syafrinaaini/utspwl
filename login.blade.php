<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0e68c; /* Warna latar belakang kuning */
        }

        /* Kotak untuk form login */
        .login-box {
            background-color: #6adc6a;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Tulisan login di tengah-tengah */
        }

        /* Style untuk form */
        form {
            display: flex;
            flex-direction: column;
        }

        form div {
            margin-bottom: 20px; /* Jarak antar kotak form */
        }

        label {
            font-weight: bold;
        }

        input {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            padding: 8px 16px;
            border-radius: 4px;
            border: none;
            background-color: #f0e68c; /* Warna kuning untuk tombol login */
            color: black; /* Warna teks pada tombol */
            cursor: pointer;
            transition: background-color 0.3s ease; /* Transisi warna saat hover */
        }

        button:hover {
            background-color: #f0e68c; /* Warna kuning yang lebih gelap saat hover */
        }
    </style>
</head>
<body>
    <div class="login-box"> <!-- Kotak untuk form login -->
        <h1>Login</h1>
        <form method="POST" action="{{ route('process.login') }}">
            @csrf <!-- CSRF token untuk keamanan Laravel -->
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
