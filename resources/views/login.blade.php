<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #6d1af5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background: white;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 500px;
      text-align: center;
    }
    .login-container h1 {
      margin-bottom: 1.5rem;
      color: #333;
    }
    .input-group {
      margin-bottom: 1rem;
    }
    .input-group input {
      width: 100%;
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .login-button {
      background-color: #37015c ;
      color: white;
      border: none;
      padding: 0.75rem;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s;
    }
    .login-button:hover {
      background-color: #0056b3;
    }
    @media (max-width: 400px) {
      .login-container {
        width: 90%;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>
    <div class="input-group">
      <input type="text" placeholder="Username" required>
    </div>
    <div class="input-group">
      <input type="password" placeholder="Password" required>
    </div>
    <button class="login-button">Login</button>
  </div>
</body>
</html>