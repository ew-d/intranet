<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/

// Controlador por defecto
$route['default_controller'] = 'welcome'; // Página principal (pública)

// Rutas públicas (sin login)
$route['browse']   = 'welcome/browse';
$route['details']  = 'welcome/details';
$route['streams']  = 'welcome/streams';

// Ruta protegida (solo con login)
$route['eventos']  = 'welcome/eventos';  // Solo usuarios logueados

// Autenticación
$route['login']    = 'auth/login';       // Formulario de login (GET)
$route['registro'] = 'auth/registro';    // Formulario de registro (GET)
$route['logout']   = 'auth/logout';      // Cerrar sesión (GET)

// Procesamiento de formularios (POST)
$route['auth/login']    = 'auth/login_usuario';       // Procesa login (POST)
$route['auth/registro'] = 'auth/registrar_usuario';   // Procesa registro (POST)