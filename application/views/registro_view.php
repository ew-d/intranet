<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro | Sal De Apuros</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: #0b0f1c;
      font-family: 'Inter', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .register-container {
      background-color: #1a1d2e;
      border-radius: 25px;
      padding: 3rem 2rem;
      max-width: 420px;
      width: 100%;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      text-align: center;
      color: white;
    }

    .register-container img {
      width: 150px;
      border-radius: 50%;
      margin-bottom: 1rem;
    }

    h2 {
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      color: #ffc107;
    }

    .form-group {
      margin-bottom: 1.2rem;
      text-align: left;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 0.8rem;
      border: none;
      border-radius: 10px;
      background-color: #2a2d3f;
      color: white;
      font-size: 1rem;
    }

    .success-message {
      color: #4caf50;
      background-color: rgba(76, 175, 80, 0.1);
      padding: 0.8rem;
      border-radius: 10px;
      margin-bottom: 1.2rem;
      font-size: 0.9rem;
    }

    .error-message {
      color: #ff5252;
      background-color: rgba(255, 82, 82, 0.1);
      padding: 0.8rem;
      border-radius: 10px;
      margin-bottom: 1.2rem;
      font-size: 0.9rem;
    }

    .btn-register {
      margin-top: 1rem;
      padding: 0.8rem;
      background: linear-gradient(to right, #6c5dd3, #8f44fd);
      border: none;
      border-radius: 10px;
      color: white;
      font-weight: bold;
      width: 100%;
      cursor: pointer;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .btn-register:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    .login-link {
      margin-top: 1.5rem;
      display: block;
      color: #bbb;
      text-decoration: none;
      font-size: 0.9rem;
    }

    .login-link:hover {
      color: #ffc107;
    }
  </style>
</head>
<body>
  <div class="register-container">
    
    <h2>¡Adquiere tus beneficios aquí!</h2>

    <?php if ($this->session->flashdata('success')): ?>
      <div class="success-message"><?= $this->session->flashdata('success') ?></div>
    <?php endif; ?>
    
    <?php if ($this->session->flashdata('error')): ?>
      <div class="error-message"><?= $this->session->flashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/registrar_usuario') ?>" method="POST">
      <div class="form-group">
        <label for="nombre">Nombre completo</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
      </div>

      <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo" required>
      </div>

      <div class="form-group">
        <label for="contrasena">Contraseña</label>
        <input type="password" id="contrasena" name="contrasena" placeholder="Crea tu contraseña" required>
      </div>

      <button type="submit" class="btn-register">Registrarse</button>
    </form>

    <a href="<?= site_url('auth/login_usuario') ?>" class="login-link">¿Ya tienes cuenta? Inicia sesión</a>
  </div>
</body>
</html>