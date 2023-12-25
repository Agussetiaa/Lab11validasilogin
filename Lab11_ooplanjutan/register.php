<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4; /* Ubah warna background */
            color: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .registration-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px; /* Sesuaikan lebar form sesuai kebutuhan */
        }

        .registration-container h2 {
            text-align: center;
            color: #3498db; /* Ubah warna judul */
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .register-button {
            width: 100%;
            padding: 10px;
            background-color: #3498db; /* Ubah warna background button */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-button:hover {
            background-color: #2980b9; /* Ubah warna hover button */
        }
    </style>
</head>

<body>
    <div class="registration-container">
        <h2>Registration</h2>
        <form action="process_register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-input" required>

            <label for="password">Password:</label>
            <input type="password" name="password" class="form-input" required>

            <label for="role">Role:</label>
            <select name="role" class="form-input" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

            <button type="submit" name="register" class="register-button">Register</button>
        </form>
    </div>
</body>

</html>
