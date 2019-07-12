<!DOCTYPE html>
<html>
<head>
  <title>Halaman Login</title>
</head>
<body>
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    html,
    body {
      height: 100%;
      overflow: hidden;
      outline: none;
    }

    body {
      font-family: "Open Sans", Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5em;
      background-color: #41474d;
      color: #f0f5fa;
    }

    .login {
      position: absolute;
      margin: 0 auto;
      top: 50%;
      left: 50%;
      width: 300px;
      height: 300px;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    .login h1 {
      position: relative;
      margin-top: 20px;
      margin-bottom: 40px;
      color: #f0f5fa;
      text-align: center;
    }
    .login h1 span {
      color: #3769e3;
    }

    .login form {
      height: 100%;
      padding: 20px;
      padding-bottom: 40px;
      background-color: #23282d;
      border-top: 4px solid #545b61;
      border-bottom: 4px solid #545b61;
    }

    .login form input,
    .login form button {
      width: 100%;
      margin-bottom: 10px;
      border: none;
      outline: none;
      padding: 10px;
      background-color: #545b61;
      color: #f8f8f2;
      font-size: 16px;
      line-height: 1.5em;
      border-radius: 4px;
      transition: all .5s ease;
    }
    .login form input::-webkit-input-placeholder,
    .login form button::-webkit-input-placeholder {
      color: #8c9196;
    }
    .login form input:-ms-input-placeholder,
    .login form button:-ms-input-placeholder {
      color: #8c9196;
    }
    .login form input::-ms-input-placeholder,
    .login form button::-ms-input-placeholder {
      color: #8c9196;
    }
    .login form input::placeholder,
    .login form button::placeholder {
      color: #8c9196;
    }
    .login form input:focus,
    .login form button:focus {
      background-color: #50555a;
    }

    .login form button[type="submit"] {
      text-transform: uppercase;
      font-weight: 700;
      background-color: #3769e3;
      color: #f0f5fa;
      cursor: pointer;
      transition: all .5s ease;
    }
    .login form button[type="submit"]:hover {
      background-color: #4c7df6;
      color: #FFF;
    }

    .morestuff {
      margin-top: 20px;
      text-align: center;
      font-size: 14px;
    }
    .morestuff a {
      transition: color .5s ease;
    }
    .morestuff a:link {
      color: #fff;
    }
    .morestuff a:hover {
      color: #4c7df6;
    }
    .morestuff a:visited {
      color: #4c7df6;
    }

  </style>
  <div class="login">
    <form action="">
      <h1>P<span>.</span>K<span>.</span>K <span>LOGIN</span></h1>
      <input type="text" id="username" name="username" placeholder="Username" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <div class="morestuff">
      <p><a href="#2">Lupa Password?</a></p>
    </div>
  </div>
</body>
</html>