<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PT BENDI CAR</title>
    <style>
        /* CSS nyaaa */
        body {
            background-image: url('foto login.jpg'); 
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            width: 400px; 
            padding: 40px; 
            border-radius: 10px; 
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); 
            background-color: rgba(255, 255, 255, 0.9); 
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type='text'], input[type='password'] {
            width: 100%;
            padding: 15px; 
            margin-bottom: 20px; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }

        button[type='submit'] {
            width: 100%;
            padding: 15px; 
            background-color: #007bff; 
            color: white; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 16px;
        }

        button[type='submit']:hover {
            background-color: #0056b3; 
        }

        @media(max-width:600px) {
            .login-container {
                width: 90%; 
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login PT BENDI CAR</h2>
    <form method="post" action="koneksi.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>