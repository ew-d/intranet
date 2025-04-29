<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <style>
    body {
      margin: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #0a0a1a;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 0 1rem;
      position: relative; /* Permite colocar el botón en la esquina sin afectar el contenido */
    }

    .form-container {
      background-color: #0c0c1e;
      padding: 2rem;
      border-radius: 1.5rem;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      box-sizing: border-box;
    }

    .form-container h2 {
      color: #fbbc04;
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .form-container label {
      color: #ffffff;
      font-size: 0.95rem;
      margin-bottom: 0.4rem;
      display: block;
    }

    .form-container input,
    .form-container select {
      width: 100%;
      padding: 0.75rem 1rem;
      margin-bottom: 1.2rem;
      border: none;
      border-radius: 0.7rem;
      background-color: #1e1e2f;
      color: #fff;
      font-size: 1rem;
      transition: 0.3s;
      box-sizing: border-box;
    }

    .form-container input:focus,
    .form-container select:focus {
      outline: none;
      box-shadow: 0 0 0 2px #8a2be2;
    }

    .form-note {
      text-align: left;
      margin-top: -10px;
      margin-bottom: 15px;
    }

    .form-note a {
      color: #fbbc04;
      font-size: 0.85rem;
      text-decoration: none;
    }

    .form-container button {
      width: 100%;
      padding: 0.9rem;
      background: linear-gradient(135deg, #8a2be2, #7b1fa2);
      border: none;
      border-radius: 0.8rem;
      color: white;
      font-weight: bold;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background 0.3s ease;
      box-sizing: border-box;
    }

    .form-container button:hover {
      background: linear-gradient(135deg, #9c47ff, #a56eff);
    }

    .form-container .login-link {
      text-align: center;
      margin-top: 1rem;
    }

    .form-container .login-link a {
      color: #ccc;
      font-size: 0.85rem;
      text-decoration: none;
    }

    /* Estilo para el botón "Volver" */
    .back-button {
      width: auto;
      padding: 0.7rem 1.2rem;
      background: linear-gradient(135deg, #ff4081, #ff3366);
      border: none;
      border-radius: 0.8rem;
      color: white;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease;
      position: absolute; /* Fija el botón en la esquina */
      top: 20px; /* Ubicado en la parte superior */
      left: 20px; /* Ubicado en la parte izquierda */
      box-sizing: border-box;
    }

    .back-button:hover {
      background: linear-gradient(135deg, #ff6699, #ff5577);
    }

    @media (max-width: 480px) {
      .form-container {
        padding: 1.5rem;
      }

      .form-container h2 {
        font-size: 1.3rem;
      }
    }
  </style>
</head>
<body>

  <!-- Botón "Volver" en la esquina superior izquierda -->
  <a href="<?= base_url() ?>">
    <button class="back-button">Volver al inicio</button>
  </a>

  <div class="form-container">
    <h2>¡Adquiere tus beneficios aquí!</h2>
    <form method="post" action="<?= base_url('auth/registrar') ?>">
      <label for="nombre">Nombre completo</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>

      <label for="dni">DNI</label>
      <input type="text" id="dni" name="dni" placeholder="Ingresa tu DNI" required>

      <label for="celular">Celular</label>
      <input type="text" id="celular" name="celular" placeholder="Ingresa tu número de celular" required>

      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

      <label for="clave">Contraseña</label>
      <input type="password" id="clave" name="clave" placeholder="********" required>

      <label for="plan">¿Qué plan deseas?</label>
      <select id="plan" name="plan" required>
        <option disabled selected>-- Selecciona un plan --</option>
        <option value="mensual">Mensual - $15.00</option>
        <option value="anual">Anual - $150.00</option>
      </select>

      <div class="form-note">
        <a href="<?= base_url() ?>#planes-vigentes">Conoce nuestros planes</a>
      </div>

      <button type="submit">Registrarse</button>

      <div class="login-link">
        <a href="<?= base_url('auth/login') ?>">¿Ya tienes cuenta? Inicia sesión</a>
      </div>
    </form>
  </div>

</body>
</html>
