<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login | Sal De Apuros</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/formulario.css') ?>">
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

    .login-container {
      position: absolute;
      background-color: #1a1d2e;
      border-radius: 25px;
      padding: 3rem 2rem;
      max-width: 420px;
      width: 100%;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      text-align: center;
      color: white;
    }

    .btn-volver-inicio {
      position: fixed;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background-color: white;
      color: #000;
      font-weight: bold;
      padding: 0.6rem 1rem;
      border-radius: 50px;
      text-decoration: none;
      margin-bottom: 1.5rem;
      transition: background 0.3s ease;
      top: 20px;
      left: 20px;
    }

    .btn-volver-inicio:hover {
      background-color: #ffc107;
      color: black;
    }

    .btn-volver-inicio .icono {
      width: 24px;
      height: 24px;
    }

    .login-container img {
      width: 150px;
      border-radius: 50%;
      margin-bottom: 1rem;
    }

    h2 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
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

    .error-message {
      color: #ff5252;
      background-color: rgba(255, 82, 82, 0.1);
      padding: 0.8rem;
      border-radius: 10px;
      margin-bottom: 1.2rem;
      font-size: 0.9rem;
    }

    .form-links {
      display: flex;
      flex-direction: column;
      font-size: 0.85rem;
      margin-top: 0.5rem;
      text-align: left;
      gap: 0.4rem;
    }

    .form-links a {
      color: #bbb;
      text-decoration: none;
    }

    .form-links a:hover {
      color: #ffc107;
    }

    .btn-login {
      margin-top: 1.5rem;
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

    .btn-login:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

<!-- Botón "Volver" en la esquina superior izquierda -->
<a href="<?= site_url('/') ?>" class="btn-volver-inicio">
  <svg xmlns="http://www.w3.org/2000/svg" class="icono" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
  </svg>
  Ir a la página de inicio
</a>

  <div class="login-container">
    <img src="<?= base_url() ?>public/assets/images/stream-05.jpg" alt="sal de apuros">
    <h2>¡Bienvenido a <span style="color:#ffc107;">Sal de Apuros</span>!</h2>

    <?php if ($this->session->flashdata('error')): ?>
      <div class="error-message"><?= $this->session->flashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/login_usuario') ?>" method="POST">
      <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo aquí" required>
      </div>

      <div class="form-group">
        <label for="contrasena">Contraseña</label>
        <input type="password" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña aquí" required>
      </div>

      <button type="submit" class="btn-login">Iniciar sesión</button>
    </form>

    <div class="form-links">
      <a href="<?= site_url('auth/registro') ?>">¿No tienes cuenta? Regístrate aquí</a>
    </div>
  </div>
</body>
</html>
