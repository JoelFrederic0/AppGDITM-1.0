<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #4682B4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 110vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            height: 60%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
     
        }

        .login-container h2 {
            margin-bottom: 30px;
            color: #333333;
            font-size: 24px;
            font-weight: bold;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0;
            display: inline-block;
            border: 2px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .login-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 30px;
            margin: 30px 0;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }

        .login-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-top: 10px;
            font-weight: bold;
        }

        .forgot-password {
            color: #333333;
            font-size: 14px;
            text-decoration: underline;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="coordenadora.php" method="post">
            <input type="text" id="username" name="username" placeholder="Nome de Usuário" required><br>
            <input type="password" id="password" name="password" placeholder="Senha" required><br>
            <input type="submit" value="Entrar">
        </form>
        <div class="forgot-password">Esqueceu a senha?</div>
        <?php if(isset($login_err)) { ?>
            <div class="error"><?php echo $login_err; ?></div>
        <?php } ?>
    </div>
</body>
</html>
